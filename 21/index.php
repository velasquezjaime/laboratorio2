<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Progress bar colores</title>
</head>
<body>


<div class="container-xxl">

<fieldset>
    <legend style="text-align:center"><strong> Progress Bar </strong></legend>
</fieldset>

<?php $valores = array();

for ($x=0;$x<11;$x++){
$num_aleatorio = rand(1,100);
array_push($valores,$num_aleatorio);
}
?>

<table class="table table-light table-striped table-hover table-bordered table-xxl table-responsive-xxl">
    <thead>
        <tr>
            <th scope="col">Número</th>
            <th scope="col">Valor</th>
            <th scope="col">Gráfico usando progressbar</th>
        </tr>
    </thead>
    <tbody>
    <?php for ($i=1;$i<11;$i++){ ?>
        <tr>
        <td> <?php echo $i ?> </td>
        <td> <?php echo $valores[$i] ?> </td>
        <?php $num=$valores[$i] ?>
        <?php if ($num < 61){ ?>
            <td> <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="70"
        aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $num ?>%">
        <?php echo $num ?>%
        <?php } ?>

        <?php if ($num >= 61 && $num <= 70){ ?>
            <td> <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="70"
        aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $num ?>%">
        <?php echo $num ?>%
        <?php } ?>

        <?php if ($num >= 71 && $num <= 80){ ?>
            <td> <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70"
        aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $num ?>%">
        <?php echo $num ?>%
        <?php } ?>

        <?php if ($num >= 81 && $num <= 90){ ?>
            <td> <div class="progress-bar bg-info" role="progressbar" aria-valuenow="70"
        aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $num ?>%">
        <?php echo $num ?>%
        <?php } ?>

        <?php if ($num > 90){ ?>
            <td> <div class="progress-bar bg-success" role="progressbar" aria-valuenow="70"
        aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $num ?>%">
        <?php echo $num ?>%
        <?php } ?>

    </div>
    </div> </td>

        </tr>
    <?php } ?>
    </tbody>
</table>
    
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>