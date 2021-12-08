<?php
    include('connection.php');
    $option=$_POST['option'];
    $query = $db->prepare('SELECT * FROM courses_of_ece WHERE semester=? ');
    $data=array($option);
    $query->execute($data);
<<<<<<< HEAD
    while($datarow=$query->fetch()){
        echo $datarow['course_name']." ";
    }
?>

=======
>>>>>>> 45123b131ca67cd05c799d8b6462da6be48994f2

    ?> 
    <div class="table">
        <table>
            <tr>
                <th>Nomenclature of Course(s)</th>
                <th>Credit point</th>
                <th>Grades</th>
                <th>Remarks</th>
            </tr>
    <?php
    while($datarow=$query->fetch()){
        // $courses[$count]= $datarow['course_name'];
        // echo $courses[$count]." ";
    ?>
        
    <tr>
        <td style="text-align:left;"><?php echo $datarow['course_name'] ?></td>
        <td>O</td>
        <td>A</td>
        <TD>GOOD</TD>
    </tr>
                            
                       
    <?php
    }?>
    </table>
</div>
<div class="table">
    <table>
            <tr>
                <th  style="text-align:left; width:80%!important;">Semester Grade Point Average (SGPA)</th>
                <th style="text-align:center;">-</th>
            </tr>
        </table>
    </div>
    <div class="table">
    <table>
        <tr>
            <th  style="text-align:left; width:80%!important;">Cumulative Grade Point Average (CGPA) upto Fourth Semester</th>
            <th style="text-align:center;">-</th>
        </tr>
    </table>
</div>  


