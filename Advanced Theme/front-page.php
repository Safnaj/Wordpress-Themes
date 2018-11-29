<!--This is the Home Page file Name for custom Design using Widgets-->
<!--Wordpress will Look for this file name for Index-->

<?php get_header();?>
		<div class="container content">

			<?php if(is_active_sidebar('showcase')) :?>
					<?php dynamic_sidebar('showcase');?>
			<?php endif; ?>	

			<div class="block">
				<?php if(have_posts()) : ?>
					<?php while(have_posts()): the_post(); ?>
						<article class="page">
							<h2><?php the_title();?></h2>
							<?php the_content();?>
						</article>
					<?php endwhile;?>
				<?php else : ?>
					<?php echo wpautop('Sorry, No Posts were found..!'); ?>	
				<?php endif; ?>	
			</div>

			<!--No SideBar-->
			
			<!--Widget Begins-->

			<?php if(is_active_sidebar('box1')) :?>
					<?php dynamic_sidebar('box1');?>
			<?php endif; ?>	


			<?php if(is_active_sidebar('box2')) :?>
					<?php dynamic_sidebar('box2');?>
			<?php endif; ?>	


			<?php if(is_active_sidebar('box3')) :?>
					<?php dynamic_sidebar('box3');?>
			<?php endif; ?>	

			<!--Widget Ends-->

		</div>

<?php get_footer();?>		
