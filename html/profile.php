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
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8" >
                        <div class="contain info-option">
                            <!-- <a href="#1a" style="margin-right:20px!important;">Personal Information</a>
                            <a  href="#2a" style="margin-right:20px!important;">Educational Information</a>
                            <a  href="#3a" style="margin-right:20px!important;">Hostel Detail</a> -->
                            <div class="option">Personal Information</div>
                            <div class="option">Educational Information</div>
                            <div class="option">Hostel Detail</div>
                        </div>
                    <!-- table1 -->
                        <div>
                            <table >
                                <tr>
                                    <th colspan="2" class="table-heading">Personal Information</th>
                                </tr>
                                <tr>
                                    <th>Student Name</th>
                                    <td>dummy</td>
                                </tr>
                                <tr>
                                    <th>Date Of Birth</th>
                                    <td>12-11-1993</td>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    <td>Female</td>
                                </tr>
                                <tr>
                                    <th>Native Language</th>
                                    <td>Hindi</td>
                                </tr>
                                <tr>
                                    <th>Blood Group</th>
                                    <td>A+</td>
                                </tr>
                                <tr>
                                    <th>Physically Challenged</th>
                                    <td>No</td>
                                </tr>
                                <tr>
                                    <th>Caste</th>
                                    <td>General/oc</td>
                                </tr>
                                <tr>
                                    <th>Religion</th>
                                    <td>Hindu</td>
                                </tr>
                                <tr>
                                    <th>Nationality</th>
                                    <td style="font-weight:700;">INDIAN</td>
                                </tr>
                                <tr>
                                    <th>Aadhar Number</th>
                                    <td>xxxxxxxxxxx</td>
                                </tr>
                               
                            </table>
                        </div>
                        <!-- table  2    -->
                        <diV>
                            <table>
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
                                
                            </table>
                        </diV>
                        <!-- table 3     -->
                        <div>
                            <table>
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
                            </table>
                        </div>
                    </div>

                    <div class="col-sm-2" ></div>       
                </div>
            </div>
        </div>
    </div>
    

</body>
</html>