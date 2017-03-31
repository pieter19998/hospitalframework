
    <h1>Edit patiënt</h1>
    <?php
    foreach ($patients as $patient):
    endforeach;
    ?>
    <form action="<?= URL ?>patient/editSave" method="post">
        <div>
            <input type="hidden" name="id" value="<?=$patient['id']?>">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?=$patient['name']?>">
        </div>
        <div>
            <label for="name">Species:</label>
            <?php

            echo '<select name="specie">';
            foreach($species as $specie):


                echo '<option value="'.$specie['specie'].'">'.$specie['specie'].'</option>';


            endforeach;
            echo '</select>';
            ?>
        </div>
        <div>
            <label for="name">Species:</label>
            <textarea id="status" name="status"><?=$patient['status']?></textarea>
        </div>
        <div>
            <input type="radio" name="gender" id="gender" value="male">male
            <input type="radio" name="gender" id="gender" value="female">female
            <input type="radio" name="gender" id="gender" value="unknown">unknown
        </div>
        <div>
            <label></label>
            <input type="submit" value="Save">
        </div>
    </form>
