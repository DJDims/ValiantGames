<?php
    ob_start();
    $title = '';
?>

<a href="showAddBundle" class="btn btn-primary">Add new</a>
<table class="table table-hover header-text">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Bundle Title</th>
            <th scope="col" class="text-end">Edit</th>
            <th scope="col" class="text-end">Delete</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($bundles as $k => $v) { ?>
        <tr class="table-active">
            <th scope="row"><p><?php echo ($k + 1) ?></p></th>
            <td><p><?php echo $v['title']; ?></p></th>
            <td class="text-end"><a href="showEditBundle?<?php echo $v['id']; ?>" class="btn btn-warning">Edit</td>
            <td class="text-end"><a href="showDeleteBundle?<?php echo $v['id']; ?>" class="btn btn-danger">Delete</td>
        </tr>';
    <?php } ?>
    </tbody>
</table>

<?php
    $pageContent = ob_get_clean();
    include 'View/Templates/layout.php';
?>