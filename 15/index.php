<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Aumento límite de crédito</title>
</head>
<body>
    <fieldset>
        <legend> Banco Pueblo Desconocido </legend>
    <form name="sumar" action="index.php" method="post">
    <p>Ingrese su tipo de tarjeta: <input type="number" name="num1" /></p>
    <p><input type="submit" name="sumar" value="Entrar" /></p>
    </form>
</fieldset>
    <?php


    if($_POST){
        $num1 = $_POST["num1"];


        if ($num1 == 1){
            echo "<h3>Usted cuenta con una tarjeta de tipo 1 y por ende tendrá un aumento del 25% en su crédito</h3>";
        } else if($num1==2){
            echo "<h3>Usted cuenta con una tarjeta de tipo 2 y por ende tendrá un aumento del 35% en su crédito</h3>";
        }else if($num1==3){
            echo "<h3>Usted cuenta con una tarjeta de tipo 3 y por ende tendrá un aumento del 40% en su crédito</h3>";
        }else if($num1>=4){
            echo "<h3>Usted cuenta con una tarjeta de tipo 4 o superior y por ende tendrá un aumento del 50% en su crédito</h3>";
        }





    }

?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>