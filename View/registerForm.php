<?php
    ob_start();
?>

<form class="login col-4" action="register" method="POST">
    <legend>Register</legend>
    <div class="form-group form-group-icon">
        <!-- <i class="fa fa-user"></i> -->
        <input class="form-control" type="text" placeholder="Username" name="username" />
    </div>
    <div class="form-group form-group-icon">
        <!-- <i class="fa fa-key"></i> -->
        <input class="form-control" type="password" placeholder="Password" name="password" />
    </div>
    <div class="form-group form-group-icon">
        <!-- <i class="fa fa-key"></i> -->
        <input class="form-control" type="password" placeholder="Confirm password" name="confirmPassword" />
    </div>
    <div class="form-group">
        <button type="sumbit" name="send" class="btn btn-custom">Login</button>
    </div>
</form>

<p>Have account? <a href="showLogin">Login here</a></p>

<?php
    $pageContent = ob_get_clean();
    include 'View/Templates/layout.php';
?>