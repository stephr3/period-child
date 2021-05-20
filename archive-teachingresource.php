<?php get_header();

get_template_part( 'content/archive-header' );

do_action( 'after_archive_header' ); ?>

<div id="loop-container" class="loop-container">
	
    <?php
        $key = 'category';
        $field = acf_get_field($key);
      
    if ($field) {
       foreach ($field['choices'] as $key => $value) {
        $taggedPosts = new WP_Query(array(
            'post_type' => 'teachingresource',
            'posts_per_page' => 10,
            'meta_value'=> $value
         ));
        ?>
        <div class="filters-container">
        <h2> <?php echo ($value);  ?>  </h2>
           <button class="expand-btn" data-toggle="collapse" data-target="#resource-items-<?php echo($value)?>">  <i class="fas fa-chevron-down"></i> </button>  
        </div>    
                
       <?php 
         while($taggedPosts->have_posts()) {
            $taggedPosts->the_post(); ?>
            <div id="resource-items-<?php echo($value)?>" class="collapse">
            <?php            
            get_template_part('content-archive-resources');?>
            </div><?php
           } 
      }                             
   }
?>
    
</div>

<?php

ct_period_pagination();

get_footer();

