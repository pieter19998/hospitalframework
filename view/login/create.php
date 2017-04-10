<div class="container">
	<form action="<?= URL ?>login/CreateLogin" method="post">
        <div>
            <label for="name">name:</label>
            <input type="text" id="name" name="name" value="" placeholder="name">
        </div>
        <div>
            <label for="name">lastname:</label>
            <input type="text" id="lastname" name="lastname" placeholder="lastname">
        </div>
        <div>
            <label for="name">username</label>
            <input type="text" id="username" name="username" placeholder="username">
        </div>
        <div>
            <label for="name">password:</label>
            <input type="text" id="password" name="password" placeholder="password" minlength="6">
        </div>
        <div>
            <label for="name">email:</label>
            <input type="text" id="email" name="email" placeholder="email">
        </div>
            <label></label>
		<input type="submit" value="Verzenden">
	
	</form>

</div>