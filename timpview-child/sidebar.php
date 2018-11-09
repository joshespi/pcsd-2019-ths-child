<aside id="mainSidebar">
				<?php
					$my_query = new WP_Query( array('showposts' => $posts_to_show, 'category_name'  => 'message-from-administration'));
				   			while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
				   				<article class="post">
							   		<header class="postmeta">
										<h1><?php the_title(); ?></h1>
											<ul>
												<li><img src="//globalassets.provo.edu/image/icons/calendar-ltblue.svg" alt="" /><?php the_time(' F jS, Y') ?></li>
											</ul>
									</header>
									<img src="<?php the_post_thumbnail_url(); ?>" alt="Admin photo" class="left" />
							   		<?php echo get_excerpt(); ?>
							   		<p class="readmore"><a href="<?php the_permalink(); ?>">Read More</a></p>
							   	</article>
							<?php endwhile;
					wp_reset_query();
				?>
			<section class="calendar-agenda">
				<h1>Today’s Events</h1>
				<?php echo do_shortcode('[calendar id="42982"]'); ?>
				<a href="https://timpviewbeta.provo.edu/about-timpview/all-events-calendar/">View All Events Calendar</a>
			</section>
			<section>
				<h1>Student Essentials</h1>
				<ul class="imagelist">
					<li>
						<a href="https://grades.provo.edu/public/">
							<img src="https://timpviewbeta.provo.edu/wp-content/themes/pcsd-2018-theme/assets/icons/power-school.png" alt="" />
							<span>Grades & Attendance (PowerSchool)</span>
						</a>
					</li>
					<li>
						<a href="https://timpviewbeta.provo.edu/faculty-staff/teacher-directory/">
							<img src="https://timpviewbeta.provo.edu/wp-content/themes/pcsd-2018-theme/assets/icons/find-your-teacher.svg" alt="" />
							<span>Find Your Teacher</span>
						</a>
					</li>
					<li>
						<a href="https://timpviewbeta.provo.edu/about-timpview/odd-even-calendar/">
							<img src="https://timpviewbeta.provo.edu/wp-content/themes/pcsd-2018-theme/assets/icons/odd-even-calendar.svg" alt="" />
							<span>Odd/Even Day Calendar</span>
						</a>
					</li>
					<li>
						<a href="https://timpviewbeta.provo.edu/about-timpview/all-events-calendar/">
							<img src="https://timpviewbeta.provo.edu/wp-content/themes/pcsd-2018-theme/assets/icons/all-events-calendar.svg" alt="" />
							<span>All Events Calendar</span>
						</a>
					</li>
					<li>
						<a href="https://timpviewbeta.provo.edu/school-information/bell-schedule/">
							<img src="https://timpviewbeta.provo.edu/wp-content/themes/pcsd-2018-theme/assets/icons/bell-schedule.svg" alt="" />
							<span>Bell Schedule</span>
						</a>
					</li>

					<li>
						<a href="https://www.myschoolbucks.com/">
							<img src="https://timpviewbeta.provo.edu/wp-content/themes/pcsd-2018-theme/assets/icons/pay-meals.svg" alt="" />
							<span>Pay For School Meals</span>
						</a>
					</li>
					<li>
						<a href="https://www.schoolnutritionandfitness.com/index.php?page=menus&sid=2302081511134871">
							<img src="https://timpviewbeta.provo.edu/wp-content/themes/pcsd-2018-theme/assets/icons/meal-menu.svg" alt="" />
							<span>School Meal Menus</span>
						</a>
					</li>
					<li>
						<a href="https://www.schoollunchapp.com/Terms.aspx?host=provo.schoollunchapp.com&apply=1">
							<img src="https://timpviewbeta.provo.edu/wp-content/themes/pcsd-2018-theme/assets/icons/apply-for-free-meals.svg" alt="" />
							<span>Apply for Free &amp; Reduced Meals</span>
						</a>
					</li>
					<li>
						<a href="https://timpviewbeta.provo.edu/timpview-map/">
							<img src="https://timpviewbeta.provo.edu/wp-content/themes/pcsd-2018-theme/assets/icons/school-map.svg" alt="" />
							<span>School Map</span>
						</a>
					</li>
					<li>
						<a href="http://www.infofinderi.com/ifi/?cid=PCSD1CX16HAYK">
							<img src="https://timpviewbeta.provo.edu/wp-content/themes/pcsd-2018-theme/assets/icons/bus-routes.svg" alt="" />
							<span>Bus Routes</span>
						</a>
					</li>
				</ul>
			</section>
		</aside>