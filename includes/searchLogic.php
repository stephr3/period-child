<?php

function searchResults() {
	include 'filter-values.php';

	$filters = array(
		'relation' => 'AND',
	);

	filter_generator_multivalue('region', $_GET['rn'], $filters, $regions);
	filter_generator_multivalue('class_type', $_GET['ct'], $filters, $classTypes);
	filter_generator_multivalue('class_format', $_GET['cf'], $filters, $classFormats);
	filter_generator_multivalue('level', $_GET['lvl'], $filters, $levels);
	filter_generator_multivalue('days_offered', $_GET['do'], $filters, $days);
	filter_generator_multivalue('time_of_day', $_GET['tod'], $filters, $timeOfDay);
	filter_generator_multivalue('cost', $_GET['c'], $filters, $costs);
	filter_generator_singlevalue(' organization', $_GET['org'], $filters, $organization);
	filter_generator_singlevalue('childcare', $_GET['cc'], $filters, $childcareSupport);
	filter_generator_singlevalue('registration_required', $_GET['rgst'], $filters, $registrationType);
	filter_generator_singlevalue('volunteers_needed', $_GET['vn'], $filters, $Yes);
	filter_generator_singlevalue('happening_now', $_GET['hp'], $filters ,$Yes);

	$wp_query = new WP_query(array(
		'post_type' 		=> 'class',
		'posts_per_page'	=> 10,
		'paged'				=> get_query_var('paged') ? get_query_var('paged') : 1,
		'meta_key' 			=> 'happening_now',
		'orderby'			=> 'meta_value',
		'order' 			=> (sanitize_text_field($_GET['hp']) == '1') ? 'DESC' : 'ASC', 
		's' 				=> sanitize_text_field($_GET['s']),
		'meta_query'		=> $filters,
	));

	return $wp_query;
}

function filter_generator_singlevalue($key, $value, &$toPopulate, $mappedValues) {
	if(!$value || !is_numeric(sanitize_text_field($value))){
		return;
	}
	array_push($toPopulate, array(
		'key' => $key,
		'value' => $mappedValues[sanitize_text_field($value) -1],
		'compare' => '=',
	));
}

// Checkbox values are stored as an array object string, 'a:1:{i:0;s:11:"Citizenship";}',
// thus, we can only use LIKE instead of IN.
function filter_generator_multivalue($key, $value, &$toPopulate, $mappedValues) {
	if(!$value){
		return;
	}

	for($i = 0; sanitize_text_field($value[$i]); ++$i) {
		if(is_numeric(sanitize_text_field($value[$i]))){
			array_push($toPopulate, array(
				'key' => $key,
				'value' => $mappedValues[sanitize_text_field($value[$i]) -1],
				'compare' => 'LIKE',
			));
		}
	}
}


?>