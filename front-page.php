<?php get_header();

require get_theme_file_path('/includes/searchLogic.php');

$wp_query = new WP_query(array(
	'posts_per_page'	=> -1,
	'post_type' 		=> 'class',
	'meta_key' 			=> 'happening_now',
	'meta_value'		=> 'Yes'
	));
?>

<div class="front-page-container">
	<p>Explore the map below or <a href="<?php get_home_url()?>/classes" style="color:#206b9f; font-size: 1.1em;">click here</a> to search for an ESL class in the Portland Metro area.</p>
	<p>To search for online classes only, <a href="<?php get_home_url()?>/classes/?s=&cf%5B%5D=1&cc=&rgst=&org=" style="color:#206b9f; font-size: 1.1em;">click here</a>.</p>
	<p><span class="dashicons dashicons-laptop"></span>: Virtual Classes <span class="dashicons dashicons-admin-users"></span>: In-Person Classes</p>
</div>

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
											if(in_array('Virtual', get_field('class_format'))):
									   			?>
									   		<span class="dashicons dashicons-laptop"></span>
										    <?php
										    	endif;
												if(in_array('In Person', get_field('class_format'))):
										    ?>
										    <span class="dashicons dashicons-admin-users"></span>
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
