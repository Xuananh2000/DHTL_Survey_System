<?php
include('config/db_connect.php');
session_start();

if(isset($_GET['id'])){
$user = $conn->query("SELECT * FROM `users` where id =".$_GET['id']);
foreach($user->fetch_array() as $k =>$v){
	$meta[$k] = $v;
}
}
?>
<div class="container-fluid">
	<div id="msg"></div>

	<form action="" id="manage-user">
		<input type="hidden" name="id" value="<?php echo isset($meta['id']) ? $meta['id']: '' ?>">
		<div class="form-group">
			<label for="username">Email</label>
			<input type="text" name="email" id="email" class="form-control" readonly value="<?php echo isset($meta['email']) ? $meta['email']: '' ?>" required autocomplete="off">
		</div>
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" class="form-control" value="<?php echo isset($meta['name']) ? $meta['name']: '' ?>" required autocomplete="off">
		</div>
		<div class="form-group">
			<label for="name">Phone</label>
			<input type="text" name="phone" id="phone" class="form-control" value="<?php echo isset($meta['phone']) ? $meta['phone']: '' ?>">
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" class="form-control" value="" autocomplete="off" >
			<small><i>Leave this blank if you dont want to change the password.</i></small>
		</div>



	</form>
</div>
<script>
    // validate name
    $('#name').on('input',function(){
		var val = $(this).val()
		val = val.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '').replace(/[0-9]/g, '').replace(/\s+/g, ' ');
		$(this).val(val)
	})
	
	// validate phone
	$('#phone').on('input',function(){
		var val = $(this).val()
		val = val.replace(/[^0-9 \,]/, '');
		$(this).val(val)
		
	})
	
	$('#manage-user').submit(function(e){
	    e.preventDefault()
		$('input').removeClass("border-danger")
		$('#msg').html('')
		if($("[name='phone']").val() ==''){
			$('[name="phone"]').addClass("border-danger")
			$('#msg').html('<div class="alert alert-danger">Input phone</div>')
			return false;
		}
		else if($("[name='name']").val() ==''){
			$('[name="name"]').addClass("border-danger")
			$('#msg').html('<div class="alert alert-danger">Input name</div>')
			return false;
		}
		else if($("[name='password']").val().length > 0){
		    if ($("[name='password']").val().length < 8 || $("[name='password']").val().length > 20){
			    $('[name="password"]').addClass("border-danger")
			    $('#msg').html('<div class="alert alert-danger">Input password between 8 to 20 characters.</div>')
		    	return false;
		    }
		}
		else{
    		start_load()
    		$.ajax({
    			url:'ajax.php?action=update_user',
    			method:'POST',
    			data:$(this).serialize(),
    			success:function(resp){
    				if(resp ==1){
    					alert_toast("Data successfully saved",'success')
    					setTimeout(function(){
    						location.reload()
    					},1500)
    				}else{
    					$('#msg').html('<div class="alert alert-danger">Username already exist</div>')
    					end_load()
    				}
    			}
    		})
		}
	})

</script>
