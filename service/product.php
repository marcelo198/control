<?php
  include("create.php");

  $method = $_SERVER['REQUEST_METHOD'];
  if($method=="POST"){
    $producto = new Producto();
    $producto->setNombre($_POST["nombre"]);
    $producto->setValor($_POST["codigo"]);
	$producto->setValor($_POST["valor"]);
    $resp = $producto->save();
    if($resp[0]){
      http_response_code(200);
    }else{
      http_response_code(400);
    }
    echo $resp[1];
  }
?>
