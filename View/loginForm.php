<?php
    ob_start();
?>

<script src="../Public/js/alert.js"></script>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>

<!-- Alert -->
<?php if(isset($_SESSION['alert'])) { ?>
<div class="alert <?php echo $_SESSION['alert']['type']; ?> alert-dismissible fade show">
	<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label=""><use xlink:href="<?php echo $_SESSION['alert']['icon']; ?>"/></svg>
	<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
	<strong><?php echo $_SESSION['alert']['message']; ?></strong>
</div>
<?php } ?>
<?php unset($_SESSION['alert']);?>
<!-- Alert -->

<form class="login col-4" action="login" method="POST">
    <legend>Login</legend>
    <div class="form-group form-group-icon">
        <input class="form-control" type="text" placeholder="Username" name="username" />
    </div>
    <div class="form-group form-group-icon">
        <input class="form-control" type="password" placeholder="Password" name="password" />
    </div>
    <div class="form-group">
        <button type="sumbit" class="btn btn-custom" name="send">Login</button>
    </div>
</form>

<p>Don't have account yet? <a href="showRegister">Register here</a></p>

<?php
    $pageContent = ob_get_clean();
    include 'View/Templates/layout.php';
?>