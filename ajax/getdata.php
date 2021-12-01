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
            
            // echo "yes2 ".$password;
            // if(password_verify($password , $datarow['pass'])){
            if($password== $datarow['pass']){
                // echo "yes3 ";
                $_SESSION['uname'] = $datarow['uname'];
                echo 0;
            }
            else 
                echo 1;
             
        }
        
    }

    else
        echo "sign up first";



?>