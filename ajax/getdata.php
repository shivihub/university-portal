<?php
    session_start();
    include('connection.php');
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query = $db->prepare('SELECT * FROM student WHERE email=? ');
    $data=array($email);
    $query->execute($data);
    if($query->rowcount()>0)
    {
        while($datarow=$query->fetch())
        {
            // if(password_verify('1234', $datarow['pass']))
            // {
            if($password== $datarow['pass']){
                $_SESSION['student_name'] = $datarow['student_name'];
                echo 0;
            }
            else 
                echo 1;
             
        }
        
    }

    else
        echo "sign up first";



?>