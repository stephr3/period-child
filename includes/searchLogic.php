<?php

function searchResults() {
	include 'filter-values.php';

	$filters = array(
		'relation' => 'AND',
		array(
			'key' => 'happening_now',
			'value' => "Yes",
			'compare' => '='
		),
	);

	filter_generator_multivalue('region', is_set_in_url('rn'), $filters, $regions);
	filter_generator_multivalue('class_type', is_set_in_url('ct'),  $filters, $classTypes);
	filter_generator_multivalue('class_format', is_set_in_url('cf'), $filters, $classFormats);
	filter_generator_multivalue('level', is_set_in_url('lvl'), $filters, $levels);
	filter_generator_multivalue('days_offered', is_set_in_url('do'), $filters, $days);
	filter_generator_multivalue('time_of_day', is_set_in_url('tod'), $filters, $timeOfDay);
	filter_generator_multivalue('cost', is_set_in_url('c'), $filters, $costs);
	filter_generator_singlevalue('organization',is_set_in_url('org'), $filters, $organization);
	filter_generator_singlevalue('childcare', is_set_in_url('cc'), $filters, $childcareSupport);
	filter_generator_singlevalue('registration_required',is_set_in_url('rgst'), $filters, $registrationType);
	filter_generator_singlevalue('volunteers_needed', is_set_in_url('vn'), $filters, $Yes);


	$wp_query = new WP_query(array(
		'post_type' 		=> 'class',
		'posts_per_page'	=> 10,
		'paged'				=> get_query_var('paged') ? get_query_var('paged') : 1,
		'meta_key' 			=> 'happening_now',
		'orderby'			=> 'meta_value',
		'order' 			=> 'DESC', 
		's' 				=> sanitize_text_field(is_set_in_url('s')),
		'meta_query'		=> $filters,
	));

	return $wp_query;
}

function filter_generator_singlevalue($key, $value, &$toPopulate, $mappedValues) {
	if(empty($value) || !array_key_exists(sanitize_text_field($value), $mappedValues)) {
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
	if(empty($value)){
		return;
	}

	for($i = 0; $i < count($value); ++$i) {
		if(array_key_exists(sanitize_text_field($value[$i]), $mappedValues)){
			array_push($toPopulate, array(
				'key' => $key,
				'value' => $mappedValues[sanitize_text_field($value[$i]) -1],
				'compare' => 'LIKE',
			));
		}
	}
}

function is_set_in_url($param) {
	return isset($_GET[$param]) ? $_GET[$param] : "";
}


?>