<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Area Circulo</title>
</head>
<body>
    <fieldset>
        <legend> Area de un círculo </legend>
    <form name="sumar" action="index.php" method="post">
    <p>Ingrese el Radio: <input type="number" name="rad" /></p>
    <p><input type="submit" name="sumar" value="Calcular" /></p>
    </form>
</fieldset>
    <?php

    if($_POST){
        $rad = $_POST["rad"];

        $area= ($rad*$rad)*pi();
        echo "El area del circulo es: ".$area;

    }

?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>