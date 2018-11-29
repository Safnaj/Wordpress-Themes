<!--This page for Display the Search Results-->
<?php get_header();?>
		<div class="container content">
			<div class="main block">
				<h1 class="page-header">
					Search Results
				</h1>
					<?php if(have_posts()) : ?>
					<?php while(have_posts()): the_post(); ?>
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
