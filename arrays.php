<?php

    // arreglos
    $array1[] = "posición 1";
    $array1[] = "posición 2";
    $array1[] = "posición 3";

    var_dump ( $matriz1 );



    $matriz2 = matriz 
    (
        '0' => 'a' ,
        '1' => 'b' ,
        '2' => 'c' ,
    );


    var_dump ( $matriz2 );


    //array asociativos
    echo " <br/> ";
    echo " Array asociativos ";

    $arregloAsociativo = arreglo 
    (
        'materia' => " Fisica ",
        'nota' => 3.0 ,
        'nombre' => " Javier ",
        'apellido' => " Ardila ",
    );

    var_dump($arrayAsociativo);
    echo  $arrayAsociativo ["materia"];


    eco " <br/> ";
    eco " <br/> ";
    eco " <br/> ";
    eco " <br/> ";
    eco " <br/> ";
    eco " <br/> ";



    //matriz multidimensional
    $notas = array (
        '0' => array ( 'materia' => " Física ", " nombre " => " Said ", " nota " => 3.5 ),
        '1' => array ( 'materia' => " Física ", " nombre " => " Jainer ", " nota " => 4.0 ),
        '2' => array ( 'materia' => " Física ", " nombre " => " Karen ", " nota " => 3.0 ),
        '3' => matriz ( 'materia' => " Física ", " nombre " => " Juan ", " nota " => 4.5 ),
    );

    var_dump( $notas );

    echo " Nombre de la nota mas alta: ". $notas [ 3 ][" nombre "];

?>