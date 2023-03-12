<?php
    ob_start();
?>

<h2><?php echo $category['categoryTitle']; ?></h2>
<table class="table table-hover header-text">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Game Title</th>
            <th scope="col">Publish Year</th>
            <th scope="col">Company</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($games as $k => $v) { ?>
        <tr class="table-active">
            <th scope="row"><p><?php echo ($k + 1); ?></p></th>
            <td><p><a href="showGameDetails?<?php echo $v['id']; ?>"><?php echo $v['title']; ?></a></p></th>
            <td><p><?php echo $v['publishYear']; ?></p></th>
            <td><p><a href="showCompanyDetails?<?php echo $v['companyId']; ?>"><?php echo $v['companyTitle']; ?></a></p></th>
        </tr>
    <?php } ?>
    </tbody>
</table>

<?php
    $pageContent = ob_get_clean();
    include 'View/Templates/layout.php';
?>