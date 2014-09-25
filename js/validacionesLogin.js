// JavaScript Document

function validaLoginVacios()
{
	var user = $("#txtUsuario").val(); 
	var pass = $("#txtPassword").val();

	if (user.length == 0 || user == null || pass.length == 0 || pass == null)
	{
		bootbox.alert("Debe ingresar su usuario y contraseña para poder continuar.");
		return false;
	}
	return true;
}

function validaComentario()
{
	var nom = $("#txtNombres").val();
	var celu = $("#txtTelMovil").val();
	var mail = $("#txtEmail").val();
	var comm = $("#txtComentario").val();
	var limit = 400;

	if (nom.length == 0 || nom == null || celu.length == 0 || celu == null || mail.length == 0 || mail == null || comm.length == 0 || comm == null)
	{
		bootbox.alert("Por favor complete los datos para enviar su comentario. Gracias.");
		return false;
	}
	else
	{
		if (comm.length > limit) {
			bootbox.alert("Su comentario excede el m&aacute;ximo de de " + limit + " caracteres. Por favor ed&iacute;telo.");
			return false;
		}
		else
			return true;
	}
	
}

function soloLetras(e){
	var tecla = (document.all) ? e.keyCode : e.which;
	
	if((tecla > 64 && tecla < 91) || (tecla > 96 && tecla < 123)){
		return true;
	}else{
		if(tecla == 0 || tecla == 2 || tecla == 3 || tecla == 8 || tecla == 9 || tecla == 13 || tecla == 28 || tecla == 29 || tecla == 32 || tecla == 127 || tecla == 209 || tecla == 241){
			return true;
		}else{
			return false;
		}
	}	
}

function soloNumeros(e){
	var tecla = (document.all) ? e.keyCode : e.which;
	
	if(tecla > 47 && tecla < 58){
		return true;
	}else{
		if(tecla == 0 || tecla == 2 || tecla == 3 || tecla == 8 || tecla == 9 || tecla == 13 || tecla == 28 || tecla == 29 || tecla == 127){
			return true;
		}else{
			return false;
		}
	}	
}

function soloNumerosYletras(e){
	var tecla = (document.all) ? e.keyCode : e.which;
	
	if((tecla > 47 && tecla < 58) || (tecla > 64 && tecla < 91) || (tecla > 96 && tecla < 123)){
		return true;
	}else{
		if(tecla == 0 || tecla == 2 || tecla == 3 || tecla == 8 || tecla == 9 || tecla == 13 || tecla == 28 || tecla == 29 || tecla == 127){
			return true;
		}else{
			return false;
		}
	}	
}

function validaEmail() {
	var email = $("#txtEmail").val();
	var emailReg = /^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
	if( !emailReg.test(email) ) {
		bootbox.alert("El e-mail ingresado es inv&aacute;lido, ingr&eacute;selo correctamente para continuar.");
		$("#txtEmail").val("");
		return false;
	} else {
		return true;
	}
}

function validaMaxTextArea()
{
	var comm = $("#txtComentario").val();
	var limit = 400;
	if (comm.length > limit)
	{
		bootbox.alert("Su comentario excede el m&aacute;ximo de de " + limit + " caracteres. Por favor ed&iacute;telo.");
		return false;
	}
	return true;
}