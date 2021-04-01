<div <?php post_class(); ?>>
	<article>
		<?php do_action( 'archive_post_before' ); ?>
		<?php ct_period_featured_image(); ?>
		<div class="post-container">
			<div class='post-header'>
				<?php do_action( 'sticky_post_status' ); ?>
				<h1 class='post-title'>
					<a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
				</h1>
			</div>
			<div class="post-content">
				<?php ct_period_excerpt(); ?>
				<form action='<?php echo esc_url( get_permalink() );?>' >
				    <input class='more-button' type="submit" value="Learn More"/>
                </form>

				<form action='<?php the_field('resource_link');?>' target="_blank">
				    <input class='more-button' type="submit" value="Visit Resource Site"/>
                </form>
			</div>
		</div>
	</article>
	<?php do_action( 'archive_post_after' ); ?>
</div>