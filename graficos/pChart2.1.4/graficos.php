<?php  
//header('Content-type: image/png');
 
/* pChart library inclusions */
include("./class/pData.class.php");
include("./class/pDraw.class.php");
include("./class/pPie.class.php");
include("./class/pImage.class.php");

if(isset($_GET["graf"]))	{					
	$opcion = $_GET["graf"];
	if ($opcion == "1")
	{
		$prueba = "";
		$desk = $_GET["desk"];
		$tabl = $_GET["tabl"];
		$smart = $_GET["smart"];
		$prueba = $desk . " " . $tabl . " " . $smart;
		
		/* CAT:Pie charts */ 
		
		/* Create and populate the pData object */
		$MyData = new pData();   
		$MyData->addPoints(array($desk,$tabl,$smart),"ScoreA");  
		$MyData->setSerieDescription("ScoreA","Application A"); 
		
		/* Define the absissa serie */
		$MyData->addPoints(array("Escritorio","Tablet","Smartphone"),"Labels");
		$MyData->setAbscissa("Labels");
		
		/* Create the pChart object */
		$myPicture = new pImage(640,480,$MyData,TRUE);
		
/* Draw a solid background */
$Settings = array("R"=>51, "G"=>153, "B"=>255, "Dash"=>1, "DashR"=>193, "DashG"=>172, "DashB"=>237);
$myPicture->drawFilledRectangle(0,0,640,480,$Settings);

/* Draw a gradient overlay */
$Settings = array("StartR"=>209, "StartG"=>150, "StartB"=>231, "EndR"=>111, "EndG"=>3, "EndB"=>138, "Alpha"=>50);
$myPicture->drawGradientArea(0,0,640,480,DIRECTION_VERTICAL,$Settings);
// Tamaño de la barra de titulo
$myPicture->drawGradientArea(0,0,640,25,DIRECTION_VERTICAL,array("StartR"=>0,"StartG"=>0,"StartB"=>0,"EndR"=>50,"EndG"=>50,"EndB"=>50,"Alpha"=>100));

/* Add a border to the picture */
$myPicture->drawRectangle(0,0,639,479,array("R"=>0,"G"=>0,"B"=>0));

/* Write the picture title */  //Propiedades de la barra de titulo
$timezone = -5; //(GMT -5:00)
$now = gmdate("d/m/Y H:i:s", time() + 3600*($timezone+date("I"))); 
//$now = date('Y-m-d H:i:s');
$myPicture->setFontProperties(array("FontName"=>"./fonts/arial.ttf","FontSize"=>11),array("R"=>255,"G"=>255,"B"=>255));
$myPicture->drawText(18,21,"Domosys - Preferencia de Dispositivos de Conexión de los Clientes al " . $now, array("R"=>255,"G"=>255,"B"=>255));
		
		/* Set the default font properties */ 
		$myPicture->setFontProperties(array("FontName"=>"./fonts/arial.ttf","FontSize"=>12,"R"=>255,"G"=>255,"B"=>255));
	
		/* Create the pPie object */ 
		$PieChart = new pPie($myPicture,$MyData);
		
/* Define the slice color - Color de los trozos: buscar RGB en internet */
$PieChart->setSliceColor(0,array("R"=>0,"G"=>153,"B"=>0));
$PieChart->setSliceColor(1,array("R"=>255,"G"=>153,"B"=>0));
$PieChart->setSliceColor(2,array("R"=>255,"G"=>0,"B"=>0));


 
		/* Enable shadow computing */ 
		$myPicture->setShadow(TRUE,array("X"=>3,"Y"=>3,"R"=>0,"G"=>0,"B"=>0,"Alpha"=>10));
		
		/* Draw a splitted pie chart - Propiedades del grafico al dibujarlo */ 
		//$myPicture->setFontProperties(array("FontName"=>"./fonts/arial.ttf","FontSize"=>10,"R"=>255,"G"=>255,"B"=>255));
		//WriteValues: escribir porcentajes / Radius: tamaño del pie chart / DataGapAngle: angulo de separacion de los trozos / coordenadas 320;270: punto donde se dibujara el pie chart
		$PieChart->draw3DPie(320,270,array("WriteValues"=>TRUE,"Radius"=>190,"DataGapAngle"=>14,"DataGapRadius"=>10,"DrawLabels"=>TRUE,"LabelStacked"=>TRUE,"Border"=>TRUE));
		
		/* Write the legend box - Etiquetas de abajo */ 
		//$myPicture->setFontProperties(array("FontName"=>"./fonts/arial.ttf","FontSize"=>10,"R"=>255,"G"=>255,"B"=>255));
		//$PieChart->drawPieLegend(220,320,array("Style"=>LEGEND_NOBORDER,"Mode"=>LEGEND_HORIZONTAL));
		
		/* Render the picture (choose the best way) */
		$myPicture->autoOutput("pictures/example.draw3DPie.transparent.png"); 
		
		
		
		
	}
}

