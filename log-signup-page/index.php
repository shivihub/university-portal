<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="../normalize.min.css">
    <link rel="stylesheet" href="index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
                        <input type="text" id="uname" name="uname" placeholder="Enter your name" class="form-control" required>
                        <label >EMAIL: <span style="color:red">*</span></label>
                        <input type="email" id="email1" name="email1" placeholder="Enter your email" class="form-control" required>
                        <label >PASSWORD: <span style="color:red">*</span></label>
                        <input type="password" id="password1" name="password1" placeholder="Enter password" class="form-control" required>
                        <label >CONFIRM PASSWORD: <span style="color:red">*</span></label>
                        <input type="password" id="cpass" name="cpass" placeholder="Enter confirm password" class="form-control" required>
                        <div class="btn2">
                        <input type="submit" id="submit1" name="submit1"   onclick="submitdata();" class="submit">      
                        </div>  

                    </form>
                </div>
                        <!-- form 2  log in-->
                <div class="log form contain " id="login" >
                    <form >
                        
                        <label >EMAIL: <span style="color:red">*</span></label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" class="form-control" required>
                        <label >PASSWORD: <span style="color:red">*</span></label>
                        <input type="password" id="password" name="password" placeholder="Enter password" class="form-control" required>
                        <div class="btn2">
                        <input type="submit" id="submit" name="submit" onclick="getdata();" class="submit"   required>      
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
    <script type="text/javascript">
   
    function submitdata()
    {
        var uname=document.getElementById('uname').value;
        var email1=document.getElementById('email1').value;
        var password1=document.getElementById('password1').value;
        var cpass=document.getElementById('cpass').value;
        // alert(name+email+password+cpass);
       if(password1!=cpass)
       {
           alert ("password dont match");
       }
        else
        {
            $.ajax({
                type:"POST",
                url:"insert.php",
                data: {uname:uname,email1:email1,password1:password1},
                success: function(data){
                    alert(data);

                }
            });
        }
    }
// get data **************
    function getdata()
    {
       
        var email=document.getElementById('email').value;
        var password=document.getElementById('password').value;
       
       
        
        
            $.ajax({
                type:"POST",
                url:"getdata.php",
                data: {email:email,password:password},
                success: function(data){
                   
                   if(data==0)
                   window.location.href="../home/home.html";
                   else
                   alert (data);

                }
            });
        }
    
    

    
    </script>

        




</body>
</html>
