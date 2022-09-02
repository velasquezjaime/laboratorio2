<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Calificación Final</title>
</head>
<body>

<<div class="container-xxl" style="width:500px; margin 0 auto;">
<fieldset>
        <legend> Calificación Final </legend>
    <form name="sumar" action="index.php" method="post">
    <p>Ingrese el nombre del estudiante:  <input type="text" name="nom" /></p>
    <p>Ingrese la calificación del parcial #1: <input type="number" name="par1" /></p>
    <p>Ingrese la calificación del parcial #2: <input type="number" name="par2" /></p>
    <p>Ingrese la calificación del parcial #3: <input type="number" name="par3" /></p>
    <p>Ingrese la calificación del examen final: <input type="number" name="fin" /></p>
    <p>Ingrese la calificación del trabajo final: <input type="number" name="trab" /></p>
    <p style="text-align:center"><input type="submit" name="sumar" value="Calcular" /></p>
    </form>
</fieldset>
</div>
    <?php
if($_POST){
        $nom = $_POST["nom"];
        $par1 = $_POST["par1"];
        $par2 = $_POST["par2"];
        $par3 = $_POST["par3"];
        $fin = $_POST["fin"];
        $trab = $_POST["trab"];


        $prom1 = ((($par1+$par2+$par3)/3)*.55);
        $prom2 = (($fin*.30));
        $prom3 = (($trab)*.15);
        $promfin = $prom1+$prom2+$prom3;


        ?>
<<div class="container-xxl">
    <table class="table table-light table-striped table-hover table-bordered table-xxl table-responsive-xxl">
        <thead>
            <tr>
                <th scope="col">Nombre del estudiante</th>
                <th scope="col">Promedio Parciales</th>
                <th scope="col">Promedio examen final</th>
                <th scope="col">Promedio trabajo final</th>
                <th scope="col">Promedio final</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><?php echo $nom ?></th>
                <td><?php echo $prom1 ?>%</td>
                <td><?php echo $prom2 ?>%</td>
                <td><?php echo $prom3 ?>%</td>
                <td><?php echo round($promfin) ?></td>
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