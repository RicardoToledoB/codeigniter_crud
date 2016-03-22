
DETALLE USUARIO
 <table>
    <thead>
    <th>ID</th>
    <th>NOMBRE</th>
    <th>APEPAT</th>
    <th>APEMAT</th>
   
</thead>
<tbody>
    
    <?php foreach ($usuario as $row) {  ?>
        <tr>
            <td><?php echo $row->usuario_id; ?> </td>
            <td><?php echo $row->nombre; ?> </td>
            <td><?php echo $row->apepat; ?> </td>
            <td><?php echo $row->apemat; ?> </td>
            
        </tr>
        
      
    <?php } ?>
     
</tbody>
</table>


