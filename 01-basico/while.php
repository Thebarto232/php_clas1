<?php
// $a=1;
// $b=1;
// while($a <=10){
//   if $a==8;

//   echo"$a <br>";
//   break;
//   $a++; /** pos incremento */

// }

// $tab = 10;
// $a = 2;

// while ($a <= 10) {  
//     if ($tab % 2 == 0) {
      
//         break; 
//     }

//     $tr = $a * $tab; 
//     echo "$tab * $a = $tr <br>";
//        $a++; 
// }
function varia($num1) {
    $a = 2;
    
    $primo=true;


    while ($a <$num1/2 && $primo) {
        if ($num1 % $a == 0) {
            echo "$num1 / $a = " . ($num1 / $a) . "<br>";
        }
        $a++;
    }
    return $primo;
}
$primo = varia(12) ? "si" : "no";
echo $primo;









 
  
