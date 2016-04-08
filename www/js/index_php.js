function getData(obj_form){
    var hData = {};
    $('input, textarea, select', obj_form).each(function(){
        if(this.name && this.name!=''){
            hData[this.name] = this.value;
        }
    });
    return hData;
}

// регистрация нового пользователя
function RegisterNewUser(){
    var postData = getData('.reg_form');
    
    $.ajax({
        type:'POST',
        async: true,
        url:"?controller=user&action=register",
        data: postData,
        dataType: 'json',
        success: function(data){ 
            
        if(data['success']){ 
                HideForm();
                ShowAlert(data['message']);
               
            } else {
                ShowAlert(data['message']);
            }
        }
    });
}
//авторизация пользователя
function AuthoriseUser(){
    var postData = getData('.log_form');
    
    $.ajax({
        type:'POST',
        async: true,
        url:"?controller=user&action=authorise",
        data: postData,
        dataType: 'json',
        success: function(data){ 
            
        if(data['success']){ 
                LoginSuccess();
				setTimeout(function(){
                	window.location.href = "/main/";
				}, 500);
            } else {
                ShowAlert(data['message']);
            }
        }
    });
}