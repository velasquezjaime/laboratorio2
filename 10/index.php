<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tiempo Proceso</title>
</head>
<body>

<div class="container-xxl" style="width:500px; margin: 0 auto;">
<fieldset>
        <legend> Cálculo tiempo proceso </legend>
    <form name="sumar" action="index.php" method="post">
    <p>Ingrese los segundos: <input type="number" name="seg" /></p>
    <p>Ingrese los minutos: <input type="number" name="min" /></p>
    <p>Ingrese las horas: <input type="number" name="hor" /></p>
    <p style="text-align:center"><input type="submit" name="sumar" value="Calcular" /></p>
    </form>
</fieldset>
</div>
    
    <?php

    if($_POST){
        $seg = $_POST["seg"];
        $min = $_POST["min"];
        $hor = $_POST["hor"];

        $tothor=$hor*3600;
        $totmin=$min*60;

        $total=($tothor+$totmin+$seg)*0.25;
        $totaldolares=$total/100;

        echo "El costo total de la realización del proceso es: ".$totaldolares."$";
    }

?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>