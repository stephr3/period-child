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
				<h3>Description</h3>
                <?php the_content(); ?>
                
                <form action='<?php the_field('website_link');?>' target="_blank">
                    <input type="submit" value="Visit Resource Site" />
                </form>
                <br>
				
				<h4>Address</h4>
                <ul class="no-bullets">
                <?php if( get_field('address') ): ?>
						<li><?php the_field('address'); ?></li>
					<?php endif ?>
                </ul>	

                
                <h4>Contact</h4>
                <ul class="no-bullets">
                <?php if( get_field('contact_email') ): ?>
                	<li><?php the_field('contact_email'); ?></li>
                <?php endif ?>
                <?php if( get_field('contact_number') ): ?>
                    <ul class="no-bullets">
                	<li><?php the_field('contact_number'); ?></li>
                <?php endif ?>
                </ul>	
                                
			</div>
			<nav class="further-reading">
				<div class="previous">
					<a href="<?php echo get_post_type_archive_link( 'realworldlearning' ); ?>">Back to Resources</a>						
				</div>
			</nav>
		</div>
	</article><?php

ct_period_pagination();

get_footer();