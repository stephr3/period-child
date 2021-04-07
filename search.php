<?php get_header();

require get_theme_file_path('/includes/searchLogic.php');

$wp_query = searchResults();

get_template_part( 'content/archive-header' );

do_action( 'after_archive_header' ); ?>
<div id="loop-container" class="loop-container">
	<div class="filters-container">
		<?php get_search_form(); ?>
	</div>
    <?php
    if ( $wp_query->have_posts() ) :
        while ($wp_query->have_posts() ) :
            $wp_query->the_post();
            ct_period_get_content_template();
        endwhile;
    endif;
    ?>
</div><?php

ct_period_pagination();

get_footer();