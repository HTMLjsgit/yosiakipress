<!DOCTYPE html>
<html>
<head>
	<title>よしあきブログ</title>


	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/cssandjs/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/cssandjs/reset.css">
	<!-- <link rel="stylesheet" href="style.css"> -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/cssandjs/slick.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/cssandjs/slick-theme.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
	<?php wp_head(); ?>
</head>
<body>
	<header class="yosiakiBox">
		<a href="<?php bloginfo('url') ?>" class="yosiakiTag">
			<h1 id="yosiakiText" class="centerText"><?php bloginfo('title') ?></h1>
		</a>
		<h1><?php wp_nav_menu(); ?></h1>
		<nav class="smartNav">
	        <div class="cp_offcm01">
	          <input type="checkbox" id="cp_toggle01">
	          <label for="cp_toggle01" id="home_label">
	            <span id="home_span"></span>
	          </label>

	          <div class="cp_menu">
		            <ul>
		            	<li>
		            		<a href="<?php echo home_url(); ?>">
		            			<h4>トップページ</h4>
		            		</a>
		            	</li>
		            	<li>
		            		<a href="https://twitter.com/Yosiaki1210">
		            			<h4>Twitter</h4>
		            		</a>
		            	</li>
		            	<li>
		            		<a href="">
		            			<h4>お問い合わせ</h4>
		            		</a>
		            	</li>
		            	<li>
		            		<a href="">
		            			<h4>プロフィール</h4>
		            		</a>
		            	</li>
		           </ul>
	          </div>
	       	</div>
		</nav>
	</header>