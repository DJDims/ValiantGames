<?php
    ob_start();
?>

<script src="../Public/js/alert.js"></script>
<script src="../Public/js/roleEdit.js"></script>

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

<table class="table table-hover header-text">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Username</th>
			<th scope="col">Role</th>
			<th scope="col">Edit</th>
		</tr>
	</thead>
	<tbody>
    <?php foreach ($users as $k => $v) { ?>
        <tr class="table-active">
        <th scope="row"><p><?php echo ($k + 1); ?></p></th>
        <td><p><?php echo $v['username']; ?></p></td>
        <td><p><?php echo $v['role']; ?></p></td>
        <td><p><button class="btn btn-primary" onclick="showChangeRoleModal(<?php echo $v['id']; ?>, '<?php echo $v['username']; ?>')">Change Role</button></p></td>
        </tr>
    <?php } ?>
	</tbody>
</table>

<!-- Modals -->
<!-- Change Role -->
<div class="modal fade" id="changeRoleModal" tabindex="-1">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title">Change role</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="changeRole">
            <div class="modal-body">
                <div class="form-group">
                    <input class="form-control d-none" id="userId" name="userId"/>
                </div>
                <div class="form-group mb-2">
                    <input class="form-control" id="username" disabled/>
                </div>
                <div class="form-group">
                    <select class="form-control" id="rolesList" name="role">
                    <?php foreach ($roles as $k => $v) { ?>
                        <option value="<?php echo $k+1; ?>"><?php echo $v; ?></option>
                    <?php } ?>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="send" class="btn btn-primary">Change Role</button>
            </div>
        </form>
    </div>
  </div>
</div>
<!-- Change Role -->
<!-- Modals -->

<?php
    $pageContent = ob_get_clean();
    include 'View/Templates/layout.php';
?>