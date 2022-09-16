<?php
 /* 9. Mostrar La tabla de multiplicar de cualquier número ingresado por 
 teclado */

 $multiplicando = readline("Por favor ingresa un número del 1 al 9 = \n");
 $multiplicador;

 for ( $multiplicador = 1; $multiplicador <= 9; $multiplicador++ ) {

  echo "\n $multiplicando X $multiplicador "."=".( $multiplicando  *  $multiplicador );
 
 }

?>