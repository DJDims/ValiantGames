<?php
    ob_start();
    $title = '';
?>

<form class="col-4 header-text" action="editGame?<?php echo $game['id'];?>" method="POST">
    <div class="form-group">
        <input class="form-control" type="text" placeholder="Game title" name="gameTitle" value="<?php echo $game['title'];?>" required />
    </div>
    <div class="form-group">
        <input class="form-control" type="number" min="1980" max="2023" placeholder="Game year publish" name="gameYear" value="<?php echo $game['publishYear'];?>" required />
    </div>
    <div class="form-group">
        <input type="number" class="form-control" min="0" step="0.01" placeholder="Price" name="gamePrice" value="<?php echo $game['price'];?>" required>
    </div>
    <div class="form-group">
        <input class="form-control" type="text" placeholder="Poster" name="gamePoster" value="<?php echo $game['poster'];?>" />
    </div>
    <div class="form-group">
        <textarea class="form-control" placeholder="Description" name="gameDescription"><?php echo $game['description'];?></textarea>
    </div>
    <div class="form-group">
        <select class="form-control" name="company" required>
            <?php
                foreach ($companies as $k => $v) {
                    if ($v['id'] == $game['companyId']) {
                        echo '<option value='.$v['id'].' selected>'.$v['title'].'</option>';
                    } else {
                        echo '<option value='.$v['id'].'>'.$v['title'].'</option>';
                    }
                }
            ?>
        </select>
    </div>
    <div class="form-group">
        <select class="form-control" name="category" required>
            <?php
                foreach ($categories as $k => $v) {
                    if ($v['categoryId'] == $game['categoryId']) {
                        echo '<option value='.$v['categoryId'].' selected>'.$v['categoryTitle'].'</option>';
                    } else {
                        echo '<option value='.$v['categoryId'].'>'.$v['categoryTitle'].'</option>';
                    }
                }
            ?>
        </select>
    </div>
    <div class="form-group">
        <button type="sumbit" name="send" class="btn btn-custom">Edit Game</button>
    </div>
</form>

<?php
    $pageContent = ob_get_clean();
    include 'View/Templates/layout.php';
?>