<!--This is a Sample for Creating Custom Page Template-->
<!--We Can Create a Unique Template for Particular Page as Well-->
<?php get_header();?>
		<div class="container content">
			<div class="main block">
				<?php if(have_posts()) : ?>
					<?php while(have_posts()): the_post(); ?>
						<article class="page">
							<h2><?php the_title();?></h2>
							<div class="woll">Company Phone : 0777974207</div>
							<?php the_content();?>
						</article>
					<?php endwhile;?>
				<?php else : ?>
					<?php echo wpautop('Sorry, No Posts were found..!'); ?>	
				<?php endif; ?>	
			</div>

			<!--SideBar-->
			<div class="side">
				<?php if(is_active_sidebar('sidebar')) :?>
					<?php dynamic_sidebar('sidebar');?>
				<?php endif; ?>	
			</div>
			<!--SideBar-->
		</div>
<?php get_footer();?>		
