<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/home.css">
  <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../bootstrap/normalize.min.css">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    <?php include('navbar.php');?>
    <div class="col-sm-12">
        <div class="contain">
            <div class="col-sm-2">
                <?php include("./sidebar.php")?>
            </div>
            <div class="col-sm-10" >
                <div class="contain">         
                </div>
            </div>
        </div>
    </div>

</body>
</html>