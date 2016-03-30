<?=anchor(base_url().'index.php/login/log_out', 'Cerrar sesión')?>
<br>
<h1> Bienvenido/a <?php echo $nombre ." UID:" . $id . " ROL: " . $tipo ?> </h1> 
<form method="post" action="../update" >
    <?php foreach ($ciudad as $row) { ?>
        <input type="text" hidden="true" name="ciudad_id" value="<?php echo $row->ciudad_id; ?>"><br>
        Nombre:<?php echo "<input type=text name=nombre value='".$row->nombre."' >" ?><br>
         
        <input type='submit' value='Editar'/>
        
        
<?php } ?>
</form>
