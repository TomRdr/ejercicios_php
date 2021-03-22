<?php
//creacion del array
$datos=array(
    array(
    "Nombre"=>"Jose Miguel Jimenez Rodriguez",
    "Lugar de nacimiento"=>"Santiago de Maria",
    "Departamento"=>"Usulutan",
    "Edad"=>"20",
    "Codigo"=>"SMIS091319"
    ),
    array(
        "Nombre"=>"Thomy Brandon MEndoza Romero",
        "Lugar de nacimiento"=>"San Miguel",
        "Departamento"=>"San Miguel",
        "Edad"=>"22",
        "Codigo"=>"SMIS0191421"
        )
);

echo"
<html>
<head>
        <title>Ejercicio 2</title>
    </head>
    <body>
        <table border='1'>
        <thead>
        <th>Nombre</th>
        <th>Lugar de nacimiento</th>
        <th>Departamento</th>
        <th>Edad</th>
        <th>Codigo</th>
        </thead>
";


for($i=0;$i<count($datos);$i++){
    echo "<tr><td>". $datos[$i]['Nombre']."</td>";
    echo "<td>". $datos[$i]['Lugar de nacimiento']."</td>";
    echo "<td>". $datos[$i]['Departamento']."</td>";
    echo "<td>". $datos[$i]['Edad']."</td>";
    echo "<td>". $datos[$i]['Codigo']."</td>";

}