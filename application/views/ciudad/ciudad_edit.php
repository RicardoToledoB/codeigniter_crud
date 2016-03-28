<form method="post" action="../update" >
    <?php foreach ($ciudad as $row) { ?>
        <input type="text" hidden="true" name="ciudad_id" value=<?php echo $row->ciudad_id; ?>><br>
        Nombre:<input type="text" name="nombre" value=<?php echo $row->nombre; ?>><br>
        Apepat:<input type="text" name="estado" value=<?php echo $row->estado; ?>><br>
  
        <input type='submit' value='Editar'/>
<?php } ?>
</form>
