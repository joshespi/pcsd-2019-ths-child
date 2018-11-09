<?php 
	/* Template Name: Syllibi Page */
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
							   	<h2>Course Description/Overview/Welcome Statement</h2>
				   					<?php the_field('course_description'); ?>
						   		<h2>Learning Expectations</h2>
						   			<?php the_field('learning_expectations'); ?>

						   		<h2>Assessment of Progress</h2>
						   			<?php the_field('assessment_of_progress'); ?>

						   		<h2>Course Materials</h2>
						   			<?php the_field('course_materials'); ?>

						   		<h2>Classroom Procedures</h2>
						   			<?php the_field('classroom_procedures'); ?>

						   		<h2>Calendar of Due Dates for Major Assignments</h2>
						   			<?php the_field('calendar_of_due'); ?>

						   		<h2>Progress Reports and Report Cards</h2>
						   			<?php the_field('progress_reports'); ?>

						   		<h2>Connecting Home to School</h2>
						   			<?php the_field('connecting_home_to_school'); ?>

						   		<h2>Personal Statement and other items (optional)</h2>
						   			<?php the_field('personal_statement_and_other_items'); ?>	 
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