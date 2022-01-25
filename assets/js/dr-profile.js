$(document).ready(function(){
    $(document).on("change","#profile_img",function(){
        var property = document.getElementById("profile_img").files[0];

        var image_name = property.name;
        var image_ext = image_name.split('.').pop().toLowerCase();
        if(jQuery.inArray(image_ext,['gif','png','jpg','jpeg']) == -1){
            alert("Invalid Image File");
            return;
        }
        var imageSize = property.size;
        if(imageSize > 3145728){
            alert("Too Big Image")
            return;
        }
         var form_data = new FormData();
        form_data.append("profile_img",property);  
         $.ajax({
            url:"../inc/upload.php",
            method:"POST",
            data:form_data,
            contentType:false,
            cache: false,
            processData: false,    
            success: function(data){
               var imageWrap = document.getElementById("profile_prev");
               imageWrap.src = data;
            }   
        });

    });
});