<?php

//Bucle foreach

//formación
$array[] = "andrés";
$array[] = "camilo";
$array[] = "maria";
$matriz[] = "sofía";
$array[] = "juan";

foreach ($matriz como $valor){
    echo  $valor;
    echo "<br/>"
}


foreach ( $matriz como $clave => $valor)
{
    echo "posicio:" . tecla $ . "el nombre es:" . valor de $;
    echo "<br/>";
}



//recorrer un array multidimensional

$notas = array (
    '0' => matriz ('materia' => "Inglés", "nombre" => "sonia", "nota" => 4.1),
    '1' => matriz ('materia' => "Español", "nombre" => "Kevin", "nota" => 1.2),
    '2' => array ('materia' => "Matematicas", "nombre" => "maria", "nota" => 3.6),
    '3' => matriz ('materia' => "Inglés", "nombre" => "Daniela", "nota" => 4.5),
);

echo " ------------------------------------------------ --------------- ";
echo " <br/> ";

foreach ($notas como $clave => $valor)
{
    echo "la materia:" . $valor ["materia"]. "Persona:" . $valor ["nombre"]. "la nota es:" . $valor ["nota"];
    echo "<br/>";
}




?>

