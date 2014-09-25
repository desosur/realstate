// JavaScript Document

function valida()
{	
	var usuario = document.getElementById("txtUser");
	var clave = document.getElementById("txtPass");
	
	if(usuario.value == "")
	{
		alert("El usuario es obligatorio");
		usuario.focus();
		return false;
	}
	
	if(clave.value == "")
	{
		alert("La contraseña es obligatoria");
		clave.focus();
		return false;
	}
/*	
	if(clave.value.length<4 || clave.value.length >8)
	{
		alert("Clave entre 4 y 8 caracteres");
		clave.value="";
		clave.focus();
		return false;
	}
	
	if(isNaN(clave.value))
	{
		alert("Solo numeros");
		clave.value="";
		clave.focus();
		return false;
	}
*/
	/*
	var exp_reg_clave = /^\d{4,8}$/;
	
	if(!exp_reg_clave.test(clave.value))
	{
		alert("Clave entre 4 y 8 caracteres numericos");
		document.getElementById("errorClave").innerHTML="<img src=\"error.jpg\" />";
		clave.value="";
		clave.style.backgroundColor="#e1e1e1";
		clave.focus();
		return false;
	}
	else
	{
		clave.style.backgroundColor="#fff";
		document.getElementById("errorClave").innerHTML="<img src=\"correcto.jpg\" />";

	}
*/

	/*
	if(email.value == "")
	{
		alert("El Email es obligatorio");
		email.focus();
		return false;
	}
	
	if(email.value.indexOf("@")==-1)
	{
		alert("El email no es valido");
		email.value="";
		email.focus();
		return false;
	}
	*/
	return true;
}





