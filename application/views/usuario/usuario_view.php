
DETALLE USUARIO
 <table>
    <thead>
    <th>ID</th>
    <th>NOMBRE</th>
    <th>APEPAT</th>
    <th>APEMAT</th>
    <th>CIUDAD</th>
    <th>USER</th>
    <th>ESTADO</th>
    <th>ROL</th>
   
</thead>
<tbody>
    
    <?php foreach ($usuario as $row) {  ?>
        <tr>
            <td><?php echo $row->usuario_id; ?> </td>
            <td><?php echo $row->nombre; ?> </td>
            <td><?php echo $row->apepat; ?> </td>
            <td><?php echo $row->apemat; ?> </td>
            <td><?php echo $row->ciudad; ?> </td>
            <td><?php echo $row->user; ?> </td>
            <td><?php echo $row->estado; ?> </td>
            <td><?php echo $row->tipo; ?> </td>
            
        </tr>
        
      
    <?php } ?>
     
</tbody>
</table>


