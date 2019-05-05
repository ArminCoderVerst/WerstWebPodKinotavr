$("#sendMail").on("click", function(){
	'use strict';
	var email = $("#email").val().trim();
	var name = $("#name").val().trim();
	var phone = $("#phone").val().trim();
	var message = $("#message").val().trim();
	
	
	if(email === ""){
		$("#ErrorMessEmail").text("Введите Email");
		return false;
	}else if (name === ""){
		$("#ErrorMessName").text("Введите Имя");
		return false;
	}else if (phone === ""){
		$("#ErrorMessPhone").text("Введите Телефон");
		return false;
	}else if(message.length < 5){
		$("#ErrorMessTextArea").text("Введите сообщение не менее 5 символов");
		return false;
	}
	
	$("#ErrorMessEmail").text("");
	$("#ErrorMessName").text("");
	$("#ErrorMessPhone").text("");
	$("#ErrorMessTextArea").text("");

	$.ajax({
		url: '../ajax/mail.php',
		type: 'POST',
		cache: false,
		data: { 'name': name, 'email': email, 'phone': phone, 'message': message },
		dataType: 'html',
		beforeSend: function(){
			$("#sendMail").prop("disabled", true);
		},
		success: function(data){
			if(data)//!data
				alert("Были ошибки, сообщение не отправлено!");
			else
				$("#mailForm").trigger("reset"); 

			$("#sendMail").prop("disabled", false);
		}
	});
});