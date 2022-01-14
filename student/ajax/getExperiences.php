
<?php
include('connection.php');
$query = $db->prepare('SELECT * from blog');
$data=array();
$query->execute($data);
?>
    
<?php
while($datarow=$query->fetch())
{
?> 
    <div class="experience-block">
        <div class="blog-title"><h4><?php echo $datarow['title'];?></h4></div>
        <div class="blog-content" id="blog-content">
            <span><?php echo $datarow['content'];?></span>
            <span><a href="#">Read more</a></span>
        </div>
        
    </div>

<?php } ?>
    
      





