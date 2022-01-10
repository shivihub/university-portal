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
                <div style="margin:20px; !important">
                    <select id="courses" name="course" onChange="update();">
                        <option value="0">select</option>
                        <option value="bio">Biology</option>
                        <option value="math103">Math</option>
                        <option value="general_Hindi">General Hindi</option>
                        <option value="general_English">General English</option>
                        <option value="seminar">Seminar</option>
                        <option value="chemistry">Chemistry</option>
                    </select>
                </div>
                <div style="margin:20px; !important">
                    <form id="excel_form">
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
        function update() {
            
            var select_course = document.getElementById('courses');
            var option_course = select_course.options[select_course.selectedIndex].value;
            if(option_course!=0)
            {
                $.ajax({
                    type:"POST",
                    url:"../../student/ajax/result_excel.php",
                    data: {option_course:option_course},
                    success: function(data){
                        console.log(data);
                    }
                });
            }   
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
                    console.log(data);
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