<?php
    ob_start();
    $title = '';
?>

<form class="col-4" action="addCompany" method="POST">
    <div class="form-group">
        <input class="form-control" type="text" placeholder="Company title" name="companyTitle" required />
    </div>
    <div class="form-group">
        <button type="sumbit" name="send" class="btn btn-custom">Add Company</button>
    </div>
</form>
  
<?php
    $pageContent = ob_get_clean();
    include 'View/Templates/layout.php';
?>