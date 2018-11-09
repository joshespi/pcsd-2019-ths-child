<?php 
	/* Template Name: Teacher Page */
	get_header(); ?>
		<main id="contentArea">
			<?php custom_breadcrumbs(); ?>
			<section id="mainContent" class="single-page">
					<?php
						
							do_shortcode( '[modified-date]' );
					
						if(have_posts()) :
						while (have_posts()) : the_post();?>

						   			<h1><?php the_title(); ?></h1>
						   			<?php 
							   			if ( has_post_thumbnail() ) {
								   			echo get_the_post_thumbnail( $post_id, 'full' );
								   			}
							   			 ?>
							   		<aside class="syllabus">
											<h2>Syllabi</h2>
											<?php echo do_shortcode('[wpb_childpages]'); ?>
									</aside>	 
					   				<?php the_content(); ?>

					   	<?php endwhile;
							else :
								echo '<p>No Content Found</p>';
					endif;
				?>
				<div class="clear"></div>
			</section>
		</main>
		<?php
	   		global $post;
	   		if(in_array( 43177, get_post_ancestors($post))) {
		   		get_sidebar( 'about-timpview' );
	   		} elseif(in_array( 42312, get_post_ancestors($post))) {
		   		get_sidebar( 'counseling' );
	   		} elseif(in_array( 43352, get_post_ancestors($post))) {
		   		get_sidebar( 'extracurricular' );
	   		} elseif(in_array( 43027, get_post_ancestors($post))) {
		   		get_sidebar( 'policies-forms' );
	   		} elseif(in_array( 42310, get_post_ancestors($post))) {
		   		get_sidebar( 'faculty-staff' );
	   		} else {
		   		get_sidebar( $sidebar );
	   		}

			get_footer();
		?>