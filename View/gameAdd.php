<?php
    ob_start();
?>

<form class="col-4 header-text" action="addGame" method="POST">
    <div class="form-group">
        <input class="form-control" type="text" placeholder="Game title" name="gameTitle" required />
    </div>
    <div class="form-group">
        <input class="form-control" type="number" min="1980" max="2023" placeholder="Game year publish" name="gameYear" required />
    </div>
    <div class="form-group">
        <input type="number" class="form-control" min="0" step="0.01" placeholder="Price" name="gamePrice" required>
    </div>
    <div class="form-group">
        <input class="form-control" type="text" placeholder="Poster" name="gamePoster" />
    </div>
    <div class="form-group">
        <select class="form-control" name="company" required>
        <?php foreach ($companies as $k => $v) { ?>
            <option value="<?php echo $v['companyId']; ?>"><?php echo $v['companyTitle']; ?></option>
        <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <select class="form-control" name="category" required>
        <?php foreach ($categories as $k => $v) { ?>
            <option value="<?php echo $v['categoryId']; ?>"><?php echo $v['categoryTitle']; ?></option>
        <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <button type="sumbit" name="send" class="btn btn-custom">Add Game</button>
    </div>
</form>

<?php
    $pageContent = ob_get_clean();
    include 'View/Templates/layout.php';
?>