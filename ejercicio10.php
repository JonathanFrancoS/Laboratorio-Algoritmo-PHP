<?php

  /* 10. Leer tres números que denoten una fecha (día, mes, año). Comprobar 
  que es una fecha válida. Si no es válida escribir un mensaje de error. 
  Si es válida escribir la fecha cambiando el número del mes por su 
  nombre. Ej. Si se introduce 1 2 2022, se deberá imprimir “1 de febrero 
  de 2022”. */

     $dia = readline("Por favor ingrese el día : \n");
               
       if( $dia >= 1 && $dia <= 31 ) {

          $mes = readline("Por favor ingrese el mes : \n");    
          
          if ( $mes >=1 && $mes <=12 ) {

          $año = readline("Por favor ingrese el año completo : \n");
              
          $search = [ "1", "2", "3",
          "4", "5", "6", 
          "7", "8", "9", 
          "10", "11", "12" ];
         
          $replace= [ "enero", "febrero", "marzo",
          "abril", "mayo", "junio",
          "julio", "agosto", "septiembre",
          "octubre", "noviembre", "diciembre"] ; 
        
          $nueva_fecha = str_replace( $search,  $replace,  $mes );
       
          echo ( " \" $dia de $nueva_fecha de $año \". " );

          }
          
            else {
               echo "error! día invalido digite lo nuevamente"; 
            }
                   
        } 
          
           else {
             echo "error! día invalido digite lo nuevamente"; 
            }
    

?>