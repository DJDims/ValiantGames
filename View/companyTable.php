<?php
	ob_start();
?>

<script src="../Public/js/alert.js"></script>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>

<!-- Alert -->
<?php if(isset($_SESSION['alert'])) { ?>
<div class="alert <?php echo $_SESSION['alert']['type']; ?> alert-dismissible fade show">
	<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label=""><use xlink:href="<?php echo $_SESSION['alert']['icon']; ?>"/></svg>
	<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
	<strong><?php echo $_SESSION['alert']['message']; ?></strong>
</div>
<?php } ?>
<?php unset($_SESSION['alert']);?>
<!-- Alert -->

<a href="showAddCompany" class="btn btn-primary">Add new</a>
<table class="table table-hover header-text">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Company Title</th>
			<th scope="col" class="text-end">Edit</th>
			<th scope="col" class="text-end">Delete</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($companies as $k => $v) { ?>
		<tr class="table-active">
			<th scope="row"><p><?php echo ($k + 1)+(($pageNumber-1)*10); ?></p></th>
			<td><p><a href="showCompanyDetails?<?php echo $v['companyId']; ?>"><?php echo $v['companyTitle']; ?></a></p></th>
			<td class="text-end"><a href="showEditCompany?<?php echo $v['companyId']; ?>" class="btn btn-warning">Edit</td>
			<td class="text-end"><a href="showDeleteCompany?<?php echo $v['companyId']; ?>" class="btn btn-danger">Delete</td>
		</tr>
	<?php } ?>
	</tbody>
</table>

<!-- pagination -->
<div class="d-flex justify-content-center">	
	<nav aria-label="Page navigation example">
		<ul class="pagination pagination-lg">
			<li class="page-item <?php if($pageNumber == 1) { echo 'disabled'; }?>">
				<a class="page-link" href="showTableCompanies?1" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span>
				</a>
			</li>
			<?php for ($i=1; $i <= $pagesCount; $i++) { ?>
				<li class="page-item"><a class="page-link <?php if($i == $pageNumber) { echo 'active'; }?>" href="showTableCompanies?<?php echo $i; ?>"><?php echo $i; ?></a></li>
			<?php } ?>
			<li class="page-item <?php if($pageNumber == $pagesCount) { echo 'disabled'; }?>">
				<a class="page-link" href="showTableCompanies?<?php echo $pagesCount; ?>" aria-label="Next">
					<span aria-hidden="true">&raquo;</span>
				</a>
			</li>
		</ul>
	</nav>
</div>
<!-- pagination -->

<?php
	$pageContent = ob_get_clean();
	include 'View/Templates/layout.php';
?>