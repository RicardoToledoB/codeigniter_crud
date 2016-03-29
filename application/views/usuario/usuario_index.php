<?=anchor(base_url().'index.php/login/log_out', 'Cerrar sesión')?>
<br>
<h1> Bienvenido/a <?php echo $nombre ." UID:" . $id ?> </h1>

<a href="usuario/nuevo">Nuevo</a>
<br>
<table>
    <thead>
    <th>ID</th>
    <th>NOMBRE</th>
    <th>APEPAT</th>
    <th>APEMAT</th>
    <th>ACCIONES</th>
</thead>
<tbody>
    
    <?php foreach ($usuario as $row) {  ?>
        <tr>
            <td><?php echo $row->usuario_id; ?> </td>
            <td><?php echo $row->nombre; ?> </td>
            <td><?php echo $row->apepat; ?> </td>
            <td><?php echo $row->apemat; ?> </td>
            <td><a href="<?php echo 'usuario/delete/' . $row->usuario_id; ?>">del</a>
                <a href="<?php echo 'usuario/view/' . $row->usuario_id; ?>">view</a>
                <a href="<?php echo 'usuario/edit/' . $row->usuario_id; ?>">edit</a>
            </td>
            
        </tr>
        
      
    <?php } ?>
     
</tbody>
</table>
