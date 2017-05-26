<?php  
	$title = 'Login';
	include 'header.php';
?>
	<div class="container">
		<div class="row">
			<form class="col s12">
				<div class="row">
					<div class="input-field col s12">
			          <input placeholder="username" id="username" name="username" type="text" class="validate">
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
			          <input placeholder="password" id="password" name="password" type="text" class="validate">
					</div>
				</div>
				<input type="submit" name="login" class="btn waves-effect waves-light orange darken-1" style="width: 100%;" value="Login">
			</form>
		 </div>

	</div>
</body>
</html>