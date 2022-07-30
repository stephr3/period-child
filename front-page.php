<?php get_header();

require get_theme_file_path('/includes/searchLogic.php');

$wp_query = new WP_query(array(
	'posts_per_page'	=> -1,
	'post_type' 		=> 'class',
	'meta_key' 			=> 'happening_now',
	'meta_value'		=> 'Yes'
	));
?>

<div class="acf-map">
    <?php
		if ( $wp_query->have_posts() ) :
        	while ($wp_query->have_posts() ) :
            	$wp_query->the_post();

				$mapLocation = get_field('map_location');

				if (!empty($mapLocation)){
					?>
					<div class="marker" data-lat="<?php echo $mapLocation['lat']; ?>" data-lng="<?php echo $mapLocation['lng'] ?>" >
						<h3><a href="<?php the_permalink(); ?>"><?php 
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
										    ?></a></h3>
						<?php echo $mapLocation['address']; ?> 
						<br>
						<?php the_field('phone'); ?>
					</div>

			<?php } ?>
				<?php
        	endwhile;
    	endif;
    ?>
</div><?php
	

get_footer();