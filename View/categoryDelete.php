<?php
    ob_start();
    $title = '';
?>



<?php
    $pageContent = ob_get_clean();
    include 'View/Templates/layout.php';
?>