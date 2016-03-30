<?=anchor(base_url().'index.php/login/log_out', 'Cerrar sesión')?>
<br>
<h1> Bienvenido/a <?php echo $nombre ." UID:" . $id . " ROL: " . $tipo ?> </h1> 
DETALLE CIUDAD
 <table>
    <thead>
    <th>ID</th>
    <th>NOMBRE</th>
  
    <th>ESTADO</th>
    
   
</thead>
<tbody>
    
    <?php foreach ($asignatura as $row) {  ?>
        <tr>
            <td><?php echo $row->asignatura_id; ?> </td>
            <td><?php echo $row->nombre; ?> </td>
            <td><?php echo $row->estado; ?> </td>
          
            
        </tr>
        
      
    <?php } ?>
     
</tbody>
</table>