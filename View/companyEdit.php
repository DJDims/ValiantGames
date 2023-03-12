<?php
    ob_start();
?>

<form class="col-4" action="editCompany?<?php echo $company['companyId'];?>" method="POST">
    <div class="form-group">
        <input class="form-control" type="text" placeholder="Company title" name="companyTitle" value="<?php echo $company["companyTitle"]; ?>" required />
    </div>
    <div class="form-group">
        <button type="sumbit" name="send" class="btn btn-custom">Edit Company</button>
    </div>
</form>

<?php
    $pageContent = ob_get_clean();
    include 'View/Templates/layout.php';
?>