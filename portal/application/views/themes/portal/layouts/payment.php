<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portal</title>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url($child_theme_assets); ?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url($child_theme_assets); ?>/vendors/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" href="<?= base_url($child_theme_assets); ?>/css/app.css">
	<link rel="stylesheet" href="<?= base_url($child_theme_assets); ?>/css/pages/auth.css">

	<!-- Favicon Load -->
	<link rel="icon" href="<?= base_url($custom_assets); ?>/img/favicon.ico" type="image/x-icon" />

	<!-- Style -->
	<link rel="stylesheet" href="<?= base_url($custom_assets); ?>/css/portal.min.css">
</head>

<body>
	<div id="auth">

		<div class="row h-100">
			<div class="col-lg-5 col-12">

				<!-- Main Page -->
				<?php $this->load->view("themes/$child_theme/pages/$site_page"); ?>
				<!-- End Main Page -->

			</div>
		</div>
		<div class="col-lg-7 d-none d-lg-block">
			<div id="auth-right">

			</div>
		</div>
	</div>

	</div>
</body>

</html>
