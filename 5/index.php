<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Calificaciones</title>
</head>
<body>

    <div class="container-xxl"   style="width:500px; margin: 0 auto;">
    <fieldset>
        <legend> Promedio calificaciones </legend>
    <form name="sumar" action="index.php" method="post">
    <p>Ingrese el nombre del estudiante <input type="text" name="nom" /></p>
    <p>Ingrese la calificación 1: <input type="number" name="cal1" /></p>
    <p>Ingrese el calificación 2: <input type="number" name="cal2" /></p>
    <p>Ingrese el calificación 3: <input type="number" name="cal3" /></p>
    <p>Ingrese el calificación 4: <input type="number" name="cal4" /></p>
    <p>Ingrese el calificación 5: <input type="number" name="cal5" /></p>
    <p style="text-align:center"><input type="submit" name="sumar" value="Calcular" /></p>
    </form>
</fieldset>
    </div>
    
    <?php
    if($_POST){
        $nom = $_POST["nom"];
        $cal1 = $_POST["cal1"];
        $cal2 = $_POST["cal2"];
        $cal3 = $_POST["cal3"];
        $cal4 = $_POST["cal4"];
        $cal5 = $_POST["cal5"];

    $prom=($cal1+$cal2+$cal3+$cal4+$cal5)/5;


    ?>
    <div class="container-xxl">
        <table class="table table-light table-striped table-hover table-bordered table-xxl table-responsive-xxl">
            <thead>
                <tr>
                    <th scope="col">Nombre del estudiante</th>
                    <th scope="col">Calificación 1</th>
                    <th scope="col">Calificación 2</th>
                    <th scope="col">Calificación 3</th>
                    <th scope="col">Calificación 4</th>
                    <th scope="col">Calificación 5</th>
                    <th scope="col">Promedio Final</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $nom ?></th>
                    <td><?php echo $cal1 ?></td>
                    <td><?php echo $cal2 ?></td>
                    <td><?php echo $cal3 ?></td>
                    <td><?php echo $cal4 ?></td>
                    <td><?php echo $cal5 ?></td>
                    <td><?php echo round($prom)?></td>
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