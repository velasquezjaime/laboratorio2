<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Suma dos numeros</title>
</head>
<body>
    <fieldset>
        <legend> Suma dos números </legend>
    <form name="sumar" action="index.php" method="post">
    <p>Ingrese el numero 1: <input type="number" name="num1" /></p>
    <p>Ingrese el numero 2: <input type="number" name="num2" /></p>
    <p><input type="submit" name="sumar" value="Sumar" /></p>
    </form>
</fieldset>
    <?php

    if($_POST){
        $n1 = $_POST["num1"];
        $n2 = $_POST["num2"];

        $resultsum= $n1+$n2;
        echo "<br>". "El resultado de la suma de ".$n1; 
        echo " + " .$n2; 
        echo " es: " .$resultsum; 

    }

?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>