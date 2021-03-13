<?php get_header();

get_template_part( 'content/archive-header' );

do_action( 'after_archive_header' ); ?>

<div <?php post_class(); ?>>
	<article>
		<?php do_action( 'post_before' ); ?>
		<?php ct_period_featured_image(); ?>
		<div class="post-container">
			<div class='post-header'>
				<h1 class='post-title'><?php the_title(); ?></h1>
			</div>
			<div class="post-content">
				<?php ct_period_output_last_updated_date(); ?>
				<?php the_field('details'); ?>
				<?php wp_link_pages( array(
					'before' => '<p class="singular-pagination">' . esc_html__( 'Pages:', 'period' ),
					'after'  => '</p>',
				) ); ?>
				<?php do_action( 'post_after' ); ?>
			</div>
			<div class="post-meta">
				<nav class="further-reading">
					<div class="previous">
						<a href="<?php echo get_post_type_archive_link( 'class' ); ?>">Back to Classes</a>						
					</div>
				</nav>
			</div>
		</div>
	</article><?php

ct_period_pagination();

get_footer();