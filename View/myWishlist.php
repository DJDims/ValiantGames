<?php
    ob_start();
?>

<table class="table table-hover header-text">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Game Title</th>
            <th scope="col">Publish Year</th>
            <th scope="col">Category</th>
            <th scope="col">Company</th>
            <th scope="col">Price</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($games as $k => $v) { ?>
        <tr class="table-active">
            <th scope="row"><p><?php echo ($k + 1); ?></p></th>
            <td><p><a href="showGameDetails?<?php echo $v['id']; ?>"><?php echo $v['title']; ?></a></p></td>
            <td><p><?php echo $v['publishYear']; ?></p></td>
            <td><p><a href="showCategoryDetails?<?php echo $v['categoryId']; ?>"><?php echo $v['categoryTitle']; ?></a></p></td>
            <td><p><a href="showCompanyDetails?<?php echo $v['companyId']; ?>"><?php echo $v['companyTitle']; ?></a></p></td>
            <td><p><?php echo $v['price']; ?><i class="fa fa-eur"></i></p><a href="buyGame?<?php echo $v['id']; ?>" class="btn btn-success">Buy</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<?php
    $pageContent = ob_get_clean();
    include 'View/Templates/layout.php';
?>