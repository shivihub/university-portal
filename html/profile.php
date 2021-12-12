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
                        <div class="contain info-option">
                            <!-- <a href="#1a" style="margin-right:20px!important;">Personal Information</a>
                            <a  href="#2a" style="margin-right:20px!important;">Educational Information</a>
                            <a  href="#3a" style="margin-right:20px!important;">Hostel Detail</a> -->
                            <div class="option" >Personal Information</div>
                            <div class="option"  onClick="getEducation();" >Educational Information</div>
                            <div class="option"onClick="getHostel_info();">Hostel Detail</div>
                        </div>
                    <!-- table1 -->
                        <div id="personal_info option1" > 
                        <div>
                            <!-- <table >
                                <tr>
                                    <th colspan="2" class="table-heading">Personal Information</th>
                                </tr>
                                <tr>
                                    <th>Student Name</th>
                                    <td id="uname">dummy</td>
                                </tr>
                                <tr>
                                    <th>Date Of Birth</th>
                                    <td id="DOB">12-11-1993</td>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    <td id=gender>Female</td>
                                </tr>
                                <tr>
                                    <th>Native Language</th>
                                    <td id="native">Hindi</td>
                                </tr>
                                <tr>
                                    <th>Blood Group</th>
                                    <td id="blood_group">A+</td>
                                </tr>
                                <tr>
                                    <th>Physically Challenged</th>
                                    <td id="challenged" >No</td>
                                </tr>
                                <tr>
                                    <th>Caste</th>
                                    <td id="caste">General/oc</td>
                                </tr>
                                <tr>
                                    <th>Religion</th>
                                    <td id="religion">Hindu</td>
                                </tr>
                                <tr>
                                    <th>Nationality</th>
                                    <td id="nationality" style="font-weight:700;">INDIAN</td>
                                </tr>
                                <tr>
                                    <th>Aadhar Number</th>
                                    <td id="aadhar">xxxxxxxxxxx</td>
                                </tr>
                               
                            </table> -->
                        </div>
                        <!-- table  2    -->
                        <div>
                            <!-- <table>
                             <tr>
                                    <th colspan="2" class="table-heading">College Information</th>
                                </tr>
                                <tr>
                                    <th>Enrollment Number</th>
                                    <td>1912XXXX</td>
                                </tr>
                                <tr>
                                    <th>Banasthali Id</th>
                                    <td>BTBTE10123</td>
                                </tr>
                                <tr>
                                    <th>Program</th>
                                    <td>BTECH</td>
                                </tr>
                                <tr>
                                    <th>Branch</th>
                                    <td>ELectronics and Communication</td>
                                </tr>
                                
                            </table> -->
                        </div>
                        <!-- table 3     -->
                        <div>
                            <!-- <table>
                                <tr>
                                    <th colspan="2" class="table-heading">Current Address</th>
                                </tr>
                                <tr>
                                    <th>Street Name</th>
                                    <td>A-12 vinay nagar</td>
                                </tr>
                                <tr>
                                    <th>City</th>
                                    <td>GWALIOR</td>
                                </tr>
                                <tr>
                                    <th>State</th>
                                    <td>MADHYA PRADESH</td>
                                </tr>
                                <tr>
                                    <th>Country</th>
                                    <td style="font-weight:700;">INDIA</td>
                                </tr>
                                <tr>
                                    <th>Pincode</th>
                                    <td>474001</td>
                                </tr>
                                <tr>
                                    <th>Mobile No</th>
                                    <td>XXXXXXX</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>dummy@gmail.com</td>
                                </tr>
                                <tr>
                                    <th>Friend Mobile Number</th>
                                    <td>XXXXXXXXXX</td>
                                </tr>
                            </table> -->
                        </div>
                    </div>
                    </div>

                    <div class="col-sm-2" ></div>       
                </div>
            </div>
        </div>
    </div>
    

    <div id="option2">
        
    </div>
    <div id="option3>

    </div>

    <!-- <script type="text/javascript">
        function showprofile()
        {
            signupform.style.display = "block";
            loginform.style.display = "none";
            signbtn.classList.toggle("active"); 
            logbtn.classList.toggle("active");     
            
        } 
        function showsignup()
        {
            signupform.style.display = "block";
            loginform.style.display = "none";
            signbtn.classList.toggle("active"); 
            logbtn.classList.toggle("active");     
            
        } 
        function showsignup()
        {
            signupform.style.display = "block";
            loginform.style.display = "none";
            signbtn.classList.toggle("active"); 
            logbtn.classList.toggle("active");     
            
        } 

    </script> -->




    <script type="text/javascript">
      getprofile();
        function getprofile()
        {
            var option1=document.getElementById('option1');
            var option2=document.getElementById('option2');
            var option3 =document.getElementById('option3');
            var id= <?php echo json_encode($_SESSION['id']); ?>;
            option1.style.display = "block";
            option2.style.display = "none";
            option3.style.display = "none";
            option1.classList.toggle("option"); 
            option2.classList.toggle("option");
            option3.classList.toggle("option");
                
           
            
            $.ajax({
                type:"POST",
                url:"../ajax/getprofile.php",
                data: {id:id},
                success: function(data){
                     $('#personal_info').html(data);

                }
            });
        }

        // getEducation
        function getEducation()
        {
           
             var id= <?php echo json_encode($_SESSION['id']); ?>;
             var option1=document.getElementById('option1');
            var option2=document.getElementById('option2');
            var option3 =document.getElementById('option3');
            
            option2.style.display = "block";
            option1.style.display = "none";
            option3.style.display = "none";
            option1.classList.toggle("option"); 
            option2.classList.toggle("option");
            option3.classList.toggle("option");
             console.log("education");
           
            
            // $.ajax({
            //     type:"POST",
            //     url:"../ajax/getEducation.php",
            //     data: {id:id},
            //     success: function(data){
            //          $('#personal_info').html(data);

            //     }
            // });
        }
        // gethostel infomation
        function getHostel_info()
        {
           
            var id= <?php echo json_encode($_SESSION['id']); ?>;
            var option1=document.getElementById('option1');
            var option2=document.getElementById('option2');
            var option3 =document.getElementById('option3');
            
            option3.style.display = "block";
            option2.style.display ="none";
            option1.style.display ="none";
            option1.classList.toggle("option"); 
            option2.classList.toggle("option");
            option3.classList.toggle("option");
             console.log("education");
           
            
            // $.ajax({
            //     type:"POST",
            //     url:"../ajax/getHostel.php",
            //     data: {id:id},
            //     success: function(data){
            //          $('#personal_info').html(data);

            //     }
            // });
        }
    </script>


</body>
</html>