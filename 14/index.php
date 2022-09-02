<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Bono</title>
</head>
<body>
    <fieldset>
        <legend> Bono </legend>
    <form name="sumar" action="index.php" method="post">
    <p>Ingrese la cantidad de años en la empresa(Sólo aplica para clientes desde 1 año): <input type="number" name="num1" /></p>
    <p><input type="submit" name="sumar" value="Calcular" /></p>
    </form>
</fieldset>
    <?php

    if($_POST){
        $num1 = $_POST["num1"];

        if($num1 < 1){
            echo "Usted no cuenta con el mínimo tiempo requerido en la empresa";
        } else if ($num1 == 1){
            echo "Usted contará con un bono de $100 por sus contribuciones";
        }else if ($num1 == 2){
            echo "Usted contará con un bono de $200 por sus contribuciones";
        }
        else if ($num1 == 3){
            echo "Usted contará con un bono de $300 por sus contribuciones";
        }else if ($num1 == 4){
            echo "Usted contará con un bono de $400 por sus contribuciones";
        }else if ($num1 >= 5){
            echo "Usted contará con un bono de $1000 por sus contribuciones";
        }




    }

?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>