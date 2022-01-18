<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../bootstrap/normalize.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="col-sm-12">
        <div class="contain">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="contain">
                <div style="margin:10px !important; font-weight:700; font-size:2em; ">Select Subject</div>
                
                <div style="margin:20px; !important"></div>
                    <form id="excel_form">
                        <div style="margin:20px; !important" id="getCourseCode"> 
                            
                        </div>
                        <div>
                        <input type="file" name="excel_file" id="excel_file">
                        </div>
                        
                        <div>
                        <input type="submit" name="submit" onclick="send();" > 
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="col-sm-4"></div>
        </div>
    </div>

    
    <script type="text/javascript">
        getCourse();
        function getCourse(){
        
            
            $.ajax(
                {
                type:"POST",
                url:"./getcourses.php",
                contentType:false,
                processData:false,
                data:{},
                success:function(data)
                {
                    $('#getCourseCode').html(data);
                }
            });

        }
      

        </script>
    
    <script type="text/javascript">
        function send(){
            var excel_form=document.getElementById('excel_form');
            var data=new FormData(excel_form); 
            
            $.ajax(
                {
                type:"POST",
                url:"../../student/ajax/result_excel.php",
                contentType:false,
                processData:false,
                data:data,
                success:function(data)
                {
                    alert(data);
                    // console.log(data);
                    window.location.reload(1);
                }
            });

        }
      

        </script>
    <script type="text/javascript">
        $('form').submit(function(e) {
        e.preventDefault();
    }); 
    </script>
 
</body>

</html>