<?php
  
  include('connection.php');
   
    $bid=$_POST['bid'];
    $query = $db->prepare('SELECT * FROM blog  WHERE bid  = ?');
    $data=array($bid);   
    $query->execute($data);

   $datarow=$query->fetch();
   echo 1;

?>
<div>
    <p><?php echo $datarow['title']?></p>
    <p></p>

</div>