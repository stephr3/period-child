<?php get_header();

get_template_part( 'content/archive-header' );

do_action( 'after_archive_header' ); ?>

<div id="loop-container" class="loop-container">
	<div class="filters-container"><h2>Placeholder for Future Titles based on Custom Query</h2></div>
    <?php
    while(have_posts()) {
        the_post(); 
        get_template_part('content-archive-resources');
       }
    ?>
</div><?php

ct_period_pagination();

get_footer();

