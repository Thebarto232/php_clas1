<?php 
$estudiantes=array("carlos","jose","maria","benito");
echo"<pre>";
print_r($estudiantes);
echo"</echo>";
print($estudiantes[2]);

$aprendiz=[
  "nombre"=>"juan",
  "apellido"=>"perez",
  "edad"=> "19",
  "deuda"=> "3.700.000.00",

];
echo"<pre>";
print_r($aprendiz);
echo"</pre>";

$tutor =[
  "nombre"=>"jhon fredy",
  "apellido"=>"becerra",
  "edad"=>39,
  "direcion"=>[
    "ciudad"=> "bucaramanga",
    "barrio"=> "villavel",
    "nomenlactura"=> "car25 no-18-65",
    "zipcode"=> 554353
  ],
  "habilidades" =>[
    "git", "html","css","js","php","pyton","sql"
  ]
  ];
// remplazar datos
  $tutor["direcion"]["ciudad"]="santander";
  // 
echo"<pre>";
  print_r($tutor["direcion"]);
echo"</pre>";
// unset eliminar
unset($tutor["habilidades"][4]); 
// 

echo"<pre>";
  print_r($tutor["habilidades"]);
echo"</pre>";



