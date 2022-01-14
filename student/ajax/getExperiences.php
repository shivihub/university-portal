
<?php
    include('connection.php');
    $query = $db->prepare('SELECT * from blog ORDER BY date desc');
    $data=array();
    $query->execute($data);
    ?>
        
    <?php
    while($datarow=$query->fetch())
    {
    ?> 
        <div class="experience-block">
            <div class="blog-title"><h4><?php echo $datarow['title'];?></h4></div>
            <div class="blog-content">
                <span id="content"><?php echo substr($datarow['content'],0,250).('...');?></span>
                <span><a href="#">Read more</a></span>
            </div>
            
        </div>

<?php } ?>

      





