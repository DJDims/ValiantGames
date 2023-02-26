<?php
    ob_start();
    $title = '';
?>

<div class="row header-text">
    <h4>Page not found</h4>
    <div style="text-align: center;">
        <img src="../Images/404error.png" style="width: 45%;" alt="">
    </div>
</div>

<?php
    $pageContent = ob_get_clean();
    include 'View/Templates/layout.php';
?>