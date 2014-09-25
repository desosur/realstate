// JavaScript Document

function valorCheck()
{
	//var chk1 = $("input[name=checkLuz]:checked").val());
	var chk = "";
	//chk = document.getElementById("checkLuz");
	chk = $("#checkLuz").val();
	bootbox.alert(chk);
}

function validaComentarioVacio()
{
	var comm = $("#txtComentario").val();

	if (comm.length == 0 || comm == null)
	{
		bootbox.alert("Por favor complete el cuadro con texto antes de enviar su comentario. Gracias.");
		return false;
	}
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
	
	
	$("[name='checkLuz']").bootstrapSwitch();
