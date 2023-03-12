<?php
    ob_start();
?>

<form class="col-4" action="deleteCompany?<?php echo $company['companyId']?>" method="POST">
    <div class="form-group">
        <input class="form-control" type="text" placeholder="Company title" readonly value="<?php echo $company['companyTitle']?>" />
    </div>
    <p>This company have <?php echo $countGames['COUNT(id)']?> links</p>
    <div class="form-group">
        <button type="sumbit" name="send" class="btn btn-custom">Delete Company</button>
    </div>
</form>

<?php
    $pageContent = ob_get_clean();
    include 'View/Templates/layout.php';
?>