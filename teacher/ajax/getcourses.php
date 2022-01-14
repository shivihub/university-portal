<?php
include ('../../student/ajax/connection.php');
 
$query=$db->prepare ('SELECT * FROM courses_of_ece ');
$data=array();
$query->execute($data);
?>
<div>
 <select id="courses" name="course" onClick='getcourses()'>
    <option value="0">select</option>                        
   
<?php while($datarow=$query->fetch()){
    ?>
    
    <option value="<?php echo $datarow ['course_code'] ?>"><?php echo $datarow ['course_name'] ?></option>
<?php}

 

?>
</select>
</div>