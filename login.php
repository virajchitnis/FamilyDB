<!DOCTYPE html>
<html>
	<head>
		<?php include("common/variables.php"); ?>
		<link rel="stylesheet" href="stylesheets/design.css">
		<title>Login - <?php echo $app_name; ?></title>
	</head>
	<body>
		<div class="wrapper">
			<div id="login_box">
				<form>
					<input class="login_info" type="text" placeholder="username">
					<input class="login_info" type="password" placeholder="password">
					<input class="login_controls" type="submit" value="login">
				</form>
			</div>
			<div class="push"></div>
		</div>
		<?php include("common/footer.php"); ?>
	</body>
</html>