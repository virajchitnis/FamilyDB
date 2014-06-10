<!DOCTYPE html>
<html>
	<head>
		<?php include("common/variables.php"); ?>
		<link rel="stylesheet" href="stylesheets/design.css">
		<title>Home - <?php echo $app_name; ?></title>
	</head>
	<body>
		<div class="wrapper">
			<?php include("common/header.php"); ?>
			<div class="body_div">
				<p><a href="trips">Trips</a></p>
				<p>&nbsp;</p>
				<p><a href="weight">Recorder</a></p>
			</div>
			<div class="push"></div>
		</div>
		<?php include("common/footer.php"); ?>
	</body>
</html>