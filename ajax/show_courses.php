<?php
    include('connection.php');
    $option=$_POST['option'];
    $query = $db->prepare('SELECT * FROM courses_of_ece WHERE semester=? ');
    $data=array($option);
    $query->execute($data);
    while($datarow=$query->fetch()){
        echo $datarow['semester']." ";
    }
?>


<!-- $email=$_POST['email'];
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

 -->
