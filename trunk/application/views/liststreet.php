<select name="ddl_Street">
   <?php foreach($streets as $street)
   echo '<option value='.$street['id'].'>'.$street['name'].'</option>';
    ?>
</select>
