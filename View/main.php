<?php
ob_start();
$title = '';
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
<?php
    if(isset($_SESSION['userId'])) {
        echo '<div class="gaming-library">';
        echo '<div class="col-lg-12">';
        echo '<div class="heading-section">';
        echo '<h4>Your Wishlist</h4>';
        foreach ($wishList as $k => $v) {
            echo '<div class="item"><ul>';
            echo '<li><img src="'.$v['poster'].'" alt="" class="templatemo-item"></li>';
            echo '<li><h4>'.$v['title'].'</h4><span>'.$v['categoryTitle'].'</span></li>';
            echo '<li><h4>Date Added</h4><span>'.$v['created_at'].'</span></li>';
            echo '<li><h4>Price</h4><span>'.$v['price'].'<i class="fa fa-eur"></i></span></li>';
            echo '<li><a class="btn btn-success col-5" href="showBuyGame?'.$v['id'].'">Buy</a></li>';
            echo '</ul></div>';
        }
        echo '</div>';
        echo '</div>';
        echo '<div class="col-lg-12">';
        echo '<div class="main-button">';
        echo '<a href="profile.html">View Your Wishlist</a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
?>
<!-- ***** Gaming Library End ***** -->

<!-- ***** Most Popular Start ***** -->

<div id="most-popular" class="most-popular">
    <div class="row">
        <div class="col-lg-12">
            <div class="heading-section">
                <h4>Most Popular</h4>
            </div>
            <div class="row">
                <?php
                    foreach ($popGames as $k => $v) {
                        echo '<div class="col-lg-3 col-sm-6">';
                        echo '<div class="item">';
                        echo '<img src='.$v['poster'].' alt="">';
                        echo '<h4>'.$v['title'].'<br><span>'.$v['categoryTitle'].'</span></h4>';
                        echo '<ul>';
                        echo '<li>'.$v['price'].'<i class="fa fa-eur"></i></li>';
                        echo '<li><i class="fa fa-download"></i> 2.3M</li>';
                        echo '</ul>';
                        echo '</div>';
                        echo '</div>';
                    }
                ?>
                <div class="col-lg-12">
                    <div class="main-button">
                        <a href="browse.html">Discover Popular</a>
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