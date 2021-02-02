<?php

?>

<script type="text/javascript"> 

</script>

<html>
<head>
<title>Futbol</title> <meta charset="utf-8">
<style>
body{
background-color: rgb(221, 241, 255);
}
.container {
    
  width: 100vw;
  height: 100vh;
  text-align: center;
}

.box-container {
  width: 60%;
  margin: 0 auto;
  
}

.box {
  position: relative;
  width: 300px;
  height: 100px;
  background-color: rgb(1, 1, 1);
  color: white;
  float: left;
  margin: 2%;
  border-radius: 20px;
}
.carrito{
    padding-left: 50%;
}
</style>

</head>
<body>

<div class="container">
  <h1>Tienda de fútbol</h1>
  <a title="Los Tejos" href="carrito.php" class="carrito"><img src="./imagenes/carrito.png" alt="Los Tejos" width="2%" /></a>
  <br>
  <span style="font-size:30px;padding:10px;">Productos</span> 
  
  
  <div class="box-container">
    <a href="producto1.php"><div class="box"><p style="font-size:30px;">Botas</p></div></a>
    <a href="producto2.php"><div class="box"><p style="font-size:30px;">Guantes</p></div></a>
    <a href="producto3.php"><div class="box"><p style="font-size:30px;">Calzonas</p></div></a>
    <a href="producto4.php"><div class="box"><p style="font-size:30px;">Camisetas</p></div></a>
  </div>
</div>
</body>
</html>
