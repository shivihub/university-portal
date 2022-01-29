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
    <link rel="stylesheet" href="../../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../bootstrap/normalize.min.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="https://tse2.mm.bing.net/th?id=OIP.TRLdZgnfAkaU15U8ICMdZAHaGG&pid=Api&P=0&w=194&h=161" type="image/x-icon">
    
    <title>Banasthali Portal</title>
</head>
<body>
    
    <div class="child">
        <div class="header">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#5000ca" fill-opacity="1" d="M0,256L48,229.3C96,203,192,149,288,144C384,139,480,181,576,192C672,203,768,181,864,181.3C960,181,1056,203,1152,229.3C1248,256,1344,288,1392,304L1440,320L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#244da5" fill-opacity="1" d="M0,128L80,133.3C160,139,320,149,480,133.3C640,117,800,75,960,74.7C1120,75,1280,117,1360,138.7L1440,160L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>  
        </div>
        <div class="containers">
            <div class="form">
                <form>
                    <label>Title:</label>
                    <input type="text" id="title" name="title" placeholder="Enter the Title" class="form-control " required>
                    <label >Content:</label>
                    <textarea name="text" id="editor" cols="53" rows="20" ></textarea>
                    <div class="submit-btn">                
                        <input type="submit" id="submit" name="submit" class=" submit" required>
                    </div>                
                </form>
            </div>
        </div>
    </div>
    
</body>
<script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );

        // $.fn.modal.Constructor.prototype.enforceFocus = function() {
        //     modal_this = this
        //     $(document).on('shown.bs.modal', function (e) {
        //         if (modal_this.$element[0] !== e.target && !modal_this.$element.has(e.target).length 
        //         && !$(e.target.parentNode).hasClass('cke_dialog_ui_input_select') 
        //         && !$(e.target.parentNode).hasClass('cke_dialog_ui_input_text')) {
        //         modal_this.$element.focus()
        //         }
        //     })
        //     };
        
</script>



</html>
