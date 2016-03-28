<a href="asignatura/nuevo">Nuevo</a>
<br>
<table>
    <thead>
    <th>ID</th>
    <th>NOMBRE</th>
    <th>ACCIONES</th>
</thead>
<tbody>
    
    <?php foreach ($asignatura as $row) {  ?>
        <tr>
            <td><?php echo $row->asignatura_id; ?> </td>
            <td><?php echo $row->nombre; ?> </td>
           
            <td><a href="<?php echo 'asignatura/delete/' . $row->asignatura_id; ?>">del</a>
                <a href="<?php echo 'asignatura/view/' . $row->asignatura_id; ?>">view</a>
                <a href="<?php echo 'asignatura/edit/' . $row->asignatura_id; ?>">edit</a>
            </td>
            
        </tr>
        
      
    <?php } ?>
     
</tbody>
</table>