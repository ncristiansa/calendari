<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title></title>
</head>
<body>
	<h1>Calendario.</h1>
<!-- La variable $day contiene una función obtiene el día actual y la idea era marcar el día actual con el siguiente código: if($contador==$day[mday]){echo"<td bgcolor="green">";}-->
<?php

$columnas = 5;
$filas = 7;
$contador = 1;
echo"<link href='Css.css' type='text/css' rel='stylesheet'>";
$dias = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');
$day = date(d);
echo"<table border='2px' height='40%' width='80%'";
echo"<tr>";
$rojo ="<p style='color:red';>$day</p>";
foreach ($dias as $d) {
	echo"<td>$d";
	echo"</td>";
}
echo"</tr>";
for($i=0;$i<$columnas;$i++){
  echo"<tr>";
  for($e=0;$e<$filas;$e++){
      if($contador<31){
      	if($contador!=$day){
      		echo"<td>$contador";
       		
      	}
      	else{
      		echo"<td>$rojo</td>";  		
      	}
      	$contador=$contador+1;
      }
      
    }
  echo"</tr>";
}
echo"</table>";

?>
</body>
</html>