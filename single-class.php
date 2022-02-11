<?php get_header();

get_template_part( 'content/archive-header' );

do_action( 'after_archive_header' ); ?>

<div <?php post_class(); ?>>
	<article>
		<div class="post-container">
			<div class='post-header'>
				<h1 class='post-title'><?php the_title(); ?></h1>
			</div>
			<div class="post-content">
				<p class="last-updated">Last updated on <?php echo get_the_modified_date() ?></p>
				<h3>Basic Information</h3>
				<ul class="no-bullets">
					<li><b>Region:</b> <?php the_field('region'); ?></li>
					<li><b>Address:</b> <?php the_field('address'); ?> <?php the_field('city'); ?>, <?php the_field('state'); ?> <?php the_field('zip'); ?></li>
				</ul>

				<h3>Contact Information</h3>
				<ul class="no-bullets">
					<?php if( get_field('contact') ): ?>
						<li><b>Contact:</b> <?php the_field('contact'); ?></li>
					<?php endif ?>						
					<?php if( get_field('phone') ): ?>
						<li><b>Phone:</b> <?php the_field('phone'); ?></li>
					<?php endif ?>						
					<?php if( get_field('email') ): ?>
						<li><b>Email:</b> <?php the_field('email'); ?></li>
					<?php endif ?>						
					<?php if( get_field('url') ): ?>
						<li><b>URL:</b> <a href = "<?php the_field('url'); ?>" target=”_blank”><?php the_field('url'); ?></a> </li>
					<?php endif ?>				
				</ul>

				<h3>Class Details</h3>
				<ul class="no-bullets">
					<?php if( get_field('organization') ): ?>
						<li><b>Organization:</b> <?php the_field('organization'); ?></li>
					<?php endif ?>

					<?php if( get_field('class_format') ): ?>
						<li><b>Format:</b> <?php the_field('class_format'); ?></li>
					<?php endif ?>

					<?php if( get_field('class_type') ): ?>
						<li><b>Type:</b> <?php the_field('class_type'); ?></li>
					<?php endif ?>

					<?php if( get_field('level') ): ?>
						<li><b>Level:</b> <?php the_field('level'); ?></li>
					<?php endif ?>

					<?php if( get_field('cost') ): ?>
						<li><b>Cost:</b> <?php the_field('cost'); ?></li>
					<?php endif ?>

					<?php if( get_field('days_offered') ): ?>
						<li><b>Days:</b> <?php the_field('days_offered'); ?></li>
					<?php endif ?>

					<?php if( get_field('time_of_day') ): ?>
						<li><b>Times:</b> <?php the_field('time_of_day'); ?></li>
					<?php endif ?>

					<?php if( get_field('childcare') ): ?>
						<li><b>Childcare:</b> <?php the_field('childcare'); ?></li>
					<?php endif ?>

					<?php if( get_field('registration_required') ): ?>
						<li><b>Registration:</b> <?php the_field('registration_required'); ?></li>
					<?php endif ?>

					<?php if( get_field('summer_classes') == 'Yes' ): ?>
						<li><b>Summer Classes:</b> Summer classes are available.</li>
					<?php endif ?>
				</ul>

				<?php if( get_field('description') ): ?>			
				<h3>Description</h3>
				<p class="class-description"><?php the_field('description'); ?></p>
				<?php endif ?>
				<ul class="no-bullets">
					<?php if( get_field('volunteers_needed') == 'Yes' ): ?>
						<h3>Volunteer Information</h3>
						<?php if( get_field('vol_coordinator_name') ): ?>
							<li><b>Coordinator:</b> <?php the_field('vol_coordinator_name'); ?></li>
						<?php endif ?>							
						<?php if( get_field('vol_contact') ): ?>
							<li><b>Contact:</b> <?php the_field('vol_contact'); ?></li>
						<?php endif ?>						
						<?php if( get_field('vol_time_commitment') ): ?>
							<li><b>Time Commitment:</b> <?php the_field('vol_time_commitment'); ?></li>
						<?php endif ?>						
						<?php if( get_field('vol_time_slots') ): ?>
							<li><b>Times Available:</b> <?php the_field('vol_time_slots'); ?></li>
						<?php endif ?>						
						<?php if( get_field('vol_assignment_type') ): ?>
							<li><b>Duties:</b> <?php the_field('vol_assignment_type'); ?></li>
						<?php endif ?>						
						<?php if( get_field('vol_training_offered') == 'Yes' ): ?>
							<li><b>Training:</b> Training is offered for this position.</li>
						<?php endif ?>	
						<?php if( get_field('vol_training_offered') == 'No' ): ?>
							<li><b>Training:</b> Training is not offered for this position.</li>
						<?php endif ?>

					<?php else: ?>
						<h3>Volunteer Information</h3>
						<li><i>No volunteers needed at this time.</i></li>	
					<?php endif ?>
				</ul>
			</div>
			<?php if(current_user_can( 'manage_options' )): ?>
						<h3>Administrative Notes</h3>
						<p><b>Students Served:</b> 
							<?php if( get_field('students_served') ): ?>
								<?php the_field('students_served'); ?>
							<?php else: ?>
								<i>Not recorded.</i>
							<?php endif ?>
						</p>
						<p class="class-description"><b>Notes:</b> 
							<?php if( get_field('notes') ): ?>
								<?php the_field('notes'); ?>
							<?php else: ?>
								<i>No notes recorded.</i>
							<?php endif ?>						</p>
			<?php endif ?>
			<nav class="further-reading">
				<div class="previous">
					<a href="<?php echo get_post_type_archive_link( 'class' ); ?>">Back to Classes</a>						
				</div>
			</nav>
		</div>
	</article>

<?php
	$mapLocation = get_field('map_location');
?>
<div class="acf-map">
	<div class="marker" data-lat="<?php echo $mapLocation['lat']; ?>" data-lng="<?php echo $mapLocation['lng'] ?>" >
		<h3><?php the_title(); ?></h3>
		<?php echo $mapLocation['address']; ?> 
		<br>
		<?php the_field('phone'); ?>
	</div>
</div>	
<?php

get_footer();
