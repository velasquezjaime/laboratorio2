<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Inversión</title>
</head>
<body>
    <div class="container-xxl" style="width:600px; margin: 0 auto;">
    <fieldset>
        <legend> Porcentajes Inversión </legend>
    <form name="sumar" action="index.php" method="post">
    <p>Ingrese la inversión de la persona 1: <input type="number" name="num1" /></p>
    <p>Ingrese la inversión de la persona 2: <input type="number" name="num2" /></p>
    <p>Ingrese la inversión de la persona 3: <input type="number" name="num3" /></p>
    <p style="text-align:center"><input type="submit" name="sumar" value="Calcular" /></p>
    </form>
    </fieldset>
    </div>
    
    <?php
    if($_POST){
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];

        $total=($num1+$num2+$num3);

        $priinv=($num1*100)/$total;
        $seginv=($num2*100)/$total;
        $terinv=($num3*100)/$total;
        ?>

    <div class="container-xxl">
        <table class="table table-light table-striped table-hover table-bordered table-xxl table-responsive-xxl">
            <thead>
                <tr>
                    <th scope="col">Personas</th>
                    <th scope="col">Inversión</th>
                    <th scope="col">Porcentaje</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Persona 1</th>
                    <td><?php echo $num1 ?>$</td>
                    <td><?php echo round($priinv) ?>%</td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Persona 2</th>
                    <td><?php echo $num2 ?>$</td>
                    <td><?php echo round($seginv) ?>%</td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Persona 3</th>
                    <td><?php echo $num3 ?>$</td>
                    <td><?php echo round($terinv) ?>%</td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Total</th>
                    <td></td>
                    <td><td><?php echo $total ?>$</td>
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