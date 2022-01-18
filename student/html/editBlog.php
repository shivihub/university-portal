<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../css/home.css"> -->
    <link rel="stylesheet" href="../css/editBlog.css">
    <link rel="stylesheet" href="../../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../bootstrap/normalize.min.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="https://tse2.mm.bing.net/th?id=OIP.TRLdZgnfAkaU15U8ICMdZAHaGG&pid=Api&P=0&w=194&h=161" type="image/x-icon">
    
    <title>Banasthali Portal</title>
</head>
<body>
    <div class="container">
        <div class="form">
            <form>
                <label>Title:</label>
                <input type="text" id="title" name="title" placeholder="Enter the Title" class="form-control" required>
                <label >Content</label>
                <input type="text" id="content" name="content" placeholder="Start Writing" class="form-control" required>        
            </form>
        </div>
    </div>
</body>


</html>
