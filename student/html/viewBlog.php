<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/singleBlog.css">
    <!-- <link rel="stylesheet" href="../../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../bootstrap/normalize.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="https://tse2.mm.bing.net/th?id=OIP.TRLdZgnfAkaU15U8ICMdZAHaGG&pid=Api&P=0&w=194&h=161" type="image/x-icon">
    
    <title>Banasthali Portal</title>
</head>
<body>
    <div id="singleBlog">
      
    </div>



<script type="text/javascript">
  view();
    function view(){
        var blogId= <?php echo $_GET['bid'];?>;
        $.ajax(
                {
                type:"POST",
                url:"../ajax/getSingleBlog.php",
                data:{bid:blogId},
                success:function(data)
                {
                    $('#singleBlog').html(data);
                    //  console.log(data);
                    
                }
            });
    }


</script>
<!-- <script src="../../script.js" type="text/javascript"></script> -->



</body>
</html>