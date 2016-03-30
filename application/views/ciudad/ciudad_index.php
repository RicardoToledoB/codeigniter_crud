<?=anchor(base_url().'index.php/login/log_out', 'Cerrar sesión')?>
<br>
<h1> Bienvenido/a <?php echo $nombre ." UID:" . $id . " ROL: " . $tipo ?> </h1> 
<a href="ciudad/nuevo">Nuevo</a>
<br>
<table>
    <thead>
    <th>ID</th>
    <th>NOMBRE</th>
    <th>ACCIONES</th>
</thead>
<tbody>
    
    <?php foreach ($ciudad as $row) {  ?>
        <tr>
            <td><?php echo $row->ciudad_id; ?> </td>
            <td><?php echo $row->nombre; ?> </td>
           
            <td><a href="<?php echo 'ciudad/delete/' . $row->ciudad_id; ?>">del</a>
                <a href="<?php echo 'ciudad/view/' . $row->ciudad_id; ?>">view</a>
                <a href="<?php echo 'ciudad/edit/' . $row->ciudad_id; ?>">edit</a>
            </td>
            
        </tr>
        
      
    <?php } ?>
     
</tbody>
</table>