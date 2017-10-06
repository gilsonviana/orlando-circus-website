<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
		
	<?php if( is_front_page() ) { ?>
		
		<video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" playsinline autoplay muted loop>
			<!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
			<source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm">
			<source src="http://thenewcode.com/assets/videos/polina.mp4" type="video/mp4">
		</video>
		
		<?php } ?>
	  	
	
		<div class="hamburger">
	
	    	<button class="js-menu menu" type="button">
				<span class="bar"></span>
			</button>
	
		    <nav>
		    	<a href="https://orlando-circus-school-gilsonviana.c9users.io">home</a>
				<a href="https://orlando-circus-school-gilsonviana.c9users.io/classes">classes</a>
				<a href="https://orlando-circus-school-gilsonviana.c9users.io/events">events</a>
				<a href="https://orlando-circus-school-gilsonviana.c9users.io/schedule">schedule</a>
				<a href="https://orlando-circus-school-gilsonviana.c9users.io/book-classes">book your classes</a>
				<a href="https://orlando-circus-school-gilsonviana.c9users.io/location">location</a>
				<a href="https://orlando-circus-school-gilsonviana.c9users.io/contact">contact</a>
		    </nav>
	
	  	</div><!-- .flex -->
		
		<div class="container-fluid">

			<div class="container">
