<?php
    include('connection.php');
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query = $db->prepare('SELECT * FROM student WHERE email=? ');
    $data=array($email);
    $query->execute($data);
    if($query->rowcount()==1)
    {
        if( $datarow=$query->fetch())

        {
            // echo $password." ".$datarow['pass'];
            if($password==$datarow['pass'])
            echo 0 ;
            else 
            echo 1;
             
        }
        else 
        echo 2;
    }


 



?>