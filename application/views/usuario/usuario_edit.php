<form method="post" action="../update" >
    <?php foreach ($usuario as $row) { ?>
        <input type="text" hidden="true" name="usuario_id" value=<?php echo $row->usuario_id; ?>><br>
        Nombre:<input type="text" name="nombre" value=<?php echo $row->nombre; ?>><br>
        Apepat:<input type="text" name="apepat" value=<?php echo $row->apepat; ?>><br>
        Apemat:<input type="text" name="apemat" value=<?php echo $row->apemat; ?>><br>
        Ciudad:<select name="ciudad_id">
            <?php
            foreach ($ciudad as $ciudadlista) {
                echo '<option values="' . $ciudadlista->ciudad_id . '">' . $ciudadlista->nombre . '</option>';
            }
            ?>
        </select><br>
        User:<input type="text" name="user" value=<?php echo $row->user; ?>><br>
        Pass:<input type="password" name="pass" value=<?php echo $row->pass; ?>><br>
        Rol_id:<select name="rol_id">
        <?php
           foreach ($rol as $rollista) {
              if ($row->rol_id == $rollista->rol_id) {
                   echo '<option selected=selected values="' . $rollista->rol_id . '" >' . $rollista->tipo . '</option>';
              } else {
                   echo '<option values="' . $rollista->rol_id . '">' . $rollista->tipo . '</option>';
               }
            }
        ?>
        </select><br>

        <!-- USUARO DE FORM_HELPER form_dorpdown :D-->

        <!--
        $options = array();
        foreach ($rol as $object) {
            $options["{$object->rol_id}"] = $object->tipo;
        }
        echo form_dropdown('rol', $options, $row->rol_id);
        -->
       
        <!--  EJEMPLO CON USUARIO SELECCIONADO 
        
        
        $dd_list = array(
            '1' => 'Mr',
            '2' => 'Mrs',
            '3' => 'Miss',
        );

        $dd_name = "title";

        echo form_dropdown($dd_name, $dd_list, '3');
        
        
        -->



        <input type='submit' value='Editar'/>
<?php } ?>
</form>
