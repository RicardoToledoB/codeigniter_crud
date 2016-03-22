<form method="post" action="../update" >
    <?php foreach($usuario as $row) { ?>
    <input type="text" hidden="true" name="usuario_id" value=<?php echo $row->usuario_id; ?>><br>
    Nombre:<input type="text" name="nombre" value=<?php echo $row->nombre; ?>><br>
    Apepat:<input type="text" name="apepat" value=<?php echo $row->apepat; ?>><br>
    Apemat:<input type="text" name="apemat" value=<?php echo $row->apemat; ?>><br>
    <input type='submit' value='Editar'/>
    <?php } ?>
</form>
