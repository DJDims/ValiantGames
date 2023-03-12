<?php
    ob_start();
?>

<button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#options" aria-expanded="false" aria-controls="collapseExample">Show options</button>
<div id="options">
    <form action="advancedSearch" method="POST" class="d-flex justify-content-between">
        <div class="form-group align-items-center">
            <label class="form-label mx-2">Keyword</label>
            <input class="form-control" placeholder="Keyword" name="keyword">
        </div>
        <div class="form-group align-items-center">
            <label class="form-label mx-2">Company</label>
            <select class="form-select" name="company">
                <option selected></option>
                <?php foreach ($companies as $k => $v) { ?>
                    <option value="<?php echo $v['companyId']; ?>"><?php echo $v['companyTitle']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group align-items-center">
            <label class="form-label mx-2">Category</label>
            <select class="form-select" name="category">
                <option selected></option>
                <?php foreach ($categories as $k => $v) { ?>
                    <option value="<?php echo $v['categoryId']; ?>"><?php echo $v['categoryTitle']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group align-items-center">
            <label class="form-label mx-2">Year</label>
            <select class="form-select" name="year">
                <option selected></option>
                <?php foreach ($years as $k => $v) { ?>
                    <option value="<?php echo $v['publishYear']; ?>"><?php echo $v['publishYear']; ?></option>
                <?php } ?>
            </select>
        </div>
        <button class="btn btn-primary" type="submit">Search<i class="fa fa-search"></i></button>
    </form>
</div>

<table class="table table-hover header-text">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Game Title</th>
            <th scope="col">Publish Year</th>
            <th scope="col">Company</th>
            <th scope="col">Category</th>
        </tr>
    </thead>
    <tbody>
    <?php if(isset($games)) { ?>
        <?php foreach ($games as $k => $v) { ?>
            <tr class="table-active">
                <th scope="row"><p><?php echo ($k + 1); ?></p></th>
                <td><p><a href="showGameDetails?<?php echo $v['id']; ?>"><?php echo $v['title']; ?></a></p></th>
                <td><p><?php echo $v['publishYear']; ?></p></th>
                <td><p><a href="showCompanyDetails?<?php echo $v['companyId']; ?>"><?php echo $v['companyTitle']; ?></a></p></th>
                <td><p><a href="showCategoryDetails?<?php echo $v['categoryId']; ?>"><?php echo $v['categoryTitle']; ?></a></p></th>
            </tr>
        <?php } ?>
    <?php } ?>
    </tbody>
</table>

<?php
    $pageContent = ob_get_clean();
    include 'View/Templates/layout.php';
?>