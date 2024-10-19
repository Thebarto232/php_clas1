<?php

// if(isset($_REQUEST{'numero'})&& empty($_REQUEST{"numero"})){
//   for ($i=0; $i <$numero;$i++; ){
//   echo $i;


// }
// }
// else{
//   echo "no hay numero";
// }

echo $_REQUEST['checkbox  '];



$nombre="";
$apellido="";
$edad="";
$errores=[];


if(isset($_REQUEST{"nombre"})&& empty($_POST{"nombre"})){
  array_push($errores,"el codigo nombre es requerido");
}
if(isset($_REQUEST{"apellido"})&& empty($_POST{"apellido"})){
  array_push($errores,"el codigo apellido es requerido");
}
if(isset($_REQUEST{"edad"})&& empty($_POST{"edad"})){
  array_push($errores,"el codigo edad es requerido");
}
if(isset($_REQUEST{"telefono"})&& empty($_POST{"telefono"})){
  array_push($errores,"el codigo telefono es requerido");
}

echo"<ul>";
for ($i=0; $i <count($errores); $i++) { 
  # code...
}





print_r($errores);

/**
 * almacenar desde backen y y front 
 */

?>


 