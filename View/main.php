<?php
ob_start();
?>


<!-- ***** Banner Start ***** -->
<div class="main-banner">
    <div class="row">
        <div class="col-lg-7">
            <div class="header-text">
            <h6>Welcome To Valliant games</h6>
            <h4><em>Buy</em> Popular Games Here</h4>
                <div class="main-button">
                    <a href="#most-popular">Browse Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Banner End ***** -->

<!-- ***** Gaming Library Start ***** -->
<?php if(isset($_SESSION['userId'])) { ?>
<div class="gaming-library">
    <div class="col-lg-12">
        <div class="heading-section">
            <h4>Your Wishlist</h4>
            <?php foreach ($wishList as $k => $v) { ?>
                <div class="item">
                    <ul>
                        <li><img src="<?php echo $v['poster']; ?>" alt="" class="templatemo-item"></li>
                        <li><h4><?php echo $v['title']; ?></h4><span><?php echo $v['categoryTitle']; ?></span></li>
                        <li><h4>Date Added</h4><span><?php echo $v['created_at']; ?></span></li>
                        <li><h4>Price</h4><span><?php echo $v['price']; ?><i class="fa fa-eur"></i></span></li>
                        <li><a class="btn btn-success col-5" href="buyGame?<?php echo $v['id']; ?>">Buy</a></li>
                    </ul>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="main-button">
            <a href="showWishlist">View Your Wishlist</a>
        </div>
    </div>
</div>
<?php } ?>
<!-- ***** Gaming Library End ***** -->

<!-- ***** Newest Start ***** -->
<div id="most-popular" class="most-popular">
    <div class="row">
        <div class="col-lg-12">
            <div class="heading-section">
                <h4>Newest Games</h4>
            </div>
            <div class="row">
            <?php foreach ($newGames as $k => $v) { ?>
                <div class="col-lg-3 col-sm-6">
                    <a href="showGameDetails?<?php echo $v['id']; ?>">
                        <div class="item">
                            <img src="<?php echo $v['poster']; ?>" alt="" />
                                <h4 style="width: 70%"><?php echo $v['title']; ?><br><span><?php echo $v['categoryTitle']; ?></span></h4>
                            <ul>
                                <li><?php echo $v['price']; ?><i class="fa fa-eur"></i></li>
                            </ul>
                        </div>
                    </a>
                </div>
            <?php } ?>
                <div class="col-lg-12">
                    <div class="main-button">
                        <a href="browse">Discover Popular</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Newest End ***** -->

<!-- ***** Most Popular Start ***** -->
<div id="most-popular" class="most-popular">
    <div class="row">
        <div class="col-lg-12">
            <div class="heading-section">
                <h4>Most Popular</h4>
            </div>
            <div class="row">
            <?php foreach ($popGames as $k => $v) { ?>
                <div class="col-lg-3 col-sm-6">
                    <a href="showDetails?<?php echo $v['id']; ?>">
                        <div class="item">
                            <img src="<?php echo $v['poster']; ?>" alt="" />
                            <h4 style="width: 70%"><?php echo $v['title']; ?><br><span><?php echo $v['categoryTitle']; ?></span></h4>
                            <ul>
                                <li><?php echo $v['price']; ?><i class="fa fa-eur"></i></li>
                            </ul>
                        </div>
                    </a>
                </div>
            <?php } ?>
                <div class="col-lg-12">
                    <div class="main-button">
                        <a href="browse">Discover Popular</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Most Popular End ***** -->

<?php
$pageContent = ob_get_clean();
include 'View/Templates/layout.php';
?>