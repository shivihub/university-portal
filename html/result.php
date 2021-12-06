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
    <link rel="stylesheet" href="../css/result.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/normalize.min.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <title>HOME PAGE</title>
</head>
<body>
    <!-- navbar ------->
    <?php include("./navbar.php")?>


    <!-- sidebar and main area------->
    <div class="col-sm-12">
        <div class="contain">
            <div class="col-sm-2">
                <?php include("./sidebar.php")?>
            </div>
                <div class="col-sm-10" >
                <div class="contain" id="mid-section">
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

                    <div class="table">
                    <table>
                            <tr>
                                <th  style="text-align:left ,width:80%!important">Semester Grade Point Average (SGPA)</th>
                                <th>9.38</th>
                            </tr>
                        </table>
                    </div>
                    <div class="table">
                    <table>
                            <tr>
                                <th  style="text-align:left,width:80%!important">Cumulative Grade Point Average (CGPA) upto Fourth Semester</th>
                                <th>9.01</th>
                            </tr>
                        </table>
                    </div>                       
                </div>
            </div>
        </div>
    </div>
</body>


</html>
