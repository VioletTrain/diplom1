LoggingOut = function(){
 	var postData = true;
 	
    $.ajax({
        type:'POST',
        async: true,
        url:"?controller=user&action=logout",
        data: postData,
        dataType: 'json',
        success: function(data){             
        	setTimeout(function(){
        		window.location.href = "/";
			}, 500);
        }
 
    });
}