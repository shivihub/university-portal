<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
  <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../bootstrap/normalize.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="col-sm-12">
        <div class="contain">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="contain">
             <form id="excel_form">
                 <div>
                 <input type="file" name="excel_file" id="excel_file">
                 </div>
                 <div>
                 <input type="submit" name="submit" onclick="send();"> 
                 </div>
             </form>
            </div>
        </div>
        <div class="col-sm-4"></div>
        </div>
    </div>
    <script type="text/javascript">
        function send(){
            var excel_form=document.getElementById('excel_form');
            var data=new FormData(excel_form); 
            // alert("done..");
            $.ajax(
                {
                type:"POST",
                url:"../ajax/excel.php",
                contentType:false,
                processData:false,
                data:data,
                success:function(data)
                {
                    alert(data);
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