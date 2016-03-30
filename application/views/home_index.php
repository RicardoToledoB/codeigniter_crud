

<html>
    <head>
        <title>Modulo Inicio</title>
    </head>
    <body>
        <?= anchor(base_url() . 'index.php/login/log_out', 'Cerrar sesión') ?>
        <br>
        <h1> Bienvenido/a <?php echo $nombre . " UID:" . $id ?> </h1>

        <br>

        Listado Modulos.<hr>
        <br>
        <a href="usuario">Modulo Usuario</a><br>
        <a href="asignatura">Modulo Asignatura</a><br>
        <a href="ciudad">Modulo Ciudad</a>



    </body>

</html>
