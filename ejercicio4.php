<?php

/* 4. Diseñar un algoritmo que me permita calcular el costo final de la venta 
cuando se conoce que si se compran 3 camisas o más se obtendrá un 
descuento de un 20%, si se compran menos se obtendrá un 
descuentos de 10%. */

//readline es una función para entrada de datos en consola 

$venta = readline("Ingrese la cantidad de camisas que el cliente desea comprar: ");

$costoTotal = readline("Ingrese el valor total de la venta: ");

$descuento = readline("Ingrese el descuento ");

$resultado = $costoTotal - ($costoTotal*$descuento) /100;

if( $venta >= 3 && $descuento == 20 ){
 
   echo("Se aplicará un 20% de descuento directamente en el precio sobre la compra final. ");

   echo(" El valor total con descuento es de $$resultado pesos.");
   
  }

  else if ( $venta >= 1 && $venta <= 3 && $descuento == 10 ) {
  
    echo("Se aplicará un 10% de descuento directamente en el precio sobre la compra final. ");

    echo(" El valor total con descuento es de $$resultado pesos.");
  
  }

     else {
       echo ("No aplica");
     }

?>