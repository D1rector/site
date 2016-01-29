$(document).ready(function(){

    $("#content").validate({
        
       rules:{ 
        
            Yourname:{
                required: true,
                minlength: 4,
                maxlength: 16,
            },
            
            event:{
                required: true,
                minlength: 6,
                maxlength: 16,
            },
			time:{
				date:true,
			}
			
       },
       
       messages:{
        
            Yourname:{
                required: "Это поле обязательно для заполнения",
                minlength: "Логин должен быть минимум 4 символа",
                maxlength: "Максимальное число символо - 16",
            },
            
            event:{
                required: "Это поле обязательно для заполнения",
                minlength: "Описание события слишком короткое.",
                maxlength: 16,
            },
			time:{
				date:"Дата введена некорректно",
			}
       }
        
    });


}); //end of ready