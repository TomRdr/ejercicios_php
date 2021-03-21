<?php
$datos=array(
    array(
     "nombre" => "Francisco Gracia",
     "telefono" => "5689741523",
     "correo" => "fgarcia@gmail.com"
    ),
    array(
        "nombre" => "Manuel Salinas",
        "telefono" => "2584369721",
        "correo" => "mlinas@gmail.com"
       ),
    array(
        "nombre" => "Johana Melara",
        "telefono" => "9875147536",
        "correo" => "jmelara@gmail.com"
    )
);
?>
    echo"
    <html>
        <head>
            <title>Ejercicio 3</title>
        </head>
        <body>
            <table border='1'>
                <thead>
                    <th>nombre</th>
                    <th>telefono</th>
                    <th>correo</th>
                </thead>
    ";    
    ?>
    <?php
	for($i=0;$i<count($datos);$i++){
    echo "<tr><td>". $datos[$i]['nombre']."</td>";
    echo "<td>". $datos[$i]['telefono']."</td>";
    echo "<td>". $datos[$i]['correo']."</td>";
}
