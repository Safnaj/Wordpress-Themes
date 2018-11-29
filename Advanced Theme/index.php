<?php get_header();?>
		<div class="container content">
			<div class="main block">

				<?php if(have_posts()) : ?>
					<?php while(have_posts()): the_post(); ?>
						<!--Calling Body from Content.php-->
						<?php get_template_part('content');?>
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
