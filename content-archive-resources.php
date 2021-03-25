<div <?php post_class(); ?>>
	<article>
		<?php do_action( 'archive_post_before' ); ?>
		<?php ct_period_featured_image(); ?>
		<div class="post-container">
			<div class='post-header'>
				<?php do_action( 'sticky_post_status' ); ?>
				<h2 class='post-title'>
					<a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
				</h2>
			</div>
			<div class="post-content">
				<?php ct_period_excerpt(); ?>
				<form action='<?php the_field('resource_link');?>' target="_blank">
				    <input type="submit" value="Visit Resource Site"/>
                </form>
				<br>
				<ul class="no-bullets">
                <?php if( get_field('tag') ): ?>
						<li><?php the_field('tag'); ?></li>
					<?php endif ?>
                </ul>
			</div>
		</div>
	</article>
	<?php do_action( 'archive_post_after' ); ?>
</div>