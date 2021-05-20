<?php get_header();

get_template_part( 'content/archive-header' );

do_action( 'after_archive_header' ); ?>
<div id="loop-container" class="loop-container">
	

    <?php
        while (have_posts() ) :
            the_post();
            get_template_part('content-archive-real-world-learning');
        endwhile;
    ?>
</div><?php

ct_period_pagination(); 

get_footer();