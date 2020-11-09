<?php


?>
<!DOCTYPE html>
<html>
<head>
	<title>Fechas</title>

	<!-- CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"  >

	<!-- jQuery and JS bundle w/ Popper.js -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" ></script>

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	
</head>
<body>


	<div class="container">

		<div class="row">
			<h1> fechas</h1> 





		</div>
		<div class="row">

			

			<input type="date" name="txtFecha"  id="txtFecha" min="1997-01-01" max="2030-12-31">


			<button id="btnGuardar" class="btn btn-info"> Guardar </button>


		</div>
		<div class="row">
			<div id="mensaje">
				
				aqui va el resultado
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">


	$("#btnGuardar").click( function(){

		fecha1 = $("#txtFecha").val();
		
		$.ajax({

			url :'guarda_fecha.php' ,
			type : 'POST',
			data:{
				fecha : fecha1,
				nombre : 'rodolfo',
				edad   : '15'
			} ,
			beforeSend: function(){

				$("#mensaje").html("procesando gardado de fechas!!!");

				$("#btnGuardar").hide();
			},
			success: function(infoRespuesta){
				$("#btnGuardar").show();

				$("#mensaje").html(infoRespuesta);


			}





		});
	})
</script>
</html>