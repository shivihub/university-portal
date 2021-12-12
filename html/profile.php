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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8" >
                        <div class="contain">
                            
                            <div class="info-option">
                                <div class="option"onClick="getprofile();">Personal Information</div>
                                <div class="option"onClick="getEducation();" >Educational Information</div>
                                <div class="option"onClick="getHostel_info();">Hostel Detail</div>
                            </div>
                            <div id="personal_info">
                                <div class="contain"> </div>
                            </div>
                        </div>
                    </div>          
                    <div class="col-sm-2" ></div>           
                </div>
            </div>
        </div>
    </div>
  

    <script type="text/javascript">
        getprofile();
        // getHostel_info();
        // getHostel_info();
        var id= <?php echo json_encode($_SESSION['id']); ?>;
        function getprofile()
        {
            
            $.ajax({
                type:"POST",
                url:"../ajax/getprofile.php",
                data: {id:id},
                success: function(data){
                     $('#personal_info').html(data);
                    console.log(data);
                     

                }
            });
        }  

        function getEducation(){
            $.ajax({
                type:"POST",
                url:"../ajax/getEducation.php",
                data: {id:id},
                success: function(data){
                     $('#personal_info').html(data);
                    console.log(data);
                     

                }
            });
            
        } 

        function getHostel_info(){
            $.ajax({
                type:"POST",
                url:"../ajax/getHostel_info.php",
                data: {id:id},
                success: function(data){
                     $('#personal_info').html(data);
                    console.log(data);
                     

                }
            });
            
        }
    </script>
    


</body>
</html>