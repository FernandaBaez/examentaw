<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   <?php include "Modulos/navegador.php"; ?>
   <section>
	<?php 
	ob_start();

	$mvc = new MvcController();
	$mvc -> enlacesPaginasController();
	?>

</section>
</body>
</html>