<?=anchor(base_url().'index.php/login/log_out', 'Cerrar sesión')?>
<br>
<h1> Bienvenido/a <?php echo $nombre ." UID:" . $id . " ROL: " . $tipo ?> </h1> 
<form method="post" action="../update" >
    <?php foreach ($asignatura as $row) { ?>
        <input type="text" hidden="true" name="asignatura_id" value=<?php echo $row->asignatura_id; ?>><br>
        Nombre:<input type="text" name="nombre" value=<?php echo $row->nombre; ?>><br>
        Apepat:<input type="text" name="estado" value=<?php echo $row->estado; ?>><br>
  
        <input type='submit' value='Editar'/>
<?php } ?>
</form>
