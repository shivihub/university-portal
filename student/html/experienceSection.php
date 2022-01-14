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
    <link rel="stylesheet" href="../css/experienceSection.css">
    <link rel="stylesheet" href="../../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../bootstrap/normalize.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="https://tse2.mm.bing.net/th?id=OIP.TRLdZgnfAkaU15U8ICMdZAHaGG&pid=Api&P=0&w=194&h=161" type="image/x-icon">
    
    <title>Banasthali Portal</title>
</head>
<body>
    
    <?php include("./navbar.php")?>

    <div class="col-sm-12">
        <div class="contain">
            <div class="col-sm-1">
                <?php include("./sidebar.php")?>
            </div>
            <div class="col-sm-11" >
                <div class="contain body">
                    <div class="heading-exp">
                        <span>EXPERIENCE SECTION</span>
                    </div>
                    <div class="search">
                        <div class="srch">
                            <i class="bx bx-search-alt-2 search-icon"></i>
                            <input class="search-box" id="" name="" list="subjects" placeholder="Search...">
                                <datalist id='subjects'>
                                    <option value="Amazon">
                                    <option value="Goldman Sachs">
                                    <option value="Flikart">
                                    <option value="Google">
                                </datalist>
</input>
                        </div>
                        <div class="edit-icon">
                            <a href="./editBlog.php"><i class="bx bx-edit" type="solid"></i></a>
                            <div class="edit-hover">Add Your's</div>
                        </div>
                    </div>
                    
                    <div class="main" id="main">
                        
                        <div class="experience-block">
                            <div class="blog-title"><h4>VMware Interview Experience for Intern+MTS (On-Campus)</h4></div>
                            <div class="blog-content" id="content">
                                <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt voluptate voluptatum qui corporis, commodi fugit totam unde nihil explicabo, voluptates, ratione fugiat incidunt quis aperiam porro. Ad nobis perspiciatis recusandae beatae incidunt expedita sed ducimus officiis. Odio corporis sed, recusandae esse sint magni...</span>
                                <span><a href="#">Read more</a></span>
                            </div>
                            
                        </div>

                        <div class="experience-block">
                            <div class="blog-title"><h4>VMware Interview Experience for Intern+MTS (On-Campus)</h4></div>
                            <div class="blog-content" id="content">
                                <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt voluptate voluptatum qui corporis, commodi fugit totam unde nihil explicabo, voluptates, ratione fugiat incidunt quis aperiam porro. Ad nobis perspiciatis recusandae beatae incidunt expedita sed ducimus officiis. Odio corporis sed, recusandae esse sint magni...</span>
                                <span><a href="#">Read more</a></span>
                            </div>
                            
                        </div>

                        <div class="experience-block">
                            <div class="blog-title"><h4>VMware Interview Experience for Intern+MTS (On-Campus)</h4></div>
                            <div class="blog-content" id="content">
                                <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt voluptate voluptatum qui corporis, commodi fugit totam unde nihil explicabo, voluptates, ratione fugiat incidunt quis aperiam porro. Ad nobis perspiciatis recusandae beatae incidunt expedita sed ducimus officiis. Odio corporis sed, recusandae esse sint magni...</span>
                                <span><a href="#">Read more</a></span>
                            </div>
                            
                        </div>

                        <div class="experience-block">
                            <div class="blog-title"><h4>VMware Interview Experience for Intern+MTS (On-Campus)</h4></div>
                            <div class="blog-content" id="content">
                                <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt voluptate voluptatum qui corporis, commodi fugit totam unde nihil explicabo, voluptates, ratione fugiat incidunt quis aperiam porro. Ad nobis perspiciatis recusandae beatae incidunt expedita sed ducimus officiis. Odio corporis sed, recusandae esse sint magni...</span>
                                <span><a href="#">Read more</a></span>
                            </div>
                            
                        </div> 
                    
                    </div>


                </div>
                
            </div>
        </div>
    </div>
    
   
    <!-- <script type="text/javascript">
//    getExperiences();
   function getExperiences()
   {
       
           $.ajax({
               type:"POST",
               url:"../ajax/getExperiences.php",
               data: {},
               success: function(data){
                   $('#main').html(data);

               }
           });
        
   }
    
    

   </script> -->
   <script type="text/javascript">
        var content = document.getElementById('content').innerTEXT;
        let result = content.substring(1, 20);
        // content = content+"...";
        console.log(result);
   </script>
    
</body>


</html>
