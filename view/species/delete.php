
    <h1>Delete client</h1>
    <p>Are you sure you want to delete:</p>
    <form method="post">
        <div>
            <input type="hidden" name="id" value="<?=$client['id']?>">
            <label for="name">fullname:</label>
            <span><?=$client['fullname']?></span>
        </div>
        <div>
            <label for="name">patient:</label>
            <span><?=$client['patient']?></span>
        </div>
        <div>
            <label></label>
            <input type="submit" name="confirmed" value="Yes">
            <input type="submit" name="canceled" value="No">
        </div>
    </form>