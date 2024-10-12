<?php

/**
 * estructura condicional doble (if else)
 * 
 * if (expresion){
 * codigo ejecutar si la expresiion es verdadera
 * } else{
 * codigo es falsa}
 * 
 * if(expresion):
 * si es verdadera
 * else: si es falsa
 * endif;
 * 
 */
$i=7;
 if ($i>7){
  echo "El valor de i es mayor que 7";
 }else{
  echo "El valor de i es menor o igual a 7";
 }  

 if (9==12):
  echo "9 es igual a 12";
  else:
    echo"condicion falsa";
    endif;
  

    /* calcular el total que una persona debe pagar un montallantas,el precisio de cada llanta es 800 si se compra menos menos de 5 llantas
    y de 700 si se comprarn 5 o mas/*/


    $can_llantas=5;
    $precio_llanta=800;
    $total=0;

    if ($can_llantas<5){
      $total=$can_llantas*$precio_llanta;
      }else{
        $total=$can_llantas*700;
        }
        echo "El total a pagar es: $total";
        ?>

<?php
     //determinar si un alumno aprueba o reprueba un curso ,sabiendo que aprovara si su promedio de r calificaciones es mayor o igual a 3.0 caso contrario re pruebaa
     $not1=3;
     $not2=3;
     $not3=3;
     $promedio=($not1+$not2+$not3)/3;
     

     if ($promedio>=3.0){
      echo "El alumno aprueba el curso";
      }else{
        echo "El alumno reprueba el curso";
        }

        // (i>7) ? "ECHO MAYOR": "ECHO "MENOR";

      
        


    ?>


<?php

$a=8;
$b=7;
//2 numeros si el primero es mayor que el segundo mulplicamos , de los contrario dividimos//

$rta=($a>$b) ? $a*$b: $a/$b;
echo $rta;

?>







