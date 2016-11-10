<?php

 echo "La tabla del 5:"."<br>";
 for($i=1; $i<=10; $i++) 
 {
  echo "5 x $i = ". 5*$i . "<br>";
 }

// foreach
 $tablas=array(
"primera"=>5,
"segunda"=>13,
"tercera"=>11,
"cuarta"=>12
);
Tablas($tablas);
 function Tablas($tablas){
 foreach ($tablas as $indice=>$valor){
     echo ("$indice : $valor<br>");
     }
}
 
?>