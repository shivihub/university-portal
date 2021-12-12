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
                    $NAME=$worksheet->getCellByColumnAndRow(0,$row)->getValue();
                    $DOB=$worksheet->getCellByColumnAndRow(1,$row)->getValue();
                    $GENDER=$worksheet->getCellByColumnAndRow(2,$row)->getValue();
                    $NATIVELANGUAGE=$worksheet->getCellByColumnAndRow(3,$row)->getValue();
                    $BLOODGROUP=$worksheet->getCellByColumnAndRow(4,$row)->getValue();
                    $PHYSICALLYCHALLENGED=$worksheet->getCellByColumnAndRow(5,$row)->getValue();
                    $CASTE=$worksheet->getCellByColumnAndRow(6,$row)->getValue();
                    $RELIGION=$worksheet->getCellByColumnAndRow(7,$row)->getValue();
                    $NATIONALITY=$worksheet->getCellByColumnAndRow(8,$row)->getValue();
                    $AADHARNUMBER=$worksheet->getCellByColumnAndRow(9,$row)->getValue();
                    $EMAIL=$worksheet->getCellByColumnAndRow(10,$row)->getValue();
                    $PASS=$worksheet->getCellByColumnAndRow(11,$row)->getValue();
                    $ID=$worksheet->getCellByColumnAndRow(12,$row)->getValue();
                    $enroll_no=$worksheet->getCellByColumnAndRow(13,$row)->getValue();
                    $banasthali_id=$worksheet->getCellByColumnAndRow(14,$row)->getValue();
                    $program=$worksheet->getCellByColumnAndRow(15,$row)->getValue();
                    $branch=$worksheet->getCellByColumnAndRow(16,$row)->getValue();
                    $street_name=$worksheet->getCellByColumnAndRow(17,$row)->getValue();
                    $city=$worksheet->getCellByColumnAndRow(18,$row)->getValue();
                    $state=$worksheet->getCellByColumnAndRow(19,$row)->getValue();
                    $country=$worksheet->getCellByColumnAndRow(20,$row)->getValue();
                    $pin_code=$worksheet->getCellByColumnAndRow(21,$row)->getValue();
                    $mobile_no=$worksheet->getCellByColumnAndRow(22,$row)->getValue();
                    $parent_mobile_no=$worksheet->getCellByColumnAndRow(23,$row)->getValue();
         
                    $query = $db->prepare('INSERT INTO student(student_name,DOB,gender,native_language,blood_group,physically_challenged,religion,caste,nationality,aadhar_number,email,pass,id,enrollment_no,banasthali_id,program,branch,street_name,city,states,country,pin_code,mobile_no,parent_mobile_no) Values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
                    $data = array                              ($NAME,$DOB,$GENDER, $NATIVELANGUAGE, $BLOODGROUP,$PHYSICALLYCHALLENGED, $RELIGION,$CASTE,$NATIONALITY, $AADHARNUMBER, $EMAIL,$PASS, $ID,$enroll_no,$banasthali_id,$program,$branch,$street_name,$city,$state, $country, $pin_code,$mobile_no, $parent_mobile_no);
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
