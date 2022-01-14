<?php
include ('../../student/ajax/connection.php');
 
$query=$db->prepare ('SELECT * FROM courses_of_ece ');
$data=array();
$query->execute($data);
 echo 1;

?>