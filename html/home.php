<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="../normalize.min.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <title>HOME PAGE</title>
</head>
<body>
    <section>
        <div class="col-sm-12">
            <div class="contain header">
                <div class="col-sm-3">
                    <div class="contain">
                        <i class="bx bx-menu"> </i> 
                      <span>BANASTHALI VIDHYAPEETH</span>
                    </div>
                </div>
                <div class="col-sm-6"></div>
                <div class="col-sm-3">
                    <DIV class="contain user" >
                        <i class="bx bx-user"></i>
                        <span><?php echo $_SESSION['uname']?></span>
                    </DIV>
                </div>
            </div>
        </div>
    </section>
    <div class="col-sm-12">
        <div class="contain">
            <div class="col-sm-2">
                <div class="contain sidebar">
                    <ul>
                        <li>
                            <a href="#">
                                <i class='bx bx-home' type="solid"></i>
                                <span>Home</span>  
                            </a>
                        </li>
                       
                        <li >
                            <a href="#">
                                <i class="bx bx-book-bookmark"></i>
                                <span class="dropdwn" onclick="menu_dropdwn()">  Academics</span> 
                                <span class="fas fa-caret-down first"></span> 
                            </a>
                            <ul class="drop">
                                <li>
                                    <a href="#">
                                        <i class=" "></i>
                                        <span>Result</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class=" "></i>
                                        <span>Time Table</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class=" "></i>
                                        <span>lorem</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class=" "></i>
                                        <span>dummy</span>
                                    </a>
                                </li>
                            </ul>

                        </li>
                        <li>
                           
                            <a href="#">
                                <i class="bx bx-home-smile"></i>
                                <span> Gate Pass</span>  
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bx bx-pencil"></i>
                                <span> Experience Section</span>  
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bx bx-phone-call"></i>
                                <span>Contact Us</span>  
                            </a>
                        </li>
                        <li>
                            <a class="logout" href="#">
                                <i class="bx bx-log-out"></i>
                                <span >Log Out</span>  
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="contain">

                </div>
            </div>
        </div>
    </div>
</body>
<!-- <script    type="text/javascript">
     var dropdwn=document.getElementByClass("dropdwn");
    //  dropdwn.onclick= function (){
    //     menu_dropdwn();
    //  }
     function menu_dropdwn(){
        dropdwn.style.display="block";

     } -->

</script>

</html>