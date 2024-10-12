<?php
/**
 * estructura
 * if (?){
 * if(?){
 * codigo ejecutar    
 * } else{
 * codigo ejecutar   
 * }
 * 
 * }
 */


$a = 2;
$b = 3;
$c = 10;

if ($a > $b) {
    if ($c > 10) {
        echo "a es mayor que b y c es mayor que 10";
    } else {
        echo "a es mayor que b pero c no es mayor que 10";
    }
} else {
    echo "a no es mayor que b";

}

if($a>$b){
  if($c>10){
    echo "a es mayor que b y c es mayor que 10";
    }else{
      echo "a es mayor que b pero c no es mayor que 10";
      }
      }else{
        echo "a no es mayor que b";
        
}





$dia= 5;

echo "<br>"

echo ($dia==1) ? "lunes";
echo ($dia==2) ? "martes";
echo ($dia==3) ? "miercoles";
echo ($dia==4) ? "juevez";
echo ($dia==5) ? "viernes";
echo ($dia==6) ? "sabados";
echo ($dia==7) ? "domingo";



if($dia==1){
  echo"lunes";
  }
if($dia==2){
  echo "martes";
}  

if($dia==3){
  echo "miercoles";
}
if($dia==4){
  echo "juevez";
  }
if($dia==5){
  echo "viernes";
}

if($dia==6){
  echo "sabados";
}
if($dia==7){
  echo "domingo";
}
  






