
<h1>Edit client</h1>
<?php
foreach ($client as $test):
endforeach;
?>
<form method="post"action="<?= URL ?>client/editSave">


        <div>
            <input type="hidden" name="id" value="<?= $test['id']?>">
            <label for="name">fullname:</label>
            <input type="text" id="fullname" name="fullname" value="<?=$test['fullname']?>">
        </div>
    <div>
        <label for="name">lastname:</label>
        <input type="text" id="lastname" name="lastname" value="<?=$test['lastname']?>">
    </div>
        <div>
            <label for="name">adres:</label>
            <input type="text" id="adres" name="adres" value="<?=$test['adres']?>">
        </div>
        <div>
            <label for="name">email:</label>
            <input id="email" name="email" value="<?=$test['email']?>">
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
            <input type="date" id="checkin" name="checkin" value="<?=$test['checkin']?>">
        </div>
        <div>
            <label for="name">checkout:</label>
            <input type="date" id="checkout" name="checkout" value="<?=$test['checkout']?>">
        </div>
        <div>
            <label></label>
            <input type="submit" value="Save">
        </div>
    </form>
