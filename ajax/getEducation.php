<?php
include('connection.php');
$id=$_POST['id'];

$query = $db->prepare('SELECT * FROM student  WHERE id  = ?');
$data=array($id);   
$query->execute($data);
?>
<table >
        <tr>
            <th colspan="2" class="table-heading">Educational Information</th>
        </tr>
        <?php
    if($query->rowcount()>0)
    {
        while($datarow=$query->fetch())
        {?>

            <tr>
                <th>Applied Degree</th>
                <td id="uname"><?php echo $datarow['student_name'];?></td>
            </tr>
            <tr>
                <th>Educational Qualification</th>
                <td id="DOB"><?php echo $datarow['DOB'];?></td>
            </tr>
            <tr>
                <th>Branch/Group studied</th>
                <td id=gender><?php echo $datarow['gender'];?></td>
            </tr>
            <tr>
                <th>school Name</th>
                <td id="native"><?php echo $datarow['native_language'];?></td>
            </tr>
            <tr>
                <th>Medium Of Study</th>
                <td id="blood_group"><?php echo $datarow['blood_group'];?></td>
            </tr>
            <tr>
                <th>Board/university</th>
                <td id="challenged" ><?php echo $datarow['physically_challenged'];?></td>
            </tr>
            <tr>
                <th>register No/ Roll NO</th>
                <td id="caste"><?php echo $datarow['caste'];?></td>
            </tr>
            <tr>
                <th>Class obtained</th>
                <td id="religion"><?php echo $datarow['religion'];?></td>
            </tr>
            <tr>
                <th>Year of passing / passed</th>
                <td id="nationality" style="font-weight:700;"><?php echo $datarow['nationality'];?></td>
            </tr>
            <tr>
                <th>Month Of passing / passed</th>
                <td id="aadhar"><?php echo $datarow['aadhar_number'];?></td>
            </tr>  
     

       </table>
       <table>
            <tr>
                <th colspan="2" class="table-heading">School/College Information</th>
            </tr>
            <tr>
                <th>Area Name</th>
                <td><?php echo $datarow['enrollment_no'];?></td>
            </tr>
            <tr>
                <th>City/District Name</th>
                <td><?php echo $datarow['banasthali_id'];?></td>
            </tr>
            <tr>
                <th>State Name</th>
                <td><?php echo $datarow['program'];?></td>
            </tr>
            <tr>
                <th>Pincode/zipcode</th>
                <td><?php echo $datarow['branch'];?></td>
            </tr>
            
       
            <tr>
                <th>Phone Number</th>
                <td><?php echo $datarow['street_name'];?></td>
            </tr>
            <tr>
                <th>Break in study</th>
                <td><?php echo $datarow['city'];?></td>
            </tr>
            <tr>
                <th>Reason</th>
                <td><?php echo $datarow['states'];?></td>
            </tr> 
            <?php }} ?>  
        </table>
