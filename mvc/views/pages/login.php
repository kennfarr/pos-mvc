<?php include("./mvc/views/partials/theme.php"); ?> 
<div class="container-fluid bg2" style="height: 100vh;padding: 100px">
	<div class="row mt-1">
		<div class="col-sm-12 col-md-8 pl-4">
			<p class="text-white pl-3" style="font-size: 2rem;font-weight: bold;">Restaurant Management System</p>
			<p class="text-white pl-3" style="font-size: 1.5rem;font-weight: bold;">Build the function of a Restaurant Management System</p>
			<div class="icon ml-3 float-left " style="width: 50px;height: 50px;"><img src="../public/images/icons/1.png" width="70%"></div>
			<div class="text ml-3 " style="width: 80%;height: 50px;padding: 0.05rem;">
				<p class="text-white" style="font-size: 1.3rem">Account Admin Login - Change Pass - Logout </p>
			</div>
			<div class="icon ml-3 float-left  " style="width: 50px;height: 50px;"><img src="../public/images/icons/1.png" width="70%"></div>
			<div class="text ml-3 " style="width: 80%;height: 50px;padding: 0.05rem;">
				<p class="text-white" style="font-size: 1.3rem">CRUD product, table</p>
			</div>
			<div class="icon ml-3 float-left " style="width: 50px;height: 50px;"><img src="../public/images/icons/1.png" width="70%"></div>
			<div class="text ml-3 " style="width: 80%;height: 50px;padding: 0.05rem;">
				<p class="text-white" style="font-size: 1.3rem">Calculate the amount</p>
			</div>
			<div class="icon ml-3 float-left " style="width: 50px;height: 50px;"><img src="../public/images/icons/1.png" width="70%"></div>
			<div class="text ml-3 " style="width: 80%;height: 50px;padding: 0.05rem;">
				<p class="text-white" style="font-size: 1.3rem">Search Product </p>
			</div>
			<div class="icon ml-3 float-left " style="width: 50px;height: 50px;"><img src="../public/images/icons/1.png" width="70%"></div>
			<div class="text ml-3 " style="width: 80%;height: 50px;padding: 0.05rem;">
				<p class="text-white" style="font-size: 1.3rem">Manage System</p>
			</div>
			<div class="icon ml-3 float-left " style="width: 50px;height: 50px;"><img src="../public/images/icons/1.png" width="70%"></div>
			<div class="text ml-3 " style="width: 80%;height: 50px;padding: 0.05rem;">
				<p class="text-white" style="font-size: 1.3rem">Analytics Payment</p>
			</div>
			<div class="icon ml-3 float-left " style="width: 50px;height: 50px;"><img src="../public/images/icons/1.png" width="70%"></div>
			<div class="text ml-3 " style="width: 80%;height: 50px;padding: 0.05rem;">
				<p class="text-white" style="font-size: 1.3rem">Print Bill</p>
			</div>

		</div>
		<div class="col-sm-12 col-md-4 rounded shadow-sm bg3">
			<p class="cl mt-4 ml-3" style="font-weight: bold;font-size: 1.3rem;">SIGNIN ACCOUNT</p>
			<div class="col-12 pb-3 ">
				<div class="form-group">
					<label class="cl">Username</label>
					<input id="username" type="text" name="username" class="form-control" placeholder="Username">
				</div>
				<div class="form-group">
					<label class="cl">Password</label>
					<input id="password" type="password" name="password" class="form-control" placeholder="Password">
				</div>      
			</div>
			<p id="check-login-status" class="text-center text-danger" style="font-size: 90%;display: none;">Wrong username or password</p>
			<div onclick="Login()" type="submit" class="btn bg1 cl btn-block mt-1 mb-5 " style="width: 80%;margin:0 auto;">Submit</div>
		</div>
	</div>
</div>    
<script type="text/javascript">
	
	function Login(){
		
		username = $("#username").val();
		password = $("#password").val();
		var data="username=" + username +"&password="+password;
		$.post("../Account/CheckLogin/",{username:username,password:password},function(data){	
			console.log(data);
			if(data ==1){
				window.location.href = "../Home";
			}else{
				$("#check-login-status").show();
			}

		})
		
	}
</script>