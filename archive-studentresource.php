<?php get_header();

get_template_part( 'content/archive-header' );

do_action( 'after_archive_header' ); ?>

<div id="loop-container" class="loop-container">
	
    <?php
        $key = 'tag';
        $field = get_field_object($key); 
    if ($field) {
       foreach ($field['choices'] as $key => $value) {
        ?>
        <div class="filters-container"><h2> <?php echo ($value);  ?> </h2></div>        
       <?php 
             
      }                             
   }
?>
      
    <?php
    while(have_posts()) {
        the_post(); 
        
        get_template_part('content-archive-resources');
       }
    ?>
</div><?php

ct_period_pagination();

get_footer();

