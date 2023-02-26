<?php
    ob_start();
    $title = '';
?>

<form class="login col-4" action="login" method="POST">
    <legend>Login</legend>
    <div class="form-group form-group-icon">
        <!-- <i class="fa fa-user"></i> -->
        <input class="form-control" type="text" placeholder="Username" id='username' name="username" />
    </div>
    <div class="form-group form-group-icon">
        <!-- <i class="fa fa-key"></i> -->
        <input class="form-control" type="password" placeholder="Password" id='password' name="password" />
    </div>
    <div class="form-group">
        <button type="sumbit" class="btn btn-custom">Login</button>
    </div>
</form>

<?php
    $pageContent = ob_get_clean();
    include 'View/Templates/layout.php';
?>