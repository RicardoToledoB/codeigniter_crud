<?=anchor(base_url().'index.php/login/log_out', 'Cerrar sesión')?>
<br>
<h1> Bienvenido/a <?php echo $nombre ." UID:" . $id ?> </h1>
<form method="post" action="add">
    Nombre:<input type="text" name="nombre"/><br>
    <input type="submit" value="guardar"/>
</form>