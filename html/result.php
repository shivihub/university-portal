<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/result.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/normalize.min.css">
</head>
<body>
    <!-- nav barrrrr -->
    <section>
        <div class="col-sm-12">
            <div class="contain header">
                <div class="col-sm-3">
                    <div class="contain">
                        <i  class="bx bx-menu hamburger"> </i> 
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
    <!-- side bar -->

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
                        <li class="logout">
                            <a  href="#">
                                <i class="bx bx-log-out"></i>
                                <a href= "../ajax/logout.php">Log Out</a>
                                <!-- <span >Log Out</span>   -->
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-10" id="mid-section">
                <div class="contain">
                    <div class="result-heading"><h1>Result</h1></div>
                    <div class="select-section">
                        <div class="drop-down-heading">Select Semester</div>
                        <div class="drop-down">
                            
                            <select id="" name="select">
                                <option value="">--Select--</option>
                                <option value="sem1">First Semester</option>
                                <option value="sem2">Second Semester</option>
                                <option value="sem3">Third Semester</option>
                                <option value="sem4">Fourth Semester</option>
                                <option value="sem5">Fifth Semester</option>
                                <option value="sem6">Sixth Semester</option>
                                <option value="sem7">Seventh Semester</option>
                                <option value="sem8">Eighth Semester</option>
                            </select>
                        </div>
                    </div>

                        <!-- table start***************************** -->

                        <div class="table">
                            <table>
                                <tr>
                                    <th>Nomenclature of Course(s)</th>
                                    <th>Credit point</th>
                                    <th>Grades</th>
                                    <th>Remarks</th>
                                </tr>
                                <tr>
                                    <td id="course">BVF 017 Selected Writings of Great Authors - I </td>
                                    <td>O</td>
                                    <td>A</td>
                                    <TD>GOOD</TD>
                                </tr>
                                <tr>
                                    <td id="course" >BVF 016 Science of Happiness </td>
                                    <td>O</td>
                                    <td>A</td>
                                    <TD>GOOD</TD>
                                </tr>
                                <tr>
                                    <td id="course">MATH 209 Complex Variables </td>
                                    <td>O</td>
                                    <td>A</td>
                                    <TD>GOOD</TD>
                                </tr>
                                <tr>
                                    <td id="course">CS 214 Object Oriented Programming </td>
                                    <td>O</td>
                                    <td>A</td>
                                    <TD>GOOD</TD>
                                </tr>
                                <tr>
                                    <td id="course">CS 214L Object Oriented Programming Lab</td>
                                    <td>O </td>
                                    <td>A </td>
                                    <TD>GOOD</TD>
                                </tr>
                                <tr>
                                    <td id="course">EIE 204 Electrical and Electronics Measurements 4 </td>
                                    <td>O</td>
                                    <td>A</td>
                                    <TD>GOOD</TD>
                                </tr>
                                <tr>
                                    <td id="course">EIE 204 Electrical and Electronics Measurements</td>
                                    <td>O </td>
                                    <td>A</td>
                                    <TD>GOOD</TD>
                                </tr>
                                <tr>
                                    <td id="course">ELE 205 Semiconductor Devices and Circuits </td>
                                    <td>O </td>
                                    <td>A</td>
                                    <TD>GOOD</TD>
                                </tr>
                                <tr>
                                    <td id="course">ELE 205L Semiconductor Devices and Circuits Lab</td>
                                    <td>O</td>
                                    <td>A</td>
                                    <TD>GOOD</TD>
                                </tr>
                
                            </table>
                        </div>
                </div>
            </div> 

                    
              
       
        </div>
    </div>

    
</body>
</html>
