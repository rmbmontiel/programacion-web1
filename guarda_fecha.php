<?php

/// año - mes -dia


// dia / mes / año 

 $fecha = $_POST['fecha'];  // 2020- 10 - 01
 							//	0    1    2

$piezas = explode("-",$fecha);
var_dump($piezas);



 $fechaF =$piezas[2]."/".$piezas[1]."/".$piezas[0] ;
?>

<h1>
	
	seleccionaste la fecha  : <strong><?=$fechaF ?> </strong>
	<br>

	el mes es <?=$piezas[1] ?> en letra es  : 

<br>

	fecha español  :

<br>


	fecha ingels  :

<br>

	fecha DB  :
</h1>