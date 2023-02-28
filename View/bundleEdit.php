<?php
    ob_start();
    $title = '';
?>

<form class="col-4" action="editBundle?<?php echo $bundle['id'];?>" method="POST" id="bundleForm">
    <div class="form-group">
        <input class="form-control" type="text" placeholder="Bundle title" name="bundleTitle" value="<?php echo $bundle['title']; ?>" required />
    </div>
    <div class="form-group">
        <input class="form-control" type="number" min="0" step="0.01" placeholder="Bundle price" name="bundlePrice" value="<?php echo $bundle['price']; ?>" required />
    </div>
    <div class="form-group d-flex flex-row">
        <div class="d-flex flex-column col-6">
            <select class="form-control" style="height: 100px;" id="gamesBase" multiple>
                <?php foreach ($games[1] as $k => $v) { ?>
                    <option value="<?php echo $v['id']; ?>"><?php echo $v['title'] ?></option>
                <?php } ?>
            </select>
		    <button type="button" class="btn btn-primary mx-2 mt-2" onclick="addGamesToBundle()">Add--&#62</button>
        </div>
        <div class="d-flex flex-column col-6 mx-1">
            <select class="form-control" style="height: 100px;" id="gamesThis" name='bundleGames[]' multiple>
                <?php foreach ($games[0] as $k => $v) { ?>
                    <option value="<?php echo $v['id']; ?>"><?php echo $v['title'] ?></option>
                <?php } ?>
            </select>
		    <button type="button" class="btn btn-danger mx-2 mt-2" onclick="removeGamesFromBundle()">&#60--Remove</button>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" name="send" class="btn btn-custom" onclick="smbtForm()">Edit Bundle</button>
    </div>
</form>

<script src="../Public/js/script.js"></script>

<?php
    $pageContent = ob_get_clean();
    include 'View/Templates/layout.php';
?>