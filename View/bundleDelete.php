<?php
    ob_start();
    $title = '';
?>

<form class="col-4" action="deleteBundle?<?php echo $bundle['id']?>" method="POST">
    <div class="form-group">
        <input class="form-control" type="text" placeholder="Bundle title" readonly value="<?php echo $bundle['title']?>" />
    </div>
    <p>This category have <?php echo $countGames['COUNT(id)']?> links</p>
    <div class="form-group">
        <button type="sumbit" name="send" class="btn btn-custom">Delete Bundle</button>
    </div>
</form>

<?php
    $pageContent = ob_get_clean();
    include 'View/Templates/layout.php';
?>