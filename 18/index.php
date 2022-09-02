<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Numeros encriptados</title>
</head>
<body>

<div class="container-xxl" style="widht:600px; margin: 0 auto;">
<fieldset>
        <legend style="text-align:center"> Numeros encriptados </legend>
</fieldset>

<table class="table table-light table-striped table-hover table-bordered table-xxl table-responsive-xxl">
    <thead>
        <tr>
            <th scope="col">Numero</th>
            <th scope="col">Numero encriptado</th>
            <th scope="col">Ver</th>
        </tr>
    </thead>
    <tbody>
    <?php for ($i=1;$i<101;$i++){ ?>
            <tr>
            <td style="text-align:center"> <?php echo $i ?></td>
            <?php $encr=md5($i) ?>
            <td style="text-align:center">  <?php echo $encr ?> </td>
            <td style="text-align:center"> <a href="encriptados.php?n1=<?php echo $i?>"><button type="button" class="btn btn-primary">Enviar</button></a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>