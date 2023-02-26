<?php
    ob_start();
    $title = '';
?>

<form class="col-4" action="deleteCompany?<?php echo $company['id']?>" method="POST">
    <div class="form-group">
        <input class="form-control" type="text" placeholder="Company title" id="companyTitle" name="companyTitle" readonly value="<?php echo $company['title']?>" />
    </div>
    <p>This company have <?php echo $countGames['COUNT(title)']?> links</p>
    <div class="form-group">
        <button type="sumbit" name="send" class="btn btn-custom">Delete Company</button>
    </div>
</form>

<?php
    $pageContent = ob_get_clean();
    include 'View/Templates/layout.php';
?>