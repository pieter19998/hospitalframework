
    <h1>New patiënt</h1>
    <form action="<?= URL ?>patient/createSave" method="post">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="name">Species:</label>
            <?php

            echo '<select name="specie">';
            foreach($species as $select):


                echo '<option value="'.$select['specie'].'">'.$select['specie'].'</option>';


            endforeach;
            echo '</select>';
            ?>
        </div>
        <div>
            <label for="name">status:</label>
            <textarea id="status" name="status"></textarea>
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
