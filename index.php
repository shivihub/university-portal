<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="normalize.min.css">
    <link rel="stylesheet" href="index.css">
    <title>SIGN UP PAGE</title>
</head>
<body>
   
    <h1>APPONITMENT BOOKING SYSTEM</h1>
    <div class="col-sm-12">
        <div class="contain">
            <div class="col-sm-4"></div>
            <div class="col-sm-2 ">
                <div class="contain btn">
                    <button id="log-btn" class="active" onclick="showlogin();">LOGIN</button>
                </div>
            </div>
            <div class="col-sm-2 ">
                <div class="contain btn">
                    <button id="sign-btn" onclick="showsignup();">SIGNUP</button>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
    <!-- form -->
    <div class="col-sm-12">
        <div class="contain">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="contain form sign" id="signup" style="display:none">
                    <form >
                        <label >NAME: <span style="color:red">*</span></label>
                        <input type="text" id="name" name="name" placeholder="Enter your name" class="form-control" required>
                        <label >EMAIL: <span style="color:red">*</span></label>
                        <input type="text" id="email" name="email" placeholder="Enter your email" class="form-control" required>
                        <label >PASSWORD: <span style="color:red">*</span></label>
                        <input type="text" id="password" name="password" placeholder="Enter password" class="form-control" required>
                        <label >CONFIRM PASSWORD: <span style="color:red">*</span></label>
                        <input type="text" id="cpass" name="cpass" placeholder="Enter confirm password" class="form-control" required>
                        <div class="btn2">
                        <input type="submit" id="submit" name="submit"  required onclick="" class="submit">      
                        </div>  

                    </form>
                </div>
                        <!-- form 2  log in-->
                <div class="log form contain " id="login" >
                    <form >
                        
                        <label >EMAIL: <span style="color:red">*</span></label>
                        <input type="text" id="email" name="email" placeholder="Enter your email" class="form-control" required>
                        <label >PASSWORD: <span style="color:red">*</span></label>
                        <input type="text" id="password" name="password" placeholder="Enter password" class="form-control" required>
                        <div class="btn2">
                        <input type="submit" id="submit" name="submit"  required onclick="" class="submit">      
                        </div>  

                    </form>
                </div>
            
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>

    
    
    <script type="text/javascript">
        
        var loginform=document.getElementById('login');
        var signupform=document.getElementById('signup');
        var logbtn = document.getElementById('log-btn');
        var signbtn = document.getElementById('sign-btn');


        function showlogin()
        {
            signupform.style.display = "none";
            loginform.style.display = "block";
            // signbtn.classList.remove("active");
            // signbtn.classList.add("non-active");
            // logbtn.classList.add("active");
            logbtn.classList.toggle("active");   
            signbtn.classList.toggle("active");          
        }  
        function showsignup()
        {
            signupform.style.display = "block";
            loginform.style.display = "none";
            // logbtn.classList.remove("active");
            // logbtn.classList.add("non-active");
            // signbtn.classList.add("active");
            signbtn.classList.toggle("active"); 
            logbtn.classList.toggle("active");     
            
        }  
    </script>


</body>
</html>
