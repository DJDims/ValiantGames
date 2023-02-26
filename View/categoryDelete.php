<?php
    ob_start();
    $title = '';
?>

<form class="col-4" action="deleteCategory?<?php echo $category['categoryId']?>" method="POST">
    <div class="form-group">
        <input class="form-control" type="text" placeholder="Category title" name="categoryTitle" readonly value="<?php echo $category['categoryTitle']?>" />
    </div>
    <p>This category have <?php echo $countGames['COUNT(title)']?> links</p>
    <div class="form-group">
        <button type="sumbit" name="send" class="btn btn-custom">Delete Category</button>
    </div>
</form>

<?php
    $pageContent = ob_get_clean();
    include 'View/Templates/layout.php';
?>