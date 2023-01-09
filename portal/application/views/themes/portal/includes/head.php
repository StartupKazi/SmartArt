<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="<?= $description; ?>">
	<meta name="keywords" content="<?= $keywords; ?>">
	<meta name="author" content="<?= $site_title; ?>">
	<meta name="robots" content="no index,no follow">

	<!-- Title -->
	<title><?= $site_title; ?></title>

	<!-- Required CSS -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url($child_theme_assets); ?>/assets/css/bootstrap.css">

	<link rel="stylesheet" href="<?= base_url($child_theme_assets); ?>/assets/vendors/simple-datatables/style.css">

	<link rel="stylesheet" href="<?= base_url($child_theme_assets); ?>/assets/vendors/iconly/bold.css">

	<link rel="stylesheet" href="<?= base_url($child_theme_assets); ?>/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" href="<?= base_url($child_theme_assets); ?>/assets/vendors/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" href="<?= base_url($child_theme_assets); ?>/assets/css/app.css">

	<link rel="stylesheet" href="<?= base_url($child_theme_assets); ?>/assets/vendors/fontawesome/all.min.css">

	<!-- Favicon Load -->
	<link rel="icon" href="<?= base_url($custom_assets); ?>/img/favicon.ico" type="image/x-icon" />

	<!-- Style -->
	<link rel="stylesheet" href="<?= base_url($custom_assets); ?>/css/portal.min.css?<?= time(); ?>">

	<!-- Include Head -->
	<?php $this->load->view("$child_theme_dir/functions/incl_head"); ?>
	<!-- End Include Head -->

	<!-- all css here -->
	<style type="text/css">
		/*
        .se-pre-con {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: #fff !important;
        }

        .loader-ring {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 150px;
            height: 150px;
            background: transparent;
            border: 3px solid #e1dfdf;
            ;
            border-radius: 50%;
            text-align: center;
            line-height: 150px;
            font-size: 20px;
            color: #114e69;
            letter-spacing: 4px;
            text-transform: uppercase;
            text-shadow: 0 0 10px #114e6936;
            box-shadow: 0 0 20px rgba(0, 0, 0, .5);
            font-family: "roboto";
        }

        .loader-ring:before {
            content: '';
            position: absolute;
            top: -0px;
            left: -0px;
            width: 100%;
            height: 100%;
            border: 3px solid transparent;
            border-top: 3px solid #114e69;
            border-right: 3px solid #114e69;
            border-radius: 50%;
            animation: animateC 2s linear infinite;
        }

        .spinner {
            display: block;
            position: absolute;
            top: calc(50% - 2px);
            left: 50%;
            width: 50%;
            height: 4px;
            background: transparent;
            transform-origin: left;
            animation: animate 2s linear infinite;
        }

        .spinner:before {
            content: '';
            position: absolute;
            width: 13px;
            height: 13px;
            border-radius: 50%;
            background: #114e69;
            top: -6px;
            right: -4px;
            box-shadow: 0 0 20px #114e69;
        }

        @keyframes animateC {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes animate {
            0% {
                transform: rotate(45deg);
            }

            100% {
                transform: rotate(405deg);
            }
        }
        */
	</style>
</head>

<body>
	<!-- Paste this code after body tag -->
	<div class="se-pre-con">
		<div class="loader-ring">
			SMART ART
			<span class="spinner"></span>
		</div>
	</div>

	<div id="app">
		<div id="sidebar" class="active">
			<div class="sidebar-wrapper active">
				<div class="sidebar-header">
					<div class="d-flex justify-content-between">
						<div class="logo">
							<a href="<?= site_url(); ?>">
								SMART ART
							</a>
						</div>
						<div class="toggler">
							<a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
						</div>
					</div>
				</div>
				<div class="sidebar-menu">
					<ul class="menu">
						<li class="sidebar-title">Menu</li>
						<?php $level = $this->CoreLoad->session('level'); ?>
						<?php $portal_url = 'portal-' . $level; ?>

						<li class="sidebar-item active ">
							<a href="<?= site_url($portal_url); ?>" class='sidebar-link'>
								<i class="bi bi-grid-fill"></i>
								<span>Dashboard</span>
							</a>
						</li>

						<!-- Include Menus -->
						<?php $this->load->view("$child_theme_dir/menus/$level"); ?>
						<!-- End Include Menus -->

						<li class="sidebar-item">
							<a href="<?= site_url('portal-profile'); ?>" class='sidebar-link'>
								<i class="fa fa-user"></i>
								<span>My Account</span>
							</a>
						</li>

						<li class="sidebar-item">
							<a href="<?= site_url(''); ?>" class='sidebar-link' target="_blank">
								<i class="bi bi-box-arrow-up-right"></i>
								<span>Get Back To Main Website</span>
							</a>
						</li>

						<li class="sidebar-item ">
							<a href="<?= site_url('logout'); ?>" class='sidebar-link'>
								<i class="fa fa-door-open"></i>
								<span>Logout</span>
							</a>
						</li>
					</ul>
				</div>
				<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
			</div>
		</div>

		<div id="main">
			<header class="mb-3">
				<a href="#" class="burger-btn d-block d-xl-none">
					<i class="bi bi-justify fs-3"></i>
				</a>
			</header>
