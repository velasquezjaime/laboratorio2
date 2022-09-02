<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Presupuesto Hospital</title>
</head>
<body>

<div class="container-xxl" style="width:500px; margin: 0 auto;">
<fieldset>
        <legend> Presupuesto Hospital </legend>
    <form name="sumar" action="index.php" method="post">
    <p>Ingrese el presupuesto anual: <input type="number" name="num1" /></p>
    <p style="text-align:center"><input type="submit" name="sumar" value="Calcular" /></p>
    </form>
</fieldset>
</div>
   <?php
if($_POST){
        $num1 = $_POST["num1"];

        $presgine=($num1*40)/100;
        $prestrau=($num1*30)/100;
        $presped=($num1*30)/100;
        ?>
<div class="container-xxl">
    <table class="table table-light table-striped table-hover table-bordered table-xxl table-responsive-xxl">
        <thead>
            <tr>
                <th scope="col">Área</th>
                <th scope="col">Porcentaje</th>
                <th scope="col">Presupuesto</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Ginecología</th>
                <td>40%</td>
                <td><?php echo $presgine ?>$</td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">Traumatismo</th>
                <td>30%</td>
                <td><?php echo $prestrau ?>$</td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">Pediatría</th>
                <td>30%</td>
                <td><?php echo $presped ?>$</td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">Total</th>
                <td></td>
                <td></td>
                <td><?php echo $num1 ?>$</td>
            </tr>
        </tbody>
    </table>
</div>
    <?php

    


    }

?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>