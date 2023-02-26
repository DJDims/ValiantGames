<?php
	ob_start();
	$title = '';
?>

<a href="showAddCompany" class="btn btn-primary">Add new</a>
<table class="table table-hover header-text">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Company Title</th>
			<th scope="col" class="text-end">Edit</th>
			<th scope="col" class="text-end">Delete</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($companies as $k => $v) {
			echo '<tr class="table-active">';
			echo '<th scope="row"><p>' . ($k + 1) . '</p></th>';
			echo '<td><p>' . $v['title'] . '</p></th>';
			echo '<td class="text-end"><a href="showEditCompany?' . $v['id'] . '" class="btn btn-warning">Edit</td>';
			echo '<td class="text-end"><a href="showDeleteCompany?' . $v['id'] . '" class="btn btn-danger">Delete</td>';
			echo '</tr>';
		}
		?>
	</tbody>
</table>

<?php
	$pageContent = ob_get_clean();
	include 'View/Templates/layout.php';
?>