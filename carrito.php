<?php 

$aCarrito = array();
$sHTML = '';
$fPrecioTotal = 0;
$existe = 0;

//Vaciar
if(isset($_GET['vaciar'])) {
	unset($_COOKIE['carrito']);
	$sHTML .= 'El carrito está vacio';
}

//Productos anteriores
if(isset($_COOKIE['carrito'])) {
	$aCarrito = unserialize($_COOKIE['carrito']);
}

//nuevo producto
if(isset($_GET['nombre']) && isset($_GET['precio'])) {


	for($i = 0; $i< sizeof($aCarrito); $i++) {
	    if($aCarrito[$i]['nombre'] == $_GET['nombre']) {
		$aCarrito[$i]['cantidad'] = $aCarrito[$i]['cantidad'] + 1;
		$existe = 1;
	    }
	}



	if($existe == 0) {
		$iUltimaPos = count($aCarrito);
		$aCarrito[$iUltimaPos]['nombre'] = $_GET['nombre'];
		$aCarrito[$iUltimaPos]['precio'] = $_GET['precio'];
		$aCarrito[$iUltimaPos]['cantidad'] = $_POST['cantidad'];
        }
}

//cookie que dure un día
$iTemCad = time() + (86400);
setcookie('carrito', serialize($aCarrito), $iTemCad);



// contenido del array
$sHTML .= '<table border="1"; style="width:300px;">';
$sHTML .= '<tr><td><b>Nombre</b></td><td><b>Precio</b></td><td><b>Cantidad</b></td></tr>';
foreach ($aCarrito as $key => $value) {
	$sHTML .= '<tr>';
	$sHTML .= '<td>' . $value['nombre'] . '</td><td>' . $value['precio']*$value['cantidad'] . '</td><td>' . $value['cantidad']  . '</td>';
	$sHTML .= '</tr>';
	
	$fPrecioTotal += $value['precio']*$value['cantidad'];
}
$sHTML .= '</table>';

//Imprimimos el precio total
$sHTML .= '<br>------------------<br>Precio total: ' . $fPrecioTotal . ' €';

?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>carrito</title>
	<style>
	body{
		background-color: rgb(221, 241, 255);
		text-align: center;
	}
	.botones{
		margin: 10px;
		background-color: rgb(175, 233, 255);
		border-radius: 10px;
		border-color: black;
	}
	table{
		border: solid;
		
		background-color: white;
		text-align: center;
		border-collapse: collapse;
	}
	</style>
</head>
<body>
	<h1>Carrito</h1>
	<div>
		<center><?php echo $sHTML; ?></center>
	</div>
<br>


<button class="botones" onclick="location.href='carrito.php?vaciar=1'" type="button">Vaciar el carrito</button>

<br>
<button class="botones" onclick="location.href='index.php'" type="button">Volver al Menu</button>

</body>
</html>