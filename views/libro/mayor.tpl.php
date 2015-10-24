	<h1>Libros</h1>
<table class="table table-hover ">
	<thead>
		<tr>
			<td>Title</td>
		</tr>
	</thead>
 	<?php foreach ($lista as $value):?>
 	<tbody>
		<tr>
			<td><?= $value->Title ?></td>
		</tr>
	</tbody>
	<?php endforeach ?>
</table>