<?php
 /* 7. Hacer un programa para una tienda de zapatos que tiene una 
 promoción de descuento para vender al mayor, esta dependerá del 
 número de zapatos que se compren. Si son más de diez, se les dará 
 un 10% de descuento sobre el total de la compra; si el número de 
 zapatos es mayor de veinte pero menor de treinta, se le otorga un 20% 
 de descuento; y si son más treinta zapatos se otorgará un 40% de 
 descuento. El precio de cada zapato es de $80. */

 $cantidad = readline("Ingrese la cantidad de zapatos que el cliente desea comprar: ");

 $desc1 = 10;

 $desc2 = 20;

 $desc3 = 40;

 $precioZapato = 80;

 $totalPrecioZapato = $precioZapato * $cantidad;

 $descuento1 = $totalPrecioZapato - ($totalPrecioZapato * $desc1 ) / 100;

 $descuento2 = $totalPrecioZapato - ($totalPrecioZapato * $desc2 ) / 100;

 $descuento3 = $totalPrecioZapato - ($totalPrecioZapato * $desc3 ) / 100;


 if( $cantidad > 10 && $cantidad < 20){
 
  echo("\n\nSe aplicará un 10% de descuento directamente en el precio sobre la compra final.\n");

  echo ("\nEl valor total con descuento es de  $$descuento1 pesos. \n ");
   
 }

 else if ( $cantidad >= 20 && $cantidad <= 30) {
  
  echo("\n\nSe aplicará un 20% de descuento directamente en el precio sobre la compra final.\n");

  echo("\nEl valor total con descuento es de  $$descuento2 pesos. \n ");
  
 }

 else if ( $cantidad > 30 ) {
  
  echo("\n\nSe aplicará un 40% de descuento directamente en el precio sobre la compra final.\n");

  echo("\nEl valor total con descuento es de  $$descuento3 pesos. \n ");
  
 }


 else {
   echo "\n No aplica para ningún descuento. \n\n";
 }

?>