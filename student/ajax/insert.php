<?php
 include('connection.php');

    $uname =$_POST['uname'];
    $email1=$_POST['email1'];
    $password1=$_POST['password1'];
    $hashpass =  password_hash('password1', PASSWORD_DEFAULT);
    $query = $db->prepare('INSERT INTO student(student_name,email,pass ) VALUES (?,?,?)');
    $data=array($uname,$email1,$password1);
    
    $execute=$query->execute($data);
     if($execute)
        echo 0;
     else
        echo 1;

?>
 