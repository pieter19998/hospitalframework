<h1>clients</h1>
<p class="options"><a href="<?= URL ?>species/create/">create</a></p>
<table>
    <thead>
    <tr>
        <th>specie</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    </tbody>
		
		<?php foreach ($species as $specie) { ?>
		<tr>
            <td><?=$specie['specie']?></td>
			<td><a href="<?= URL ?>species/edit/<?= $specie['id'] ?>">Edit</a></td>
			<td><a href="<?= URL ?>species/delete/<?= $specie['id'] ?>">Delete</a></td>
		</tr>
		<?php } ?>

    </tbody>
</table>
</div>