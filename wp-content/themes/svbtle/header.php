<!DOCTYPE html>
<!--[if lt IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="no-js ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="google-site-verification" content="XVFR9uWbZh5g8pSrIYxLBE2rxmvN62ta155xqcnDT9U" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.5, minimum-scale=0.5">
		
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory'); ?>/images/favicon.ico" />

		<!-- load google web fonts -->
		<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic|Open+Sans:700,400' rel='stylesheet' type='text/css'>
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<?php

			wp_enqueue_script('jquery');

			if ( is_singular() && get_option( 'thread_comments' ) )
				wp_enqueue_script( 'comment-reply' );

			$options = get_option ( 'svbtle_options' ); 

			echo $options['google_analytics'];
 
			if( isset( $options['color'] ) && '' != $options['color'] )
				$color = $options['color'];
			else 
				$color = "#ff0000";
	
		?>
		<title><?php wp_title( 'by', true, 'right' ); echo $options['theme_username'] ?></title>

		<style>blockquote {border-color: <?php echo $color ?>;}figure.logo, aside.alsoby li a:hover, aside.kudo.complete span.circle {background-color: <?php echo $color ?>;}section.preview header#begin h2,ul#user_meta a:hover,nav.pagination span.next a,nav.pagination span.prev a {color: <?php echo $color ?>;}ul#user_meta a:hover,nav.pagination span.next a,nav.pagination span.prev a {border-color: <?php echo $color ?>;}::-moz-selection { background: <?php echo $color ?>; color: #fff; text-shadow: none;}::selection { background: <?php echo $color ?>; color: #fff; text-shadow: none;} 
		ul#user_nav li a:hover{color:#FFF; background-color: <?php echo $color ?>; border-color:<?php echo $color ?>;} #searchform #s:hover , #searchform #s:focus {border-color:  <?php echo $color ?>;} 
		</style>
		


		<?php wp_head();  ?>

		
	</head>
	<body <?php body_class(); ?>>
		<a href="https://plus.google.com/112344183949482000556" rel="publisher" style="display:none">Google+</a>
		<header id="sidebar">
			<figure class="logo medium">
				<a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a>
			</figure>
			<h1><a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			<h2><a href="<?php echo home_url( '/' ); ?>"><?php echo $options['theme_username'] ?></a></h2>
			<h3><?php bloginfo( 'description' ); ?></h3>

			<ul id="user_nav">
			
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				
				<?php if ($options['twitter_username']): ?>
					<li class="link twitter">
				      <a href="http://www.twitter.com/<?php echo $options['twitter_username'] ?>">
				      	@<?php echo $options['twitter_username'] ?>
				      </a>
				    </li>
				<?php endif ?>
				<?php if ($options['github_username']): ?>
					<li class="link github">
				      <a href="http://www.github.com/<?php echo $options['github_username'] ?>">
				      	Github
				      </a>
				    </li>
				<?php endif ?>
				<?php if ($options['rss-link']): ?>
					<li class="link feed">
				      <a href="<?php bloginfo('rss_url'); ?>">feed</a>
				    </li>		
				<?php endif ?>		
		
				<?php if ( is_active_sidebar( 'sidebar' ) ) dynamic_sidebar( 'sidebar' ); ?>

		  </ul>
		  <aside id="svbtle_linkback">
		    <a href="https://github.com/gravityonmars/wp-svbtle">
		      <span class="logo_square"><span class="logo_circle">&nbsp;</span></span>&nbsp;<span class="svbtle">wp-svbtle</span>
		    </a>
		  </aside>
		</header>
		
		<section id="river" role="main">
        
        <?php if (isset($_GET['not_found'])): ?>
        <div id="notice"><span>:(</span><br><br>Not found.</div>
        <?php endif; ?>