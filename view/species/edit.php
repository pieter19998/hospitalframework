
<h1>Edit client</h1>
<?php
foreach ($species as $test):
endforeach;
?>
<form method="post"action="<?= URL ?>species/editSave">


        <div>
            <input type="hidden" name="id" value="<?= $test['id']?>">
            <label for="name">species:</label>
            <input type="text" id="specie" name="specie" value="<?=$test['specie']?>">
        </div>
        <div>
            <label></label>
            <input type="submit" value="Save">
        </div>
    </form>
