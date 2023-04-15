<?php include 'config/db_connect.php' ?>
<?php
if(isset($_GET['id'])){
	$type_arr = array('',"Admin","Staff","Subscriber");
	$qry = $conn->query("SELECT * FROM users where id = ".$_GET['id'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
}
?>
<div class="container-fluid">
	<table class="table">
		<tr>
			<th>Name:</th>
			<td><b><?php echo($name) ?></b></td>
		</tr>
		<tr>
			<th>Email:</th>
			<td><b><?php echo $email ?></b></td>
		</tr>
		<tr>
			<th>Phone:</th>
			<td><b><?php echo $phone ?></b></td>
		</tr>
		<tr>
			<th>Created_at:</th>
			<td><b><?php echo $date_created ?></b></td>
		</tr>
		<tr>
			<th>User Role:</th>
			<td><b><?php echo $type_arr[$type] ?></b></td>
		</tr>
	</table>
</div>
<div class="modal-footer display p-0 m-0">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
<style>
	#uni_modal .modal-footer{
		display: none
	}
	#uni_modal .modal-footer.display{
		display: flex
	}
</style>