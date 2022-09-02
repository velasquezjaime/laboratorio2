<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Centímetros a pulgadas</title>
</head>
<body>
    <fieldset>
        <legend>Centímetros a pulgadas </legend>
    <form name="sumar" action="index.php" method="post">
    <p>Ingrese el dato a convertir: <input type="number" name="num1" /></p>
    <p><input type="submit" name="sumar" value="Convertir" /></p>
    </form>
</fieldset>
    <?php

    if($_POST){
        $num1 = $_POST["num1"];

        $result= $num1/2.54;

        echo "El resultado es: ".$result;

    }

?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>