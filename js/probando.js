// JavaScript Document
/*$(document).ready(function() {
   // $("#registro").hide();

    $("#btnAceptar").validate({
        rules: {
            nombre: { required: true, minlength: 4},
            contraseña1: { required: true, minlength: 5},
			contraseña2: { required: true, minlength: 5},
            mail: { required:true, email: true},
           // phone: { minlength: 2, maxlength: 15},
//            years: { required: true},
//            message: { required:true, minlength: 2}
        },
        messages: {
            nombre: "Debe introducir su nombre.",
            //lastname: "Debe introducir su apellido.",
            mail : "Debe introducir un email válido.",
            //phone : "El número de teléfono introducido no es correcto.",
            //years : "Debe introducir solo números.",
            //message : "El campo Mensaje es obligatorio.",
			contraseña1: "password valida",
        }
        /*submitHandler: function(form){
            var dataString = 'name='+$('#name').val()+'&lastname='+$('#lastname').val()+'...';
            $.ajax({
                type: "POST",
                url:"send.php",
                data: dataString,
                success: function(data){
                    $("#ok").html(data);
                    $("#ok").show();
                    $("#formid").hide();
                }
            });
        }*/
 //   });
//});*/
$(document).ready(function(){
			//$("#mensaje").hide();
			$("#contacto").validate({
				event: "blur",rules: {'nombre': "required",'mail': "required email"},
				messages: {'nombre': "Por favor indica tu nombre",'mail': "Por favor, indica una direcci&oacute;n de e-mail v&aacute;lida"},
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