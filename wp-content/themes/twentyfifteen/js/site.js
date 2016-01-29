function ajax() { //Ajax отправка формы
	var msg = $("#form").serialize();
	$.ajax({
		type: "POST",
		url: "<?php echo get_template_directory_uri(); ?>/function.php",
		data: msg,
		success: function(data) {
			$("#results").html(data);
		},
		error:  function(xhr, str){
			alert("Возникла ошибка!");
		}
	});
}

jQuery.fn.notExists = function() { //Проверка на существование элемента
	return $(this).length == 0;
}

$("#form").validate({ //Валидация формы
        
       rules:{ 
        
            name:{
                required: true,
                minlength: 4,
                maxlength: 16,
            },
            
            email:{
                required: true,
                minlength: 6,
                maxlength: 16,
            },
			subject:{
				date:true,
			},
			message:{
				
			},
			
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
        
    });;