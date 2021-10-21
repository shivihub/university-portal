<?php
 include('connection.php');

    $uname =$_POST['uname'];
    $email1=$_POST['email1'];
    $password1=$_POST['password1'];
   
    echo "hello";
    $query = $db->prepare('INSERT INTO student(uname,email,pass) VALUES (?,?,?)');
    $data=array($uname,$email1,$password1);
    $execute=$query->execute($data);
     if($execute)
     echo 0;
     else
    echo 1;

?>
