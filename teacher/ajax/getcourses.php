<?php
include ('../../student/ajax/connection.php');
 
$query=$db->prepare ('SELECT * FROM courses_of_ece ');
$data=array();
$query->execute($data);
?>
 <select id="courses" name="course" onClick='getcourses()'>
    <option value="0">select</option>                        
   
<?php while($datarow=$query->fetch()){
    $code= $datarow['course_code'];
    $name= $datarow ['course_name'];
    ?>
    
    <option value="<?php echo $code ?>"><?php echo $name  ?></option>
<?php}

 

?>
</select>
