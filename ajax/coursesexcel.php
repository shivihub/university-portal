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
                    $query = $db->prepare('INSERT INTO student(uname,DOB,gender,native_language,blood_group,physically_challenged,religion,caste,nationality,aadhar_number,email,pass,id) Values (?,?,?,?,?,?,?,?,?,?,?,?,?)');
                    $data = array($NAME,$DOB,$GENDER, $NATIVELANGUAGE, $BLOODGROUP,$PHYSICALLYCHALLENGED, $CASTE,$RELIGION,$NATIONALITY, $AADHARNUMBER, $EMAIL,$PASS, $ID);
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
