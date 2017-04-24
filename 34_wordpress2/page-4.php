<?php 
/*
Template Name: Page
*/
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage New
 * @since New 1.1
 */
?>
<!DOCTYPE html>
<html lang="ru">
<head><meta charset="UTF-8">
	<title><?php wp_title( '', true, 'right' ); ?></title>
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/css/zero-style.css">
	<link rel="stylesheet" media="screen and (min-width: 960px)" href="<?php echo get_bloginfo('template_url'); ?>/css/style960.css">
	<link rel="stylesheet" media="screen and (min-width: 768px) and (max-width: 959px)" href="<?php echo get_bloginfo('template_url'); ?>/css/style768.css">
	<link rel="stylesheet" media="screen and (min-width: 480px) and (max-width: 767px)" href="<?php echo get_bloginfo('template_url'); ?>/css/style480.css">
	<link rel="stylesheet" media="screen and (max-width: 479px)" href="<?php echo get_bloginfo('template_url'); ?>/css/style320.css">
	
	
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/css/styleIE8.css">
	<![endif]-->

	
</head>


<body>
	<header>
		<div class="wrapper_header">
		
				<p><img src="<?php echo get_bloginfo('template_url'); ?>/img/site_logo.png" class="sitelogo"></p>
		
				<nav class="mainnav">
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
					<!--<ul>
					<li><a class="mainnav__button" href="#">home</a></li>
					<li><a href="#">about</a></li>
					<li><a href="#">blog</a></li>
					<li><a href="#">products</a></li>
					<li><a href="#">lorem ipsum</a></li>
					<li><a href="#">dolor sit amet</a></li>
					</ul>-->
				</nav>
				
				
				
		</div>
			
		<figure class="slider">
					
					<div class="slider__content">

						<h2>Lorem ipsum dolor</h2>
						<h3>It will make all of your dreams come true</h3>
						<p>Semper sollicitudin gravida eget, vestibulum sit amet sapien. Nunc dignissim tincidunt est, et auctor turpis ornare a. Nam venenatis hendrerit est at volutpat. Morbi elementum euismod lacus id semper. In odio nunc, imperdiet eget aliquam quis, euismod id lectus. Nulla interdum arcu et felis aliquam a tempus lectus lobortis.
						</p>
						<a class="slider__larrow" href="#"></a>
						<a class="slider__rarrow" href="#"></a>
						
						<div class="slider__phone"></div>
							<a class="slider__link" href="#"></a>
						</div>
		
		</figure>
			
		
		<div class="wrapper_header">
			
			<figure class="circles">
				<ul>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
				</ul>
			</figure>
		</div>	
			
		</header>
		
		
		<div class="blurbs">  
		
			<div class="blurbs__wrapper">
		
				<div class="blurbs__box">
					<h3>About our company</h3>
					<p>Nunc turpis neque, feugiat eget eleifend et, lacinia non neque. Praesent rhoncus ultrices posuere. Pellentesque vel lacus eget nisi convallis auctor. Nam vitae lectus eu libero pellentesque pulvinar. Quisque urna risus, mattis pulvinar bibendum in, venenatis quis neque. Mauris nec metus ultricies erat consequat dignissim non eu nisl. 
					</p>
				<a class="blurbs__link" href="#">read more</a>
				</div>
			
				<div class="blurbs__box--center">
					<h3>About our company</h3>
					<p>Nunc turpis neque, feugiat eget eleifend et, lacinia non neque. Praesent rhoncus ultrices posuere. Pellentesque vel lacus eget nisi convallis auctor. Nam vitae lectus eu libero pellentesque pulvinar. Quisque urna risus, mattis pulvinar bibendum in, venenatis quis neque. Mauris nec metus ultricies erat consequat dignissim non eu nisl. 
					</p>
				<a class="blurbs__link" href="#">read more</a>
				</div>
			
				<div class="blurbs__box--right">
					<h3>About our company</h3>
					<p>Nunc turpis neque, feugiat eget eleifend et, lacinia non neque. Praesent rhoncus ultrices posuere. Pellentesque vel lacus eget nisi convallis auctor. Nam vitae lectus eu libero pellentesque pulvinar. Quisque urna risus, mattis pulvinar bibendum in, venenatis quis neque. Mauris nec metus ultricies erat consequat dignissim non eu nisl. 
					</p>
				<a class="blurbs__link" href="#">read more</a>
				</div>
			
			</div>
			
		</div>
		
		
		<div class = main>

			<div class="pingbuller__wrapper">
			
				<div class="pingbuller">
					<h2>Pingbuller  <span>Starts here</span></h2>
			
					<p>“Nunc turpis neque, feugiat eget eleifend et, lacinia non neque. Praesent rhoncus ultrices posuere. Pellentesque vel lacus eget nisi convallis auctor. Nam vitae lectus eu libero pellentesque pulvinar urna risus, mattis pulvinar bibendum in, venenatis quis neque. Mauris nec metus ultricies erat consequat dignissim non eu nisl.”
						Quisque libero tellus, pharetra et eleifend id, interdum elementum arcu. Suspendisse quis mauris non ligula rutrum faucibus eu quis odio. Phasellus eu lobortis odio. In hac habitasse platea dictumst. Proin vestibulum turpis at mauris aliquam non euismod lorem euismod. Aenean dapibus ultricies enim, eget vulputate leo feugiat non.
					</p>
				</div>
			
			
				<div class="circles--white">
					<ul>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					</ul>
				</div>
			
			
				<div class="updates1">
				<h2>Recent updates</h2><!--<ul><?php wp_get_archives('type=postbypost&limit=3'); ?></ul>-->
				<!--	<?php dynamic_sidebar('sidebar1') ?>-->
				<?php
				global $post;
				$postslist = get_posts( array( 'posts_per_page' => 3, 'order'=> 'ASC', 'orderby' => 'title' ) );
				foreach ( $postslist as $post ){
					setup_postdata($post);
					?>
					<div class="recent_updates">
					<div style = "width:50px;float:left;">
					<?php echo get_the_post_thumbnail($page->ID, array(49,49)); ?>
					</div>
					<div>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<?php the_excerpt(); ?>
					</div>
					   </div>
					    <div style = "clear:both;"> </div>
					<?php
				}
				wp_reset_postdata();?>
						
						
						<a class="updates__link" href="#">more blog posts</a>
				</div>


				<div class="updates">
						<h2>Recent updates</h2><!--<ul><?php wp_get_archives('type=postbypost&limit=3'); ?></ul>-->
				<!--	<?php dynamic_sidebar('sidebar1') ?>-->
				<?php
				global $post;
				$postslist = get_posts( array( 'posts_per_page' => 3, 'order'=> 'ASC', 'orderby' => 'title' ) );
				foreach ( $postslist as $post ){
					setup_postdata($post);
					?>
					<div>
					<div style = "width:50px;float:left;">
					<?php echo get_the_post_thumbnail($page->ID, array(49,49)); ?>
					</div>
					<div>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<?php the_excerpt(); ?>
					</div>
					   </div>

					<?php
				}
				wp_reset_postdata();?>
						<div class="updates__box">
							<h3>Nunc turpis neque feugiat eget </h3>
							<p>Posted by Admin on March 13 2012 in Recent News</p>
						</div>
						
						<div class="updates__box">
							<h3>Nunc turpis neque feugiat eget </h3>
							<p>Posted by Admin on March 13 2012 in Category</p>
						</div>
						
						<div class="updates__box">
							<h3>Nunc turpis neque feugiat eget </h3>
							<p>Posted by Admin on March 13 2012 in Blog Updates</p>
						</div>
						
						<a class="updates__link" href="#">more blog posts</a>
				</div>
				
			</div>
		
		</div>
		
		
		<figure class="brands">
			<div class="brands__wrapper">
				<ul>
				<li><a class="brand1"></a></li>
				<li><a class="brand2"></a></li>
				<li><a class="brand3"></a></li>
				<li><a class="brand4"></a></li>
				<li><a class="brand5"></a></li>
				<li><a class="brand6"></a></li>
				</ul>
		
			</div>
		</figure>
		
		<section class="gray">
		
		
			<div class="gray__wrapper">
			
			
				<div class="gray__buller">
					<h2>pigbull<span>er</span></h2>
					<p>Nunc turpis neque, feugiat eget eleifend et, lacinia non neque. Praesent rhoncus ultrices posuere. Pellentesque vel lacus eget nisi convallis auctor. Nam vitae lectus eu libero pellentesque pulvinar. Quisque urna risus, mattis pulvinar bibendum in, venenatis quis neque. Mauris nec metus ultricies erat consequat dignissim non eu nisl. Quisque libero tellus, pharetra et eleifend id, interdum elementum arcu. Suspendisse quis mauris non ligula rutrum faucibus eu quis odio. Phasellus eu lobortis odio. In hac habitasse platea dictumst. Proin vestibulum turpis at mauris aliquam non euismod lorem euismod. Aenean dapibus ultricies enim, eget vulputate leo feugiat non.
					</p>
				</div>
			
			
				<div class="gray__comments">
					<h2>Recent comments</h2>
					<p>Nunc turpis neque, feugiat eget eleifend et, lacinia non neque. Praesent rhoncus ultrices posuere. Pellentesque vel lacus eget nisi convallis auctor. Nam vitae lectus eu libero pellentesque pulvinar. Quisque urna risus, mattis pulvinar bibendum in, venenatis quis neque. Mauris nec metus ultricies erat consequat dignissim non eu nisl. Quisque libero tellus, pharetra et eleifend id, interdum elementum arcu. Suspendisse quis mauris non ligula rutrum faucibus eu quis odio. Phasellus eu lobortis odio. In hac habitasse platea dictumst. Proin vestibulum turpis at mauris aliquam non euismod lorem euismod. Aenean dapibus ultricies enim, eget vulputate leo feugiat non.
					</p>
				</div>
			
			
			
				<div class="gray__news">
					<h2>News categories</h2>
					<p>Nunc turpis neque, feugiat eget eleifend et, lacinia non neque. Praesent rhoncus ultrices posuere. Pellentesque vel lacus eget nisi convallis auctor. Nam vitae lectus eu libero pellentesque pulvinar. Quisque urna risus, mattis pulvinar bibendum in, venenatis quis neque. Mauris nec metus ultricies erat consequat dignissim non eu nisl. Quisque libero tellus, pharetra et eleifend id, interdum elementum arcu. Suspendisse quis mauris non ligula rutrum faucibus eu quis odio. Phasellus eu lobortis odio. In hac habitasse platea dictumst. Proin vestibulum turpis at mauris aliquam non euismod lorem euismod. Aenean dapibus ultricies enim, eget vulputate leo feugiat non.
					</p>
				</div>
				
				
				
				<div class="gray__news--add">
					<h2>News categories</h2>
					<p>Nunc turpis neque, feugiat eget eleifend et, lacinia non neque. Praesent rhoncus ultrices posuere. Pellentesque vel lacus eget nisi convallis auctor. Nam vitae lectus eu libero pellentesque pulvinar. Quisque urna risus, mattis pulvinar bibendum in, venenatis quis neque. Mauris nec metus ultricies erat consequat dignissim non eu nisl. Quisque libero tellus, pharetra et eleifend id, interdum elementum arcu. Suspendisse quis mauris non ligula rutrum faucibus eu quis odio. Phasellus eu lobortis odio. In hac habitasse platea dictumst. Proin vestibulum turpis at mauris aliquam non euismod lorem euismod. Aenean dapibus ultricies enim, eget vulputate leo feugiat non.
					</p>
				</div>
				
				
				
				<div class="gray__news--add">
					<h2>News categories</h2>
					<p>Nunc turpis neque, feugiat eget eleifend et, lacinia non neque. Praesent rhoncus ultrices posuere. Pellentesque vel lacus eget nisi convallis auctor. Nam vitae lectus eu libero pellentesque pulvinar. Quisque urna risus, mattis pulvinar bibendum in, venenatis quis neque. Mauris nec metus ultricies erat consequat dignissim non eu nisl. Quisque libero tellus, pharetra et eleifend id, interdum elementum arcu. Suspendisse quis mauris non ligula rutrum faucibus eu quis odio. Phasellus eu lobortis odio. In hac habitasse platea dictumst. Proin vestibulum turpis at mauris aliquam non euismod lorem euismod. Aenean dapibus ultricies enim, eget vulputate leo feugiat non.
					</p>
				</div>
		
			
			</div>
			
			
		
		
		</section>
		
		<footer>
		
		
	
					
			<nav class="mainnav--footer">
					<ul>
					<li><a href="#">home</a></li>
					<li><a href="#">about</a></li>
					<li><a href="#">blog</a></li>
					<li><a href="#">products</a></li>
					<li><a href="#">lorem ipsum</a></li>
					<li><a href="#">dolor sit amet</a></li>
					</ul>
			
			</nav>
		

			<div class="design">
				<p>Designed by <span> Pingbull AS </span></p>
			</div>
					
					
		</footer>
	




</body>
</html>