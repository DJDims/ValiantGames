<?php
    ob_start();
?>

<form class="login col-4" action="login" method="POST">
    <legend>Login</legend>
    <div class="form-group form-group-icon">
        <!-- <i class="fa fa-user"></i> -->
        <input class="form-control" type="text" placeholder="Username" name="username" />
    </div>
    <div class="form-group form-group-icon">
        <!-- <i class="fa fa-key"></i> -->
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