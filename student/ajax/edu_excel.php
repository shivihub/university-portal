<?php
    include('../Classes/PHPExcel.php');
    include("connection.php");
    if(!empty($_FILES["excel_file"]))
    {
       
        $file_array = explode(".",$_FILES["excel_file"]["name"]);
       
        $file_name=$file_array[0];
        $extension=$file_array[1];
        if($extension == "xls" || $extension =="xlsx" || $extension == "csv")
        {
            echo "file type accepted";
            $uploadFilePath = '../uploads/'.basename($_FILES["excel_file"]["name"]);
            move_uploaded_file($_FILES["excel_file"]["tmp_name"], $uploadFilePath);
            $filename= $_FILES["excel_file"]["name"];
            echo $filename;
            $object= PHPExcel_IOFactory::load($uploadFilePath);
             foreach($object->getWorksheetIterator() as $worksheet){
                 $rowcount = $worksheet->getHighestRow();
                 for($row=2; $row<=$rowcount;$row++){
                    $id=$worksheet->getCellByColumnAndRow(0,$row)->getValue();
                    $applied_degree=$worksheet->getCellByColumnAndRow(1,$row)->getValue();
                    $educational_qualification=$worksheet->getCellByColumnAndRow(2,$row)->getValue();
                    $branch=$worksheet->getCellByColumnAndRow(3,$row)->getValue();
                    $school_name=$worksheet->getCellByColumnAndRow(4,$row)->getValue();
                    $medium=$worksheet->getCellByColumnAndRow(5,$row)->getValue();
                    $board=$worksheet->getCellByColumnAndRow(6,$row)->getValue();
                    $registration_no=$worksheet->getCellByColumnAndRow(7,$row)->getValue();
                    $class_obtained=$worksheet->getCellByColumnAndRow(8,$row)->getValue();
                    $year_of_passing=$worksheet->getCellByColumnAndRow(9,$row)->getValue();
                    $month_of_passing=$worksheet->getCellByColumnAndRow(10,$row)->getValue();
                    $area_name=$worksheet->getCellByColumnAndRow(11,$row)->getValue();
                    $city=$worksheet->getCellByColumnAndRow(12,$row)->getValue();
                    $states=$worksheet->getCellByColumnAndRow(13,$row)->getValue();
                    $pincode=$worksheet->getCellByColumnAndRow(14,$row)->getValue();
                    $phone_no=$worksheet->getCellByColumnAndRow(15,$row)->getValue();
                    $break_in_study=$worksheet->getCellByColumnAndRow(16,$row)->getValue();
                    $reason=$worksheet->getCellByColumnAndRow(17,$row)->getValue();
                    $hostel_name=$worksheet->getCellByColumnAndRow(18,$row)->getValue();
                    $room_no=$worksheet->getCellByColumnAndRow(19,$row)->getValue();
         
                    $query = $db->prepare('INSERT INTO edu_hostel_info(id,applied_degree,educational_qualification,branch,school_name,medium,board,registration_no,class_obtained,year_of_passing,month_of_passing,area_name,city,states,pincode,phone_no,break_in_study,reason,hostel_name,room_no) Values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
                    $data = array ($id,$applied_degree,$educational_qualification,$branch,$school_name,$medium,$board, $registration_no,$class_obtained,$year_of_passing,$month_of_passing,$area_name,$city,$states,$pincode,$phone_no,$break_in_study,$reason,$hostel_name,$room_no);
                    $execute=$query->execute($data);
                    if($execute)
                    {
                        echo 0;
                    }
                 }
             }
            
        }
        else{
            echo "file type not accepted";
        }


    }
    
?>
