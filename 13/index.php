<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>La langosta ahumada</title>
</head>
<body>
    <fieldset>
        <legend> Cálculo presupuesto </legend>
    <form name="sumar" action="index.php" method="post">
    <p>Ingrese la cantidad de personas que asistirán al evento: <input type="number" name="num1" /></p>
    <p><input type="submit" name="sumar" value="Calcular" /></p>
    </form>
</fieldset>
    <?php

    if($_POST){
        $num1 = $_POST["num1"];

        if($num1 >= 0 && $num1 < 200){
            $res1=$num1*95.00;
            echo "<h4>El costo por platillo por persona es de 95$ lo cual no da un total de: ".$res1."$</h4>";
        }else if($num1 >= 200 && $num1 <= 300){
            $res2=$num1*85.00;
            echo "<h4>El costo por platillo por persona es de 85$ lo cual no da un total de: ".$res2."$</h4>";
        }else if($num1 > 300){
            $res3=$num1*75.00;
            echo "<h4>El costo por platillo por persona es de 75$ lo cual no da un total de: ".$res3."$</h4>";
        }


    }

?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>