if(isset($_GET["graf"]))	{					
	$opcion = $_GET["graf"];
	if ($opcion == "2")
	{
		$prueba = "";
		$noche = $_GET["noche"];
		$dia = $_GET["dia"];
		$tarde = $_GET["tarde"];
		$prueba = $noche . " " . $dia . " " . $tarde;
	
		/* CAT:Pie charts */ 
		
		/* Create and populate the pData object */
		$MyData = new pData();   
		$MyData->addPoints(array($noche,$dia,$tarde),"ScoreA");  
		$MyData->setSerieDescription("ScoreA","Application A"); 
		
		/* Define the absissa serie */
		$MyData->addPoints(array("Noche (00:00 - 07:59)","Día (08:00 - 15:59)","Tarde (16:00 - 23:59)"),"Labels");
		$MyData->setAbscissa("Labels");
		
		/* Create the pChart object */
		$myPicture = new pImage(640,480,$MyData,TRUE);
		
/* Draw a solid background */
$Settings = array("R"=>51, "G"=>153, "B"=>255, "Dash"=>1, "DashR"=>193, "DashG"=>172, "DashB"=>237);
$myPicture->drawFilledRectangle(0,0,640,480,$Settings);

/* Draw a gradient overlay */
$Settings = array("StartR"=>209, "StartG"=>150, "StartB"=>231, "EndR"=>111, "EndG"=>3, "EndB"=>138, "Alpha"=>50);
$myPicture->drawGradientArea(0,0,640,480,DIRECTION_VERTICAL,$Settings);
// Tamaño de la barra de titulo
$myPicture->drawGradientArea(0,0,640,25,DIRECTION_VERTICAL,array("StartR"=>0,"StartG"=>0,"StartB"=>0,"EndR"=>50,"EndG"=>50,"EndB"=>50,"Alpha"=>100));

/* Add a border to the picture */
$myPicture->drawRectangle(0,0,639,479,array("R"=>0,"G"=>0,"B"=>0));

/* Write the picture title */  //Propiedades de la barra de titulo
$timezone = -5; //(GMT -5:00)
$now = gmdate("d/m/Y H:i:s", time() + 3600*($timezone+date("I")));
$myPicture->setFontProperties(array("FontName"=>"./fonts/arial.ttf","FontSize"=>12),array("R"=>255,"G"=>255,"B"=>255));
$myPicture->drawText(18,21,"Domosys - Horario de Conexión de los Clientes al " . $now, array("R"=>255,"G"=>255,"B"=>255));
		
		/* Set the default font properties */ 
		$myPicture->setFontProperties(array("FontName"=>"./fonts/arial.ttf","FontSize"=>9,"R"=>255,"G"=>255,"B"=>255));
	
		/* Create the pPie object */ 
		$PieChart = new pPie($myPicture,$MyData);
		
/* Define the slice color - Color de los trozos: buscar RGB en internet */
$PieChart->setSliceColor(0,array("R"=>0,"G"=>153,"B"=>0));
$PieChart->setSliceColor(1,array("R"=>255,"G"=>153,"B"=>0));
$PieChart->setSliceColor(2,array("R"=>255,"G"=>0,"B"=>0));


 
		/* Enable shadow computing */ 
		$myPicture->setShadow(TRUE,array("X"=>3,"Y"=>3,"R"=>0,"G"=>0,"B"=>0,"Alpha"=>10));
		
		/* Draw a splitted pie chart - Propiedades del grafico al dibujarlo */ 
		//$myPicture->setFontProperties(array("FontName"=>"./fonts/arial.ttf","FontSize"=>10,"R"=>255,"G"=>255,"B"=>255));
		//WriteValues: escribir porcentajes / Radius: tamaño del pie chart / DataGapAngle: angulo de separacion de los trozos / coordenadas 320;270: punto donde se dibujara el pie chart
		$PieChart->draw3DPie(320,270,array("WriteValues"=>TRUE,"Radius"=>160,"DataGapAngle"=>14,"DataGapRadius"=>10,"DrawLabels"=>TRUE,"LabelStacked"=>TRUE,"Border"=>TRUE));
		
		/* Write the legend box - Etiquetas de abajo */ 
		$myPicture->setFontProperties(array("FontName"=>"./fonts/arial.ttf","FontSize"=>9,"R"=>0,"G"=>0,"B"=>0));
		$PieChart->drawPieLegend(50,400,array("Style"=>LEGEND_ROUND,"Mode"=>LEGEND_VERTICAL));
		
		/* Render the picture (choose the best way) */
		$myPicture->autoOutput("pictures/example.draw3DPie.transparent.png"); 
	}
}



