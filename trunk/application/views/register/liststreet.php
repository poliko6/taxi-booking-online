	 <select name="ddl_street">
   <!-- <?php foreach($streets as $street) : ?>
       <option value="<?php echo $street->id; ?>"><?php echo $street->name; ?></option>
   <?php endforeach; ?>-->
   <?php
   
   		foreach($streets as $street)
   		echo '<option value='.$street['id'].'>'.$street['name'].'</option>';    
   
   
    ?>
</select>
