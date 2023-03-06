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
	<?php foreach ($companies as $k => $v) { ?>
		<tr class="table-active">
			<th scope="row"><p><?php echo ($k + 1); ?></p></th>
			<td><p><?php echo $v['companyTitle']; ?></p></th>
			<td class="text-end"><a href="showEditCompany?<?php echo $v['companyId']; ?>" class="btn btn-warning">Edit</td>
			<td class="text-end"><a href="showDeleteCompany?<?php echo $v['companyId']; ?>" class="btn btn-danger">Delete</td>
		</tr>
	<?php } ?>
	</tbody>
</table>

<?php
	$pageContent = ob_get_clean();
	include 'View/Templates/layout.php';
?>