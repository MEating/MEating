// JavaScript Document
$(document).ready(function(){
			$("#contacto").validate({
				event: "blur",rules: {
										  'nombre': "required",
										  'mail': "required email", 
										  'contraseña1': { required: true, minlength: 6},
										  'contraseña2': { required: "#contraseña1:filled", minlength: 6, equalTo:"#contraseña1"}, 
										  'nacimiento':"required",
										  'ciudad':"required", 
										  'consulta':"required", 
										  'check':"required", 
									  },
							messages: {
										   'nombre': "Por favor indica tu nombre",
										   'mail': "Por favor, indica una direcci&oacute;n de e-mail v&aacute;lida", 
										   'contraseña1':"Ingresa una contraseña", 
										   'contraseña2':"Repeti la contraseña, debe ser igual a la anterior", 
										   'ciudad':"Ingresa el nombre de tu ciudad", 
										   'consulta':"Escribi tu consulta!", 
										   'check':"Debe aceptar los Términos y Condiciones",
										   'nacimiento':"Selecciona tu fecha de nacimiento"
									   },
				debug: true,errorElement: "label",
				submitHandler: function(form){
					$("#mensaje").show();
					$("#mensaje").html("<img src='ajax-loader.gif' style='vertical-align:middle;margin:0 10px 0 0' /><strong>Enviando mensaje...</strong>");
					$.ajax({
						type: "POST",
						url:"envio.php",
						contentType: "application/x-www-form-urlencoded",
						processData: true,
						data: "nombre="+escape($('#ContactName').val())+"&email="+escape($('#ContactRecipient').val())+"&mensaje="+escape($('#ContactMessage').val()),
						success: function(msg){
							$("#mensaje").html("<strong>Mensaje enviado correctamente. En breve recibir&aacute;s mi respuesta. Gracias!</strong>");
							document.getElementById("ContactName").value="";
							document.getElementById("ContactRecipient").value="";
							document.getElementById("ContactMessage").value="";
							setTimeout(function() {$('#mensaje').fadeOut('fast');}, 3000);

						}
					});
				}
			});
	});