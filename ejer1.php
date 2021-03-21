<html>
    <head>
        <title>Calculadora</title>
    </head>
    <body> 
    
<fieldset>
<legend>Operaciones basicas</legend>
<form action="#" method="POST">
<label for = "N1">Primer numero</label>
<input type = "numero" name="n1" require>
<br></br>
<label for = "N2">Segundo numero</label>
<input type = "numero" name="n2" require>
<br></br>
<label for="operaciones">Operaciones Basicas</label>
<select name="operaciones" id="opr">
<option value="sumar">Sumar</option>
<option value="restar">Restar</option>
<option value="multiplicar">Multiplicar</option>
<option value="dividir">Dividir</option>
</select>
<br>
<input type="submit" name="enviar" value="Calcular">
</form>
</fieldset>
<h2>respuesta</h2>

<?php
//variable para poder llamar el primer numero
$n1 =$_POST["n1"];
//variable para llamar el segundo numero
$n2 =$_POST["n2"];
//variable para llamar las operaciones
$opr =$_POST["operaciones"];
//para dar los resultados
if(isset($_POST["enviar"])){
    //para sumar
    switch ($opr) {
        case 'sumar':
            $resultado =$n1 + $n2;
            echo"la suma de ".$n1."+".$n2."=".$resultado;
            break;
        case 'restar':
            $resultado =$n1 - $n2;
            echo"la restar de ".$n1."-".$n2."=".$resultado;
            break;
        case 'multiplicar':
            $resultado =$n1 * $n2;
            echo"la multiplicacion de ".$n1."*".$n2."=".$resultado;
            break;
        case 'dividir':
            $resultado =$n1 / $n2;
            echo"la divicion de ".$n1."/".$n2."=".$resultado;
            break;
        default:
            # code...
            break;
    }
}
?>