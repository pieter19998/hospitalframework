<h1>clients</h1>
<p class="options"><a href="<?= URL ?>client/create/">create</a></p>
<table>
    <thead>
    <tr>
        <th>fullname</th>
        <th>lastname</th>
        <th>adres</th>
        <th>email</th>
        <th>patient</th>
        <th>checkin</th>
        <th>checkout</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    </tbody>
		
		<?php foreach ($clients as $client) { ?>
		<tr>
            <td><?=$client['fullname']?></td>
            <td><?=$client['lastname']?></td>
            <td><?=$client['adres']?></td>
            <td><?=$client['email']?></td>
            <td><?=$client['patient']?></td>
            <td><?=$client['checkin']?></td>
            <td><?=$client['checkout']?></td>
			<td><a href="<?= URL ?>client/edit/<?= $client['id'] ?>">Edit</a></td>
			<td><a href="<?= URL ?>client/delete/<?= $client['id'] ?>">Delete</a></td>
		</tr>
		<?php } ?>

    </tbody>
</table>
</div>