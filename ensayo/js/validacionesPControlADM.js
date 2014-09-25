// JavaScript Document

function validaRUT()
{	
    var rut = $("#txtRut").val(); //id campo rut
    if (rut.length < 9) {
		bootbox.alert("Ingrese un RUT de al menos 9 dígitos.");
		$("#txtRut").val("");
		$("#txtRut").focus();
        return false;
    } else {
        i1 = rut.indexOf("-");
        dv = rut.substr(i1 + 1);
        dv = dv.toUpperCase();
        nu = rut.substr(0, i1);

        cnt = 0;
        suma = 0;
        for (i = nu.length - 1; i >= 0; i--) {
            dig = nu.substr(i, 1);
            fc = cnt + 2;
            suma += parseInt(dig) * fc;
            cnt = (cnt + 1) % 6;
        }
        dvok = 11 - (suma % 11);
        if (dvok == 11) dvokstr = "0";
        if (dvok == 10) dvokstr = "K";
        if ((dvok != 11) && (dvok != 10)) dvokstr = "" + dvok;

        if (dvokstr == dv) {            
			return true;
        }
        else {
			bootbox.alert("RUT inv&aacute;lido, ingr&eacute;selo correctamente para continuar.");
			$("#txtRut").val("");
			$("#txtRut").focus();
            return false;
        }
    }
}

// buscar tabla de codigos ASCII en internet
function soloNumerosGuionYk(e){
	var tecla = (document.all) ? e.keyCode : e.which;
	
	if(tecla > 47 && tecla < 58){
		return true;
	}else{
		if(tecla == 0 || tecla == 2 || tecla == 3 || tecla == 8 || tecla == 9 || tecla == 13 || tecla == 28 || tecla == 29 || tecla == 127 || tecla == 45 || tecla == 75 || tecla == 107){
			return true;
		}else{
			return false;
		}
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

// permite ingresar solo Números, Letras y Guion 
function soloIdRutUser(e){
	var tecla = (document.all) ? e.keyCode : e.which;
	
	if((tecla > 64 && tecla < 91) || (tecla > 96 && tecla < 123) || (tecla > 47 && tecla < 58)){
		return true;
	}else{
		if(tecla == 0 || tecla == 2 || tecla == 3 || tecla == 8 || tecla == 9 || tecla == 13 || tecla == 28 || tecla == 29 || tecla == 127 || tecla == 209 || tecla == 241 || tecla == 45 || tecla == 75 || tecla == 107){
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
		$("#txtEmail").select();
		return false;
	} else {
		return true;
	}
}

function passIguales() {
	var pass1 = $("#txtPass1").val();
	var pass2 = $("#txtPass2").val();
	if (pass1 != pass2)	{
		bootbox.alert("Las contrasse&ntilde;as no coinciden, ingr&eacute;selas correctamente para continuar.");
		$("#txtPass2").val("");
		return false;
	}
	else 
		return true;
}

function validaVacios()
{
	var rut = $("#txtRut").val();
	var nombres = $("txtNombres").val();
	var ape_pat = $("txtApePaterno").val();
	var ape_mat = $("txtApeMaterno").val();
	var fecha_nac = $("txtFechaNac").val();
	var genero = document.getElementsByName("radGenero");
	var comuna = $("cboComuna").val();
	var calle = $("txtCalle").val();
	var fono_movil = $("txtTelMovil").val();
	var fono_fijo = $("txtTelFijo").val();
	var email = $("txtEmail").val();
	var user = $("txtUser").val();
	var pass1 = $("txtPass1").val();
	var pass2 = $("txtPass2").val();
	
	if (rut.length == 0 || rut == null || nombres.length == 0 || nombres == null || ape_pat.length == 0 || ape_pat == null || ape_mat.length == 0 || ape_mat == null || fecha_nac.length == 0 || fecha_nac == null /*|| genero.length == 0 || genero.value == null || comuna.length == 0 || comuna.value == null || comuna.value == 0 */|| calle == null || calle.length == 0 || fono_movil == null || fono_movil.length == 0 || fono_fijo == null || fono_fijo.length == 0 || email == null || email.length == 0 || user == null || user.length == 0 || pass1 == null || pass1.length == 0 || pass2 == null || pass2.length == 0)
	{
		bootbox.alert("Llene todos los campos para continuar.");
		return false;
	}
	else
		return true;

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

function soloNumerosLetrasyGato(e){
	var tecla = (document.all) ? e.keyCode : e.which;
	
	if((tecla > 47 && tecla < 58) || (tecla > 64 && tecla < 91) || (tecla > 96 && tecla < 123)){
		return true;
	}else{
		if(tecla == 0 || tecla == 2 || tecla == 3 || tecla == 8 || tecla == 9 || tecla == 13 || tecla == 28 || tecla == 29 || tecla == 127 || tecla == 35 || tecla == 32){
			return true;
		}else{
			return false;
		}
	}	
}

function validaMayoriaEdad() {
}

function validaTextoVacio()
{
	var buscar = $("#txtBuscar").val();

	if (buscar.length == 0 || buscar == null)
	{
		bootbox.alert("Por favor complete el campo para buscar.");
		return false;
	}
	return true;
}

function validaDeleteVacio()
{
	var chkDel = $("#checkDel[]").val(); 
	//var chkDel = document.getElementById("checkDel[]");
	
	//bootbox.alert(chkDel.value, chkDel.nodeValue);
	if (chkDel == null) // SI no se ha seleccionado nada
	{
		bootbox.alert("Seleccione al menos un usuario para poder eliminar.");
		return false;
	}
	return true;
}


//	expresion regular solo letras, numeros y guiones bajos
//	var prUser = /^[A-Za-z\s]*$/;
//	var prUser = /^[a-zA-Z]{1,}$/;	

	/*
	var expRegular = /^\d\W*$/;
	if(!expRegular.test(fNac.value))
	{
		//document.getElementById("errorNombre").innerHTML="<img src=\"imgs/error.jpg\" />";
		//document.getElementById("avisoUser").innerHTML="  *** El Usuario debe ser alfanumérico.";
		alert("Debe ingresar solo digitos.");
		fNac.value='';
		fNac.focus();
		return false;
	}
	*/
//	document.getElementById("avisoUser").innerHTML="";
//	document.getElementById("errorNombre").innerHTML="<img src=\"imgs/correcto.jpg\" />";
	


    $(document).ready(function() {
	
//	jQuery: formato para fecha, solo números y slashes automaticos		
		$("#txtFechaNac").keyup(function(){
          if ($(this).val().length == 2 || $(this).val().length == 5){
             $(this).val($(this).val() + "-");
          }
		$("#txtFechaNac").keydown(function(event) {
		if(event.shiftKey)
		{
			event.preventDefault();
		}
		
		if (event.keyCode == 46 || event.keyCode == 8)    {
		}
		else {
			if (event.keyCode < 95) {
			  if (event.keyCode < 48 || event.keyCode > 57) {
					event.preventDefault();
			  }
			}
			else {
				  if (event.keyCode < 96 || event.keyCode > 105) {
					  event.preventDefault();
				  }
			}
		  }
			});
	   });
	});
/*	
	$(document).ready(function() {
    $("#txtTelMovil").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
		});
	});
	
	$(document).ready(function() {
    $("#txtTelFijo").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
		});
	});
	*/
	
	$("[name='my-checkbox']").bootstrapSwitch();
