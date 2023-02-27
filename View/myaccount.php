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
                        <a id="showAddMoney" href="#">Add money</a>
                    </div>
                </div>
                <div class="col-lg-4 align-self-center">
                    <ul>
                        <li>Games Buyed <span><?php echo $gamesBuyed['COUNT(id)'];?></span></li>
                        <li>Games Whised <span><?php echo $gamesWished['COUNT(id)'];?></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Banner End ***** -->

<!-- ***** Gaming Library Start ***** -->
<div class="gaming-library profile-library">
    <div class="col-lg-12">
        <div class="heading-section">
            <h4>Library</h4>
        </div>
        <div class="item">
            <ul>
                <li><img src="assets/images/game-01.jpg" alt="" class="templatemo-item"></li>
                <li>
                    <h4>Dota 2</h4><span>Sandbox</span>
                </li>
                <li>
                    <h4>Date Added</h4><span>24/08/2036</span>
                </li>
                <li>
                    <h4>Hours Played</h4><span>634 H 22 Mins</span>
                </li>
                <li>
                    <h4>Currently</h4><span>Downloaded</span>
                </li>
                <li>
                    <div class="main-border-button border-no-active"><a href="#">Donwloaded</a></div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- ***** Gaming Library End ***** -->

<!-- ***** Modals ***** -->
<!-- ***** Add Money Modal ***** -->
<div class="modal" id="addMoneyModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" style="color:black;">Add money</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="addMoney" method="POST">
            <div class="modal-body">
                <div class="form-group">
                    <input class="form-control" type="number" min="0" name="money"/>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Add money</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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