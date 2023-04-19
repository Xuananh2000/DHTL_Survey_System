<!DOCTYPE html>
	<html lang="en">
	<?php
	include('./config/db_connect.php');
	?>
	<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Signup | TLU Survey System</title>
	<?php include('layouts/header.php'); ?>
	</head>
	<style>
		body{
			width: 100%;
			height: calc(100%);
			position: fixed;
			top:0;
			left: 0
			/*background: #007bff;*/
		}
		main#main{
			width:100%;
			height: calc(100%);
			display: flex;
		}
	</style>
	<body style="background-image: url(./assets/dist/img/img_background.png); background-size: cover;">

	<main id="main" >
			<div class="align-self-center w-100">

			<div id="login-center" class="row justify-content-center">
				<div class="card col-md-3">
					<div class="card-body">
					<h4 class="text-center"><b>TLU Survey System</b></h4>
						<form id="signup-form" >
							<div class="form-group">
								<label for="email" class="control-label text-dark">Email</label>
								<input type="email" id="email" name="email" class="form-control form-control-sm" required>
                                <small id="msg"></small>
							</div>
                            <div class="form-group">
							<label for="phone" class="control-label text-dark">Phone number</label>
							<input type="text" id ="phone" name="phone" class="form-control form-control-sm" required>
						    </div>
                            <div class="form-group">
								<label for="name" class="control-label text-dark">Name</label>
								<input type="text" id="name" name="name" class="form-control form-control-sm" required>
							</div>
							<div class="form-group">
								<label for="password" class="control-label text-dark">Password</label>
								<input type="password" id="password" name="password" class="form-control form-control-sm" minlength="8" maxlength="20" required>
							</div>
                            <div class="form-group">
							<label for="password" class="control-label text-dark">Confirm Password</label>
							<input type="password" class="form-control form-control-sm" name="cpass" minlength="8" maxlength="20" required>
							<small id="pass_match" data-status=''></small>
						    </div>
							<center><button class="btn-sm btn-block btn-wave col-md-4 btn-primary" type="submit">Signup</button></center>
                            <center><div class="text-dark mt-2">Back to <a href="login.php" class="text-primary">Login</a></div></center>
						</form>
					</div>
				</div>
			</div>
			</div>
	</main>

	<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


	</body>
    <script>
    // validate phone
	$('#phone').on('input',function(){
		var val = $(this).val()
		val = val.replace(/[^0-9 \,]/, '');
		$(this).val(val)
	})
	
	// validate name
	$('#name').on('input',function(){
		var val = $(this).val()
		val = val.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '').replace(/[0-9]/g, '').replace(/\s+/g, ' ');
		$(this).val(val)
	})
	
	// validate password
	$('[name="password"],[name="cpass"]').keyup(function(){
		var pass = $('[name="password"]').val()
		var cpass = $('[name="cpass"]').val()
		if(cpass == '' ||pass == ''){
			$('#pass_match').attr('data-status','')
		}else{
			if(cpass == pass){
				$('#pass_match').attr('data-status','1').html('<i class="text-success">Password Matched.</i>')
			}else{
				$('#pass_match').attr('data-status','2').html('<i class="text-danger">Password does not match.</i>')
			}
		}
	})
	$('#signup-form').submit(function(e){
		e.preventDefault()
		$('input').removeClass("border-danger")
		$('#msg').html('')
		if($('#pass_match').attr('data-status') != 1){
			if($("[name='password']").val() !=''){
				$('[name="password"],[name="cpass"]').addClass("border-danger")
				return false;
			}
		}else{
            $.ajax({
			url:'ajax.php?action=save_user',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp == 1){
					setTimeout(function(){
						location.replace('login.php')
					},750)
				}else if(resp == 2){
					$('#msg').html('<i class="text-danger">Email already exist.</i>');
					$('[name="email"]').addClass("border-danger")
					end_load()
				}
			}
		})
        }


	})
</script>
	</html>
