<?php
ob_start();
$title = '';
?>

<!-- ***** Banner Start ***** -->
<div class="row">
    <div class="col-lg-12">
        <div class="main-profile ">
            <div class="row">
                <div class="col-lg-4">
                    <img src="<?php echo $_SESSION['avatar']?>" alt="" style="border-radius: 23px;">
                </div>
                <div class="col-lg-4 align-self-center">
                    <div class="main-info header-text">
                        <span style="background-color: lime;">Online</span>
                        <h4><?php echo $userData['username']?></h4>
                        <p>My wallet: <?php echo $userData['wallet']; ?>€</p>
                        <a id="showAddMoney" href="#" data-bs-toggle="modal" data-bs-target="#addMoneyModal">Add money</a>
                    </div>
                </div>
                <div class="col-lg-4 align-self-center">
                    <ul>
                        <li>Games Buyed <span><?php echo $countGamesBuyed['COUNT(id)'];?></span></li>
                        <li>Games Whised <span><?php echo $countGamesWished['COUNT(id)'];?></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Banner End ***** -->

<!-- ***** Gaming Library Start ***** -->
<div class="gaming-library">
    <div class="col-lg-12">
        <div class="heading-section">
        <h4>Your Library</h4>
        <?php foreach ($gamesBuyed as $k => $v) { ?>
            <div class="item">
                <ul>
                    <li><img src="<?php echo $v['poster']; ?>" alt="" class="templatemo-item"></li>
                    <li><h4><?php echo $v['title']; ?></h4><span><?php echo $v['categoryTitle']; ?></span></li>
                    <li><h4>Date Buyed</h4><span><?php echo $v['created_at']; ?></span></li>
                </ul>
            </div>
        <?php } ?>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="main-button">
            <a href="profile.html">View Your Library</a>
        </div>
    </div>
</div>
<!-- ***** Gaming Library End ***** -->
<!-- ***** Wishlist Start ***** -->
<div class="gaming-library">
    <div class="col-lg-12">
        <div class="heading-section">
        <h4>Your Wishlist</h4>
        <?php foreach ($gamesWished as $k => $v) { ?>
            <div class="item">
                <ul>
                    <li><img src="<?php echo $v['poster']; ?>" alt="" class="templatemo-item"></li>
                    <li><h4><?php echo $v['title']; ?></h4><span><?php echo $v['categoryTitle']; ?></span></li>
                    <li><h4>Date Whised</h4><span><?php echo $v['created_at']; ?></span></li>
                </ul>
            </div>
        <?php } ?>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="main-button">
            <a href="profile.html">View Your Wishlist</a>
        </div>
    </div>
</div>
<!-- ***** Wishlist End ***** -->

<!-- ***** Modals ***** -->
<!-- ***** Add Money Modal ***** -->
<div class="modal" id="addMoneyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add money</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="addMoney" method="POST">
            <div class="modal-body">
                <div class="form-group">
                    <input class="form-control" type="number" min="0" value="0" name="money"/>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="send">Add money</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- ***** Add Money Modal ***** -->


<script src="../Public/js/account.js"></script>

<?php
$pageContent = ob_get_clean();
include 'View/Templates/layout.php';
?>