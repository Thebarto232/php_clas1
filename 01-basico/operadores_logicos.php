<?php
/* 
-----------simbolo---------------nombre------
-----------and-------------------Y-----------
-----------OR-------------------o-----------
-----------!-------------------not (o)-----------
---------||------------------or (o)-----------
---------&&------------------and (Y)-----------
------------tabla de operadores and------------
expresion 1 expresion 2 resultado
false------- && false-----  false
false------&&---true------false
true-------&&---true------true
true------&&----false-----false
*/

$valor =7;
$valor2 =2;

var_dump($valor==7 && 2> 3);
echo"<br>";
var_dump($valor==7&& 9 >3);

/*tabla operador OR
expresion 1 expresion 2 resultdo 
false------- || false-----  false
false------||---true------true
true-------||---false------true
true------||----true------true
*/
var_dump($valor == 7 or 2>3); 
echo"<br>";
var_dump($valor == 5 || 9>3); 
echo"<br>";
var_dump($valor == 5 || 1>3); 
echo"<br>";

/**
 * ------------------------- table de operador NOT
 * expresion                                 resultado 
 * false                                   true
 * true                                    false
 * 
 */

 var_dump(!($valor >= $valor2));