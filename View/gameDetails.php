<?php
ob_start();
?>

<!-- ***** Details Start ***** -->
<div class="game-details header-text">
    <div class="row">
        <div class="col-lg-12">
            <h2><?php echo $game['title'] ?></h2>
        </div>
        <div class="col-lg-12">
            <div class="content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="left-info">
                            <img src="<?php echo $game['poster'] ?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-info">
                            <p>Price: <?php echo $game['price'] ?>€</p>
                            <p>Category: <?php echo $game['categoryTitle'] ?></p>
                            <p>Developer: <?php echo $game['companyTitle'] ?></p>
                            <p>Description:<br/><i><?php echo $game['description'] ?></i></p>
                        </div>
                    </div>
                </div>
                <div>
                    <?php if(isset($_SESSION['userId'])) { ?>
                        <?php if($userStatus == NULL) { ?>
                            <a class="btn btn-success" href="buyGame?<?php echo $game['id'] ?>">Buy game</a>
                            <a class="btn btn-primary" href="wishGame?<?php echo $game['id'] ?>">Wish game</a>
                        <?php } elseif($userStatus['status'] == 'WISHED') { ?>
                            <a class="btn btn-success" href="buyGame?<?php echo $game['id'] ?>">Buy game</a>
                            <a class="btn btn-primary" href="unwishGame?<?php echo $game['id'] ?>">Unwish game</a>
                        <?php } else { ?>
                            <p>Игра уже куплена</p>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Details End ***** -->

<?php
$pageContent = ob_get_clean();
include 'View/Templates/layout.php';
?>