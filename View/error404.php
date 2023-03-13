<?php
    ob_start();
?>

<div class="row header-text">
    <h4>Page not found</h4>
    <div class="d-flex align-items-center justify-content-center">
        <h2 class="error">404</h2>
    </div>
</div>

<?php
    $pageContent = ob_get_clean();
    include 'View/Templates/layout.php';
?>