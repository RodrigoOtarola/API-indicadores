<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Indicadores</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="./css/normalize.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--Google Icon-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="container">
    <h2 class="white-text">Indicadores economicos:</h2>
    <ul class="collapsible">
        <li>
            <div class="collapsible-header">
                <i class="material-icons">list_alt</i>
                Ver indicadores ultimos 6 valores.
                <span class="badge"></span>
            </div>
            <div class="collapsible-body white">
                <p><?php include 'indTabla.php' ?></p>
            </div>
        </li>
        <li>
            <div class="collapsible-header">
                <i class="material-icons">event</i>
                Buscar por día especifico.
                <span class="badge"></span>
            </div>
            <div class="collapsible-body white">
                <p>Selecciona el indicador:</p>
                <p><?php include 'indCalculo.php' ?></p>
            </div>
        </li>
        <li>
            <div class="collapsible-header">
                <i class="material-icons">calculate</i>
                Conversión monetaria.
                <span class="badge"></span>
            </div>
            <div class="collapsible-body white">
                <p>En contruccion:</p>
                <p><?php include 'conversor.php' ?></p>
            </div>
        </li>
    </ul>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="js/app.js"></script>
<footer class="page-footer #e3f2fd blue lighten-5 black-text">
    Derechos reservados © <?php echo date('Y'); ?>
</footer>
</body>
</html>