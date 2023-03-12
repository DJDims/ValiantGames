<?php
    ob_start();
?>

<form class="col-4" action="editCategory?<?php echo $category['categoryId'];?>" method="POST">
    <div class="form-group">
        <input class="form-control" type="text" placeholder="Category title" name="categoryTitle" value="<?php echo $category["categoryTitle"]; ?>" required />
    </div>
    <div class="form-group">
        <button type="sumbit" name="send" class="btn btn-custom">Edit Category</button>
    </div>
</form>

<?php
    $pageContent = ob_get_clean();
    include 'View/Templates/layout.php';
?>