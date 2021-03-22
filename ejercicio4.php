<?php  
$datos=array(
    array(
        "Departamento"=>"R.R.H.H",
        "Empleado"=>"Margaritas Linares",
        "Salario"=>3500
    ),
    array(
        "Departamento"=>"Contabilidad",
        "Empleado"=>"Alberto Canizales",
        "Salario"=>2000
    ),
    array(
        "Departamento"=>"Finanzas",
        "Empleado"=>"Maria Gomez",
        "Salario"=>2500
    ),
    array(
        "Departamento"=>"Gerencias",
        "Empleado"=>"Anastacia Rivera",
        "Salario"=>3000
    ),
    array(
        "Departamento"=>"Gerencias",
        "Empleado"=>"Anastacia Rivera",
        "Salario"=>3000
    ),
    array(
        "Departamento"=>"Finanzas",
        "Empleado"=>"Bladimir Romero",
        "Salario"=>1000
    ),
    array(
        "Departamento"=>"Contabilidad",
        "Empleado"=>"Andrea Robles",
        "Salario"=>3000
    ),
    array(
        "Departamento"=>"R.R.H.H",
        "Empleado"=>"Carmen Rosales",
        "Salario"=>1500
    )

);
echo"
<html>
<head>
<title>ejercicio4</title>
</head>
<body>
<table border='1'>
    <thead>
        <th>Departamento</th>
        <th>Empleado</th>
        <th>Salario</th>
        
</thead>
";

for($i=0;$i<count($datos);$i++){
    echo "<tr><td>". $datos[$i]['Departamento']."</td>";
    echo "<td>". $datos[$i]['Empleado']."</td>";
    echo "<td>". $datos[$i]['Salario']."</td>";
    
}
?>
<?php


    $salarios=[3500, 2,000, 2500, 3000, 1000, 3000, 1500];

    $suma=0;
    for($i=0;$i<(count($salarios));$i++){
        $suma+=$salarios[$i];
    }
    $promedio=$suma/(count($salarios));

    //echo $suma/(count($salarios));

    printf("El salario promedio es: %s ", $promedio);
    

?>
<?php
$R=2;
$Contabilidad=2;
$Finanzas=2;
$Gerencias=1;

$d=array("Salario promedio"=>"promedio",
        "R.R.H.H"=>"R",
        "Contabilidad"=>"Contabilidad",
        "Finanzas"=>"Finanzas",
        "Gerencias"=>"Gerencias"
);

echo"
<html>
<head>
<title>ejercicio4</title>
</head>
<body>
<table border='2'>
    <thead>
        <th>promedio</th>
        <th>R</th>
        <th>Contabilidad</th>
        <th>Finanzas</th>
        <th>Gerencias</th>
        
</thead>
";

        for($i=0;$i<(count($d));$i++){
            echo "<tr><td>". $promedio ."</td>";
            echo "<td>". $R ."</td>";
            echo "<td>". $Contabilidad ."</td>";
            echo "<td>". $Finanzas ."</td>";
            echo "<td>". $Gerencias ."</td>";
        }
/*
        echo "<tr><td>". $d[$i]['Salario promedio']."</td>";
        echo "<td>". $d[$i]['R.R.H.H']."</td>";
        echo "<td>". $d[$i]['Conpatibilidad']."</td>";
        echo "<td>". $d[$i]['Finanzas']."</td>";
        echo "<td>". $d[$i]['Gerencias']."</td>";
        */
?>
