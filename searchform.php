<?php 

$search = '';
$post_type = 'class';

if(isset($_GET['s'])) {
	$search = sanitize_text_field($_GET['s']);
}

?>

<form id="search-form" onsubmit="searchFormSubmit(event)" >
	<div class="main-search-content-container container" >
		<div class="search-container container">
			<input type="text" placeholder="Search.." name="s" value="<?php echo esc_attr($search); ?>">
			<button type="submit"><i class="fa fa-search" aria-hidden="true"></i> Search</button>
		</div>
	</div>
</form>
