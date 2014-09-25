<?php
	require_once("./clases/conexionBD.php");
	require_once("./clases/usuario.php");
	require_once("./clases/JPGraph-3.5.0b1/jpgraph.php");
	require_once("./clases/JPGraph-3.5.0b1/jpgraph_bar.php");
	
	$conexion = new conexion();
	$conexion->conectar();
	$usuario = new usuario();
	
	if(isset($_GET["graf"]))	{					
			$opcion = $_GET["graf"];
			if ($opcion == "1")
			{
				$col_desk = $usuario->cuenta_login_escritorio();
				$col_tabl = $usuario->cuenta_login_tablet();
				$col_smrt = $usuario->cuenta_login_smartphone();
				//Creamos el grafico
				$datos = array($col_desk, $col_tabl, $col_smrt);
				$labels = array("Escritorio", "Tablet", "Smartphone");
				$grafico = new Graph(600, 400, 'auto');
				$grafico->SetScale("textlin");
				$grafico->title->Set("Gráfico de Preferencia de Plataforma de Clientes");
				$grafico->xaxis->SetTitle("PLATAFORMA");
				//$grafico->xaxis->title->Set("trabajadores");
				$grafico->xaxis->SetTickLabels($labels);
				$grafico->yaxis->title->Set("CANTIDAD DE INICIOS DE SESIÓN");
				//$grafico->yaxis->SetFont('Times New Roman', 'auto', 12);
				$barplot1 = new BarPlot($datos);
				$barplot1->SetFillGradient("#BE81F7", "#E3CEF6", GRAD_HOR); // 
				$barplot1->SetWidth(30);//30pixelesdeanchoparacadabarra
				$grafico->Add($barplot1);
				$grafico->Stroke();
			}
			
	}
	if(isset($_GET["graf"]))	{					
			$opcion = $_GET["graf"];
			if ($opcion == "2")
			{
			//Creamos el grafico
	$datos=array(6,5,8);
	$labels=array("Escritorio","Tablet","NADIE CACHA");
	$grafico=new Graph(500,400,'auto');
	$grafico->SetScale("textlin");
	$grafico->title->Set("Gráfico de Plataforma de Clientes");
	$grafico->xaxis->SetTitle("Plataforma");
	//$grafico->xaxis->title->Set("trabajadores");
	$grafico->xaxis->SetTickLabels($labels);
	$grafico->yaxis->title->Set("Cantidad de Inicios de Sesión");
	//$grafico->yaxis->SetFont('Times New Roman', 'auto', 12);
	$barplot1=new BarPlot($datos);
	//$barplot1->SetFillGradient("#BE81F7", "#E3CEF6", GRAD_HOR); // 
	$barplot1->SetWidth(30);//30pixelesdeanchoparacadabarra
	$grafico->Add($barplot1);
	$grafico->Stroke();
			}
			}


/*
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<body>

</body>
</html>*/
?>