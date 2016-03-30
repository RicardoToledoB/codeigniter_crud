<?=anchor(base_url().'index.php/login/log_out', 'Cerrar sesión')?>
<br>
<h1> Bienvenido/a <?php echo $nombre ." UID:" . $id . " ROL: " . $tipo ?> </h1> 

<form method="post" action="add">
    Nombre:<input type="text" name="nombre"/><br>
    Apepat:<input type="text" name="apepat"/><br>
    Apemat:<input type="text" name="apemat"/><br>
    Ciudad:<select name="ciudad_id">
        <?php
        foreach ($ciudad as $ciudadlista) {
            echo '<option value="' . $ciudadlista->ciudad_id . '">' . $ciudadlista->nombre . '</option>';
        }
        ?>
    </select><br>
    User:<input type="text" name="user"/><br>
    Pass:<input type="password" name="pass"/><br>
    Rol_id:<select name="rol_id">
        <?php
        foreach ($rol as $rollista) {
            echo '<option value="' . $rollista->rol_id . '">' . $rollista->tipo . '</option>';
        }
        ?>
    </select><br>
    <input type="submit" value="guardar"/>
</form>
