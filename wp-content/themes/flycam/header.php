<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		 <meta name="author" content="hokien07">

		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
        <!-- Themify Icons CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/themify-icons.css">
        <!-- Elegant Font Icons CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/elegant-font-icons.css">
        <!-- Elegant Line Icons CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/elegant-line-icons.css">
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/venobox/venobox.css">
        <!-- Slicknav CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slicknav.min.css">
        <!-- animate CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css">
		<!-- OWL-Carousel CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">

		<!-- Responsive CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">

		<!-- Product CSS -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/product.css">

        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

		<?php wp_head(); ?>
	</head>
	<body data-spy="scroll" data-target="#navmenu" data-offset="70" <?php body_class();?>>

		<!--[if lt IE 8]>
              <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
          <![endif]-->

	 <div class="site-preloader-wrap">
		 <div class="spinner"></div>
	 </div><!-- Preloader -->

	 <header id="header" class="header-section ">
		 <div class="container">
			 <nav class="navbar">
				 <a href="http://flycam.mid.test" class="navbar-brand"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Flypro"></a>
				 <div class="d-flex menu-wrap">
					<div id="navmenu" class="mainmenu">
						 <ul class="nav">
							 <li ><a data-scroll class="nav-link active" href="http://flycam.mid.test">Trang chủ <span class="sr-only">(current)</span></a></li>
							 <li><a data-scroll class="nav-link" href="http://flycam.mid.test/danh-muc-san-pham/flycam-gia-re/">Sản phẩm</a></li>
<!--							 <li><a data-scroll class="nav-link" href="#">Bài viết</a></li>-->
<!--							 <li><a data-scroll class="nav-link" href="#">Giới thiệu</a></li>-->
<!--							 <li><a data-scroll class="nav-link" href="#">Liên hệ</a></li>-->
							 <li><a data-scroll class="nav-link" href="<?php echo get_site_url() ?>/gio-hang">Giỏ hàng</a></li>
						 </ul>
					</div>
				 </div>
			 </nav>
		 </div>
	 </header><!-- header-section -->
