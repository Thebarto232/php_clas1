<?php
/**
 * operadores de incremento y decremento
 * 
 * simbolo                     nombre
 * ++                          incremento
 * --                          decremento
 * 
 * 
 * ejemplo
 * 
 * ++ varible                  pre_incremento
 * --variable                  pre_decremento
 * 
 */


 //unario incrementa==++ y decrementa -= uno
 //operacion 
$num=10;
//* incrementa la variable=primero y luego la utiliza 
echo "pre_incremento".++$num;
echo "<br>";
echo "post incremento".$num++; //primero realiza la operacion y luego incrementa

echo "<br>";
echo $num;

echo "<br>";
echo "?".--$num;// primero resta y luego realiza la operacion

echo "<br>";
echo "post decremento".$num--; //primero realiza la operacion y luego resta el valor
$resultado = ++ $num;
echo $resultado; 
echo "<br>";
$resultado = $num++; //primera se le asigna $num y luego se incrementa
echo"?". $resultado;