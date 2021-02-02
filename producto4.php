<?php

?>

<script type="text/javascript"> 

</script>

<html>
<head>
<title>Ejercicio</title> <meta charset="utf-8">
<style>
body{
	background-color: rgb(221, 241, 255);
}
.txt-heading{    
	padding: 10px 10px;
    border-radius: 2px;
    color: #FFF;
    background: #6aadf1;
	margin-bottom:10px;
	text-align: center;
}

#product-grid {
	margin:100px;
}
.product-item {	
	float:left;	
	background: #ffffff;
	margin:15px 10px;	
	padding:5px;
	border:#CCC 1px solid;
	border-radius:4px;
}
.product-item div{
	text-align:center;
	margin:10px;
}
.product-price {    
	color: #005dbb;
    font-weight: 600;
}
.product-image {
	height:200px;
	background-color:#FFF;
}
.clear-float{
	clear:both;
}
.demo-input-box{
	border-radius:2px;
	border:#CCC 1px solid;
	padding:2px 1px;
}
</style>

</head>
<body>

<div id="product-grid">
    <div class="txt-heading">Camisetas</div>
	<div class="product-item">
	    <form method="post" action="carrito.php?nombre=Camiseta&precio=100">
		<div class="product-image"><img src="./imagenes/camiseta.jpg"width="45%"></div>
		<div><strong>Camiseta fútbol</strong></div>
		<div class="product-price">100 €</div>
		<div><input type="text" name="cantidad" value="1"/><input type="submit" value="Añadir al carro" class="btnAddAction" /></div>
	    </form>
	</div>

    </div>
</div>
</body>
</html>
