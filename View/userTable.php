<?php
    ob_start();
    $title = '';
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
		<?php
            foreach ($users as $k => $v) {
                echo '<tr class="table-active">';
                echo '<th scope="row"><p>'.($k + 1).'</p></th>';
                echo '<td><p>'.$v['username'].'</p></th>';
                echo '<td><p>'.$v['role'].'</p></th>';
                echo '</tr>';
            }
		?>
	</tbody>
</table>

<?php
    $pageContent = ob_get_clean();
    include 'View/Templates/layout.php';
?>