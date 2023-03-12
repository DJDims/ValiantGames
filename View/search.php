<?php
    ob_start();
?>

<div class="d-flex justify-content-between mb-3">
    <h2>Search by "<i><?php echo $_POST['searchKeyword']; ?></i>"</h2>
    <a href="showAdvancedSearch" class="btn btn-primary">Advanced search</a>
</div>
<table class="table table-hover header-text">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Game Title</th>
            <th scope="col">Publish Year</th>
            <th scope="col">Company</th>
            <th scope="col">Category</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($games as $k => $v) { ?>
        <tr class="table-active">
            <th scope="row"><p><?php echo ($k + 1); ?></p></th>
            <td><p><a href="showGameDetails?<?php echo $v['id']; ?>"><?php echo $v['title']; ?></a></p></th>
            <td><p><?php echo $v['publishYear']; ?></p></th>
            <td><p><a href="showCompanyDetails?<?php echo $v['companyId']; ?>"><?php echo $v['companyTitle']; ?></a></p></th>
            <td><p><a href="showCategoryDetails?<?php echo $v['categoryId']; ?>"><?php echo $v['categoryTitle']; ?></a></p></th>
        </tr>
    <?php } ?>
    </tbody>
</table>

<?php
    $pageContent = ob_get_clean();
    include 'View/Templates/layout.php';
?>