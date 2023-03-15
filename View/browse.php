<?php
ob_start();
?>

<div id="most-popular" class="most-popular header-text">
    <div class="row">
        <div class="col-lg-12">
            <div class="heading-section d-flex justify-content-between">
                <h4>All Games</h4>
                <div>
                    <a href="browseNewest" class="btn btn-primary">Newest</a>
                    <a href="browsePopular" class="btn btn-primary">Popular</a>
                </div>
            </div>
            <div class="row">
            <?php foreach ($games as $k => $v) { ?>
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
            </div>
        </div>
    </div>
</div>

<?php
$pageContent = ob_get_clean();
include 'View/Templates/layout.php';
?>