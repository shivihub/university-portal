<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/editBlog.css">
    <!-- <link rel="stylesheet" href="../../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../bootstrap/normalize.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="https://tse2.mm.bing.net/th?id=OIP.TRLdZgnfAkaU15U8ICMdZAHaGG&pid=Api&P=0&w=194&h=161" type="image/x-icon">
    
    <title>Banasthali Portal</title>
</head>
<body>
    
    <div class="child">
        <div class="header">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#66ccff" fill-opacity="1" d="M0,320L40,293.3C80,267,160,213,240,181.3C320,149,400,139,480,154.7C560,171,640,213,720,202.7C800,192,880,128,960,117.3C1040,107,1120,149,1200,165.3C1280,181,1360,171,1400,165.3L1440,160L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#cce6ff" fill-opacity="1" d="M0,128L80,133.3C160,139,320,149,480,133.3C640,117,800,75,960,74.7C1120,75,1280,117,1360,138.7L1440,160L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>   -->
        </div>
        <div class="containers">
            <div class="form">
                <form id="form">
                    <label>Author:</label>
                    <input type="text" id="author" name="author" placeholder="Enter your name" class="form-control " required>
                    <label>Title:</label>
                    <input type="text" id="title" name="title" placeholder="Enter the Title" class="form-control " required>
                    <label >Content:</label>
                    <textarea name="content" id="content" ></textarea>
                    
                    <div class="submit-btn">                
                        <input type="submit" id="submit" name="submit" class=" submit" required onclick="input()">
                    </div>                
                </form>
            </div>
        </div>
    </div>
    
</body>
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } ); -->
<!-- 
        // $.fn.modal.Constructor.prototype.enforceFocus = function() {
        //     modal_this = this
        //     $(document).on('shown.bs.modal', function (e) {
        //         if (modal_this.$element[0] !== e.target && !modal_this.$element.has(e.target).length 
        //         && !$(e.target.parentNode).hasClass('cke_dialog_ui_input_select') 
        //         && !$(e.target.parentNode).hasClass('cke_dialog_ui_input_text')) {
        //         modal_this.$element.focus()
        //         }
        //     })
        //     }; -->
        
<!-- </script> -->
<script type="text/javascript">
        function input(){
            var form=document.getElementById('form');
            var data=new FormData(form); //object
            
            
            $.ajax(
                {
                type:"POST",
                url:"../ajax/insertBlog.php",
                contentType:false,
                processData:false,
                data:data,
                success:function(data)
                {
                    alert(data);
                    // console.log(data);
                    
                }
            });

        }
      

        </script>
        <script type="text/javascript">
        $('form').submit(function(e) {
        e.preventDefault();
    }); 
    </script>



</html>
