<div <?php post_class(); ?>>
	<article>
		<?php do_action( 'archive_post_before' ); ?>
		<?php ct_period_featured_image(); ?>
		<div class="post-container">
			<div class='post-header'>
				<?php do_action( 'sticky_post_status' ); ?>
				<h2 class='post-title'>
					<a href="<?php echo esc_url( get_permalink() ); ?>"><?php 
											if(get_field('class_format') == 'Virtual'):
									   			?>
									   		V 
										    <?php 
										    	endif;
												if(get_field('class_format') == 'In-Person'):
										    ?>
										    I
										    <?php 
										    	endif;
												if(get_field('class_format') == 'Hybrid' || get_field('class_format') == 'Flexible'):
										    ?>
										    H
										    <?php	
										    	endif;								   
										    the_title(); 
										    ?>
										    	
					</a>
				</h2>
			</div>
			<div class="post-content">
				<ul class="no-bullets">
					<li><b>Address:</b> <?php the_field('address'); ?> <?php the_field('city'); ?>, <?php the_field('state'); ?> <?php the_field('zip'); ?></li>				

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
				</ul>
				<a href="<?php echo esc_url( get_permalink() ); ?>">More details...</a>				
			</div>
		</div>
	</article>
	<?php do_action( 'archive_post_after' ); ?>
</div>