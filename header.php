<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <script src="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700" rel="stylesheet">
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>

<div class="overflow"

<body <?php body_class(); ?>>

<header>
	<div class="header-nav">
		<div class="header-nav-logo"><a href=".">preach</a></div>
		<?php wp_nav_menu( array(
		  'container' => false,
		  'theme_location' => 'primary'
		)); ?>
	</div>
</header><!--/.header-->
