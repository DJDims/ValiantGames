<?php
    ob_start();
    $title = '';
?>

<form class="col-4" action="deleteGame?<?php echo $game['id']?>" method="POST">
    <div class="form-group">
        <input class="form-control" type="text" placeholder="Game title" readonly value="<?php echo $game['title']?>" />
    </div>
    <div class="form-group">
        <input class="form-control" type="text" placeholder="Game company" readonly value="<?php echo $company['companyTitle']?>" />
    </div>
    <div class="form-group">
        <input class="form-control" type="text" placeholder="Game category" readonly value="<?php echo $category['categoryTitle']?>" />
    </div>
    <p>This game have in <?php echo $countBundles['COUNT(id)'];?> bundles</p>
    <div class="form-group">
        <button type="sumbit" name="send" class="btn btn-custom">Delete Game</button>
    </div>
</form>

<?php
    $pageContent = ob_get_clean();
    include 'View/Templates/layout.php';
?>