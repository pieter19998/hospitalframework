<div class="container">
	<form action="<?= URL ?>client/createSave" method="post">
        <div>
            <label for="name">fullname:</label>
            <input type="text" id="fullname" name="fullname" value="">
        </div>
        <div>
            <label for="name">lastname:</label>
            <input type="text" id="lastname" name="lastname">
        </div>
        <div>
            <label for="name">adres:</label>
            <input type="text" id="adres" name="adres">
        </div>
        <div>
            <label for="name">email:</label>
            <input type="text" id="email" name="email">
        </div>
        <div>
            <label for="name">patient:</label>
            <?php
            echo '<select name="patient">';
            foreach($patients as $patient):


                echo '<option value="'.$patient['name'].'">'.$patient['name'].'</option>';


            endforeach;
            echo '</select>';
            ?>
        </div>
        <div>
            <label for="name">checkin:</label>
            <input type="date" id="checkin" name="checkin">
        </div>
        <div>
            <label for="name">checkout:</label>
            <input type="date" id="checkout" name="checkout">
        </div>
        <div>
            <label></label>
		<input type="submit" value="Verzenden">
	
	</form>

</div>