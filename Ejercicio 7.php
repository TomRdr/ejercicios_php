<?php
$est=array(
    array(
        "Codigo"=>"1",
        "Nombre"=>"Oliva Carrion",
        "Examen1"=>5,
        "Examen2"=>6,
        "Parcial"=>5
    ),
    array(
        "Codigo"=>"2",
        "Nombre"=>"Ruben Benavente",
        "Examen1"=>9,
        "Examen2"=>7,
        "Parcial"=>10
    ),
    array(
        "Codigo"=>"4",
        "Nombre"=>"Sofia Moreno",
        "Examen1"=>7,
        "Examen2"=>9,
        "Parcial"=>9
    ),
    array(
        "Codigo"=>"4",
        "Nombre"=>"Sergio Bernal",
        "Examen1"=>8,
        "Examen2"=>7,
        "Parcial"=>8
    ),
    array(
        "Codigo"=>"5",
        "Nombre"=>"Saray Pérez",
        "Examen1"=>8,
        "Examen2"=>7,
        "Parcial"=>3
    ),
    array(
        "Codigo"=>"6",
        "Nombre"=>"Ramón Russ",
        "Examen1"=>10,
        "Examen2"=>10,
        "Parcial"=>9
    ),
    array(
        "Codigo"=>"7",
        "Nombre"=>"Evelyn Cobos",
        "Examen1"=>10,
        "Examen2"=>7,
        "Parcial"=>7
    ),
    array(
        "Codigo"=>"8",
        "Nombre"=>"Paula Calle",
        "Examen1"=>4,
        "Examen2"=>7,
        "Parcial"=>4
    ),
    array(
        "Codigo"=>"9",
        "Nombre"=>"Iris Soriano",
        "Examen1"=>10,
        "Examen2"=>10,
        "Parcial"=>6
    ),
    array(
        "Codigo"=>"10",
        "Nombre"=>"Eugenia Pinilla",
        "Examen1"=>4,
        "Examen2"=>5,
        "Parcial"=>8
    ),

);
?>
<html>
    <head>
        <title>Sistema de notas</title>
    </head>
    <body>
        <table border='1'>
            <thead>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Examen 1</th>
                <th>Examen 2</th>
                <th>Parcial</th>
                <th>Examen 1(30%)</th>
                <th>Examen 2(30%)</th>
                <th>Parcial (40%)</th>
                <th>Nota Final</th>
                <th>Estado</th>
            </thead>

<?php
	for($i=0;$i<count($est);$i++){
    echo "<tr><td>". $est[$i]['Codigo']."</td>";
    echo "<td>". $est[$i]['Nombre']."</td>";
    echo "<td>". $est[$i]['Examen1']."</td>";
    echo "<td>". $est[$i]['Examen2']."</td>";
    echo "<td>". $est[$i]['Parcial']."</td>";
    $Not1=$est[$i]['Examen1']*0.30;
    $Not2=$est[$i]['Examen2']*0.30;
    $parcial=$est[$i]['Parcial']*0.40;
    echo "<td>". $Not1 ."</td>";
    echo "<td>". $Not2 ."</td>";
    echo "<td>". $parcial."</td>";
    echo "<td>". $Not1 + $Not2 + $parcial ."</td>";


    $resull = $Not1 + $Not2 + $parcial;

    if($resull > 7){
        echo "<td>"."Aprobado"."</td>";
    }
    elseif($resull < 7){
        echo "<td>"."Debe mejorar"."</td>";
    }


}
    