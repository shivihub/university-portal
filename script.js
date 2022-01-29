console.log("functioncalled") ;

function view(bid){
   
    var blogId = blogId;
    $.ajax({
        type: "POST",
        url: './student/ajax/getSingleBlog.php',
        date: {blogId:blogId},
        success: function(data){
            $('#singleBlog').html(data);
            console.log(data)

        }
    });
}