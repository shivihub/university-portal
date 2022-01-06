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
                    $student_name=$worksheet->getCellByColumnAndRow(0,$row)->getValue();
                    $email=$worksheet->getCellByColumnAndRow(1,$row)->getValue();
                    $pass=$worksheet->getCellByColumnAndRow(2,$row)->getValue();
                    $id=$worksheet->getCellByColumnAndRow(3,$row)->getValue();
                    $query = $db->prepare('INSERT INTO student(student_name,email,pass,id) Values (?,?,?,?)');
                    $data = array($student_name,$email,$pass,$id);
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
