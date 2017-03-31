<h1>clients</h1>
<p class="options"><a href="<?= URL ?>patient/create/">create</a></p>
<table>
    <thead>
    <tr>
        <th>name</th>
        <th>specie</th>
        <th>status</th>
        <th>gender</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    </tbody>
		
		<?php foreach ($patients as $patient) { ?>
		<tr>
            <td><?=$patient['name']?></td>
            <td><?=$patient['species']?></td>
            <td><?=$patient['status']?></td>
            <td><?=$patient['gender']?></td>
			<td><a href="<?= URL ?>patient/edit/<?= $patient['id'] ?>">Edit</a></td>
			<td><a href="<?= URL ?>patient/delete/<?= $patient['id'] ?>">Delete</a></td>
		</tr>
		<?php } ?>

    </tbody>
</table>
</div>