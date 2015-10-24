<h1>Libros</h1>
<table class="table table-hover ">
	<thead>
		<tr>
			<td>Title</td>
			<td>Author</td>
			<td>Country</td>
			<td>Language</td>
			<td>Price</td>
			<td>Quantity</td>
		</tr>
	</thead>
 	<?php foreach ($lista as $value):?>
 	<tbody>
		<tr>
			<td><?= $value->Title ?></td>
			<td><?= $value->Author ?></td>
			<td><?= $value->Country ?></td>
			<td><?= $value->Language ?></td>
			<td><?= $value->Price ?></td>
			<td><?= $value->Quantity ?></td>
		</tr>
	</tbody>
	<?php endforeach ?>
</table>