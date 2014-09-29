// JavaScript Document
//Expresión para validar un correo electrónico
//var expr = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
//Expresión para validar edad de 18 a 60 años
//var expr2 = /^1[8-9]|[2-5]\d|60$/;
var formulario;
formulario=$(document);
formulario.ready(validarElementos);
function validarElementos()
{
	//var nombre=$("#inputName").text();
//	var email=$("#inputEmail").text();
//	var contraseña1=$("#inputPassword").text();
//	var contraseña2=$("#confirmPassword").text();
//	var ciudad=$("#inputCiudad").text();
//	var condiciones=$("#condiciones").val();
    var aceptar=$("#btnAceptar");
	
	aceptar.click(validacion());
	
}

function validacion()
{
	var nombre=$("#inputNombre").val();
	var email=$("#inputEmail").val();
	var contraseña1=$("#inputPassword").val();
	var contraseña2=$("#confirmPassword").val();
	var ciudad=$("#inputCiudad").val();
	var condiciones=$("#condiciones").val();
	
	if (nombre=="")
	{//nombre.length<4 || nombre.length>15
		alert("ingrese nombre");
		return false;
	}
	else
	{	
		var expresion = /^[a-zA-Z0-9Ññ]+$/;
		if (!expresion.test(nombre))
		{
			alert("solo se admiten nicknames alfanumericos");
			return false;
		}
		
	}
	
	
	
	
	
	
	
	
}
//$(document).ready(function(){
////función click
/*$("#bEnviar").click(function(){
	//Guardar en variables el valor que tengan las cajas de texto
	//Por medio de los id's
	//Y tener mejor manipulación de dichos valores
	var nombre = $("#itNombre").val(); document.getElementById(inputNombre).val();
	var correo = $("#itMail").val();
	var asunto = $("#itAsunto").val();
	var edad = $("#itEdad").val();

	// --- Condicionales anidados ----
	//Si nombre está vacío
	//Muestra el mensaje
	//Con false sale de los if's y espera a que sea pulsado de nuevo el botón de enviar
	if(nombre == ""){
		$("#mensaje1").fadeIn("slow");
		return false;
	}
	//en otro caso, el mensaje no se muestra
	else{
		$("#mensaje1").fadeOut();

		//Si correo está vacío y la expresión NO corresponde -test es función de JQuery
		//Muestra el mensaje
		//Con false sale de los if's y espera a que sea pulsado de nuevo el botón de enviar
		if(correo == "" || !expr.test(correo)){
			$("#mensaje2").fadeIn("slow");
			return false;
		}
		else{
			$("#mensaje2").fadeOut();

			if(asunto == ""){
				$("#mensaje3").fadeIn("slow");
				return false;
			}
			else{
				$("#mensaje3").fadeOut();

				if(edad == "" || !expr2.test(edad)){
					$("#mensaje4").fadeIn("slow");
					return false;
				}
			}
		}
	}

});//click*/
//function valida()
//{	//VALIDA EL NOMBRE
//	var valor=document.contacto.nombre.value;
//	var name= document.contacto.nombre.value;
//    if( document.contacto.nombre.value == null) 
//	{
//		alert("Tiene que escribir su nombre");
//	  	return false;
//	}
//	if ( document.contacto.nombre.value.length == 0)
//	{
//		alert("Tiene que escribir su nombre");
//		return false;
//	}
//	if (/^\s+$/.test(valor)) 
//	{
//		alert("No se acepta Nombre en blanco");
//	  	return false;
//	}
//	if (!isNaN(valor.value))
//	{
//		alert("No se aceptan números en Nombre");
//		valor.value="";
//		return false;
//	}
//	if (name.value!="")//solo letras y espacios
//	{
//		var dato=name.value;
//		var expresion = /^[a-zA-Z\s]+$/;
//		if (!expresion.test(dato))
//		{
//            alert("Sólo letras en Nombre");
//			document.contacto.nombre.value="";
//			return false;
//        } 
//	}
//	//VALIDA EL MAIL
//	if (document.contacto.mail.value.length==0)
//	{
//		alert("Escriba su correo electrónico");
//		return false;
//	}
//	//verifico que tenga @ y .com
//	var mail=document.contacto.mail;
//	if (mail.value!="")//caracteres validos en un mail
//	{
//		var dato=mail.value;
//		var expresion = /^([a-zA-Z0-9_.-])+@(([a-zA-z0-9-])+.)+.([a-zA-Z0-9-]{2,4})+$/;
//		if (!expresion.test(dato))
//		{
//            mail.value="";
//			alert("Dirección de email inválida");
//			return false;
//        } 
//	}
//	
//	//VALIDA EL TEXTAREA
//	if(document.contacto.comentario.value.length==0)
//	{
//		alert("Escriba su consulta");
//		return false;
//	}
//	var coment=document.contacto.comentario.value;
//	if (/^\s+$/.test(coment)) 
//	{
//		alert("No se acepta consulta en blanco");
//	  	return false;
//	}
//	//formulario OK, envia
//	alert("Muchas gracias por su consulta, en breve nos comunicaremos con Ud."); 
//
//
//}

//});

//});//ready