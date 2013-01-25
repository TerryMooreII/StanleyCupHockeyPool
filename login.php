<?php
include 'inc/header.php';
?>


<div id="login">

<form>
	<p class="error" style="display:none"> </p>
	<p>	
	<label for="userName">User Name</label>
	<input id="userName" type="text" />
	</p>

	<p>
	<label for="password">Password</label>
	<input id="password" type="password" />
	</p>

	<p>
		<button id="loginBtn" type="submit">Login</button>
	</p>
</form>
</div>

<?php include 'inc/footer.php'; ?>

<script type="text/javascript">

(function(){

	$('#userName').focus();

})()

</script>