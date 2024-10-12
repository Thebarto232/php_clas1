<?php
/**
 * 
 * estructura condicional 
 * if (espresion){
 * codigo  a ejecutar 
 * 
 * if(expresion):
 * codigo a ejecutar
 * endif;

 * }
 */

$edad = 18;
$edad2 =20;

if ($edad >= 18):
  echo "hola,usted es mayor de edad";
endif;


?>

<div>
  <?php if ($edad>=18): ?>
  <h2>saludo persona</h2>
  <?php endif; ?>
  </div>
  
  
  
  
<?php 
if ($edad2>=20):
  echo "hola,usted tiene mas de 20 ";
endif;
?>
 
<?php
// Pedir un número al usuario
$numero =2; // Leer entrada desde la consola

// Verificar si el número es par o impar
if ($numero % 2 == 0) {
    echo "El número $numero es par";
} else {
    echo "El número $numero es impar";
}

?>



<?php
//en un alamacen se hace un 20% descuento alos clientes cuya compra supere los 100 dolares cual sera la cantidad que pagara una persona por su comprar

$compra = 120; 
?>
<?php if ($compra > 100):
$descuento = $compra * 0.2;
echo"<pre>";
endif;




$pagar = $compra - $descuento;
echo "el cliente pagara $pagar";

?>





