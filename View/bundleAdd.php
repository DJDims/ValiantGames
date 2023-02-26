<?php
    ob_start();
    $title = '';
?>

<form class="col-4" action="addBundle" method="POST" id="bundleForm">
    <div class="form-group">
        <input class="form-control" type="text" placeholder="Bundle title" name="bundleTitle" required />
    </div>
    <div class="form-group">
        <input class="form-control" type="number" min="0" step="0.01" placeholder="Bundle price" name="bundlePrice" required />
    </div>
    <div class="form-group d-flex flex-row">
        <div class="d-flex flex-column col-6">
            <select class="form-control" style="height: 100px;" id="gamesBase" multiple>
                <?php
                    foreach ($games as $k => $v) {
                        echo '<option value="'.$v['id'].'">'.$v['title'].'</option>';
                    }
                ?>
            </select>
		    <button type="button" class="btn btn-primary mx-2 mt-2" onclick="addGamesToBundle()">Add--&#62</button>
        </div>
        <div class="d-flex flex-column col-6 mx-1">
            <select class="form-control" style="height: 100px;" id="gamesThis" name='bundleGames[]' multiple>
            </select>
		    <button type="button" class="btn btn-danger mx-2 mt-2" onclick="removeGamesFromBundle()">&#60--Remove</button>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" name="send" class="btn btn-custom" onclick="smbtForm()">Add Bundle</button>
    </div>
</form>

<script src="../Public/js/script.js"></script>

<?php
    $pageContent = ob_get_clean();
    include 'View/Templates/layout.php';
?>