// PREPARAR PARA EL GRAFICO MENSUAL DE CONSUMO
if(isset($_GET["graf"]))	{					
	$opcion = $_GET["graf"];
	if ($opcion == "3")
	{
		$datos_ene = intval($_GET["ene"]);
		$datos_feb = intval($_GET["feb"]);
		$datos_mar = $_GET["mar"];
		$datos_abr = $_GET["abr"];
		$datos_may = $_GET["may"];
		$datos_jun = intval($_GET["jun"]);
		$datos_jul = intval($_GET["jul"]);
		$datos_ago = $_GET["ago"];
		$datos_sept = $_GET["sept"];
		$datos_oct = $_GET["oct"];
		$datos_nov = $_GET["nov"];
		$datos_dic = $_GET["dic"];
		//$prueba = "";
		//$desk = $_GET["desk"];
		//$tabl = $_GET["tabl"];
		//$smart = $_GET["smart"];
		//$prueba = $desk . " " . $tabl . " " . $smart;
		
		/* CAT:Pie charts */ 
		
		/* Create and populate the pData object */ 
 $MyData = new pData();
 $MyData->addPoints(array($datos_ene,$datos_feb,$datos_mar,$datos_abr,$datos_may,$datos_jun,$datos_jul,$datos_ago,$datos_sept,$datos_oct,$datos_nov,$datos_dic),"Uso de Electricidad"); 
 //$MyData->addPoints(array(150,220,300,-250,-420,-200,300,200,100),"Uso de Electricidad"); 
 //$MyData->addPoints(array(140,0,340,-300,-320,-300,200,100,50),"Server B"); 
 $MyData->setAxisName(0,"Dinero ($)"); 
 $MyData->addPoints(array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"),"Meses"); 
 $MyData->setSerieDescription("Meses","Mes"); 
 $MyData->setAbscissa("Meses"); 

 /* Create the pChart object */ 
 $myPicture = new pImage(800,500,$MyData); 

 /* Turn of Antialiasing */ 
 $myPicture->Antialias = FALSE; 

 /* Add a border to the picture */ 
 $myPicture->drawGradientArea(0,0,800,500,DIRECTION_VERTICAL,array("StartR"=>240,"StartG"=>240,"StartB"=>240,"EndR"=>180,"EndG"=>180,"EndB"=>180,"Alpha"=>100)); 
 $myPicture->drawGradientArea(0,0,800,500,DIRECTION_HORIZONTAL,array("StartR"=>240,"StartG"=>240,"StartB"=>240,"EndR"=>180,"EndG"=>180,"EndB"=>180,"Alpha"=>20));
 $myPicture->drawRectangle(0,0,799,499,array("R"=>0,"G"=>0,"B"=>0)); 

 /* Set the default font */ 
 $myPicture->setFontProperties(array("FontName"=>"./fonts/arial.ttf","FontSize"=>8)); 

 /* Define the chart area */ 
 $myPicture->setGraphArea(60,40,740,450); 

 /* Draw the scale */ 
 $scaleSettings = array("GridR"=>200,"GridG"=>200,"GridB"=>200,"DrawSubTicks"=>TRUE,"CycleBackground"=>TRUE); 
 $myPicture->drawScale($scaleSettings); 

 /* Write the chart legend */ 
 $myPicture->drawLegend(580,12,array("Style"=>LEGEND_NOBORDER,"Mode"=>LEGEND_HORIZONTAL)); 

 /* Turn on shadow computing */  
 $myPicture->setShadow(TRUE,array("X"=>1,"Y"=>1,"R"=>0,"G"=>0,"B"=>0,"Alpha"=>10)); 

 /* Draw the chart */ 
 $myPicture->setShadow(TRUE,array("X"=>1,"Y"=>1,"R"=>0,"G"=>0,"B"=>0,"Alpha"=>10)); 
 $settings = array("Surrounding"=>-30,"InnerSurrounding"=>30); 
 $myPicture->drawBarChart($settings); 

 /* Render the picture (choose the best way) */ 
 $myPicture->autoOutput("./pictures/example.drawBarChart.simple.png"); 
	}
}
?>