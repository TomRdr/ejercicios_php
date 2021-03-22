<?php

$n1=10;
$n2=17;
$n=array(
    "dato1"=>"numero1",
    "dato1"=>"numero2",
    "datoM"=>"Mayor"
);

echo"
<html>
<body>
<table border='2'>
<thead>
<th>numero1</th>
<th>numero2</th>
<th>Mayor</th>
</thead>
";


for($i=0;$i<(count($n));$i++){
echo "<tr><td>". $n1."</td>";
echo "<td>". $n2."</td>";

}

if($n1>$n2){
    echo "<td>". $n1."</td>";
}else{
    echo "<td>". $n2."</td>";
}
/*
echo "<tr>". $n1."</tr>";
echo "<tr>". $n2."</tr>";
*/
?>