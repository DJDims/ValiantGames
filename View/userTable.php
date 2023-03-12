<?php
    ob_start();
?>

<table class="table table-hover header-text">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Username</th>
			<th scope="col">Role</th>
		</tr>
	</thead>
	<tbody>
    <?php foreach ($users as $k => $v) { ?>
        <tr class="table-active">
        <th scope="row"><p><?php echo ($k + 1); ?></p></th>
        <td><p><?php echo $v['username']; ?></p></th>
        <td><p><?php echo $v['role']; ?></p></th>
        </tr>
    <?php } ?>
	</tbody>
</table>

<?php
    $pageContent = ob_get_clean();
    include 'View/Templates/layout.php';
?>