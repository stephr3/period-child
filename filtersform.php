<?php 

$post_type = 'class';
$search = "";

if(isset($_GET['s'])) {
	$search = sanitize_text_field($_GET['s']);
}

?>

<form method="GET" id="filters-form" action="<?php echo get_post_type_archive_link( $post_type ); ?>">
	<input type="text" hidden name="s" id="s" value="<?php echo esc_attr($search); ?>">
	<div class="filters-options container">
		<div class="col">
			<div class="region container col">
				<h1>Filter Search</h1>
				<label class="filters-label"> 
					<span > Regions </span>
				</label>
				<div class="form-group" id="rn">
					<input type="checkbox" class="checkbox" id="north-northeast" name="rn[]" value="1">
					<label for="north-northeast"> North/Northeast </label><br>
					<input type="checkbox" class="checkbox" id="south-southeast" name="rn[]" value="2">
					<label for="south-southeast"> South/Southeast </label><br>
					<input type="checkbox" class="checkbox" id="southwest" name="rn[]" value="3">
					<label for="southwest"> Southwest </label><br>
					<input type="checkbox" class="checkbox" id="downtown" name="rn[]" value="4">
					<label for="downtown"> Downtown </label><br>
					<input type="checkbox" class="checkbox" id="gresham" name="rn[]" value="5">
					<label for="gresham"> Gresham </label><br>
					<input type="checkbox" class="checkbox" id="washington-county" name="rn[]" value="6">
					<label for="washington-county"> Washington County </label><br>
					<input type="checkbox" class="checkbox" id="clark-county" name="rn[]" value="7">
					<label for="clark-county"> Clark County </label><br>
					<input type="checkbox" class="checkbox" id="other-areas" name="rn[]" value="8">
					<label for="other-areas"> Other Areas </label>
				</div>
			</div>
			<div class="class-type container col">
				<label class="filters-label" 
					<span > Class Type </span>
				</label>
				<div class="form-group" id="ct">
					<input type="checkbox" class="checkbox" id="esl" name="ct[]" value="1">
					<label for="esl"> ESL </label><br>
					<input type="checkbox" class="checkbox" id="ged" name="ct[]" value="2">
					<label for="ged"> GED </label><br>
					<input type="checkbox" class="checkbox" id="citizenship" name="ct[]" value="3">
					<label for="citizenship"> Citizenship </label><br>
					<input type="checkbox" class="checkbox" id="conversation" name="ct[]" value="4">
					<label for="conversation"> Conversation </label><br>
					<input type="checkbox" class="checkbox" id="spanish-abe" name="ct[]" value="5">
					<label for="spanish-abe"> Spanish ABE </label><br>
					<input type="checkbox" class="checkbox" id="1:1-Tutoring" name="ct[]" value="6">
					<label for="1:1-Tutoring"> 1:1/Tutoring </label><br>
					<input type="checkbox" class="checkbox" id="intercambio" name="ct[]" value="7">
					<label for="intercambio"> Intercambio </label><br>
					<input type="checkbox" class="checkbox" id="workplace-esp" name="ct[]" value="8">
					<label for="workplace-esp"> Workplace/ESP </label><br>
					<input type="checkbox" class="checkbox" id="excursion" name="ct[]" value="9">
					<label for="excursion"> Excursion </label><br>
					<input type="checkbox" class="checkbox" id="language-specific" name="ct[]" value="10">
					<label for="language-specific"> Language Specific </label><br>
					<input type="checkbox" class="checkbox" id="other-resource" name="ct[]" value="11">
					<label for="other-resource"> Other Resource </label><br>				
					<input type="checkbox" class="checkbox" id="all" name="ct[]" value="12">
					<label for="all"> All </label>
				</div>
			</div>
			<div class="class-format container col">
				<label class="filters-label"> 
					<span > Class Format </span>
				</label>
				<div class="form-group" id="cf">
					<input type="checkbox" class="checkbox" id="virtual" name="cf[]" value="1">
					<label for="virtual"> Virtual </label><br>
					<input type="checkbox" class="checkbox" id="hybrid" name="cf[]" value="2">
					<label for="hybrid"> Hybrid </label><br>
					<input type="checkbox" class="checkbox" id="in-person" name="cf[]" value="3">
					<label for="in-person"> In Person </label><br>				
					<input type="checkbox" class="checkbox" id="flexible" name="cf[]" value="4">
					<label for="flexible"> Flexible </label>
				</div>
			</div>
			<div class="level container col">
				<label class="filters-label"> 
					<span > Level </span>
				</label>
				<div class="form-group" id="lvl">
					<input type="checkbox" class="checkbox" id="multilevel" name="lvl[]" value="1">
					<label for="multilevel"> Multilevel </label><br>
					<input type="checkbox" class="checkbox" id="beginning" name="lvl[]" value="2">
					<label for="beginning"> Beginning </label><br>
					<input type="checkbox" class="checkbox" id="intermediate" name="lvl[]" value="3">
					<label for="intermediate"> Intermediate </label><br>
					<input type="checkbox" class="checkbox" id="advanced" name="lvl[]" value="4">
					<label for="advanced"> Advanced </label><br>	
					<input type="checkbox" class="checkbox" id="literacy" name="lvl[]" value="5">
					<label for="literacy"> Literacy </label><br>	
					<input type="checkbox" class="checkbox" id="ged" name="lvl[]" value="6">
					<label for="ged"> GED </label><br>	
					<input type="checkbox" class="checkbox" id="anylvl" name="lvl[]" value="7">
					<label for="any"> Any </label>
				</div>
			</div>
		</div >
		<div class="col">
			<div class="days container col">
				<label class="filters-label"> 
					<span > Days Offered </span>
				</label>
				<div class="form-group" id="do">
					<input type="checkbox" class="checkbox" id="monday" name="do[]" value="1">
					<label for="monday"> Monday </label><br>
					<input type="checkbox" class="checkbox" id="tuesday" name="do[]" value="2">
					<label for="tuesday"> Tuesday </label><br>
					<input type="checkbox" class="checkbox" id="wednesday" name="do[]" value="3">
					<label for="wednesday"> Wednesday </label><br>
					<input type="checkbox" class="checkbox" id="thursday" name="do[]" value="4">
					<label for="thursday"> Thursday </label><br>
					<input type="checkbox" class="checkbox" id="friday" name="do[]" value="5">
					<label for="friday"> Friday </label><br>	
					<input type="checkbox" class="checkbox" id="saturday" name="do[]" value="6">
					<label for="saturday"> Saturday </label><br>	
					<input type="checkbox" class="checkbox" id="sunday" name="do[]" value="7">
					<label for="sunday"> Sunday </label>
				</div>
			</div>
			<div class="time container col">
				<label class="filters-label"> 
					<span > Time of Day </span>
				</label>
				<div class="form-group" id="tod">
					<input type="checkbox" class="checkbox" id="morning" name="tod[]" value="1">
					<label for="morning"> Morning </label><br>
					<input type="checkbox" class="checkbox" id="afternoon" name="tod[]" value="2">
					<label for="afternoon"> Afternoon </label><br>
					<input type="checkbox" class="checkbox" id="evening" name="tod[]" value="3">
					<label for="evening"> Evening </label><br>	
					<input type="checkbox" class="checkbox" id="anytime" name="tod[]" value="4">
					<label for="any"> Any </label>
				</div>
			</div>
			<div class="cost container col">
				<label class="filters-label"> 
					<span > Cost </span>
				</label>
				<div class="form-group" id="c">
					<input type="checkbox" class="checkbox" id="free" name="c[]" value="1">
					<label for="free"> Free </label><br>
					<input type="checkbox" class="checkbox" id="fee-($)" name="c[]" value="2">
					<label for="fee-($)"> Fee ($) </label><br>	
					<input type="checkbox" class="checkbox" id="high-tuition-($$$)" name="c[]" value="3">
					<label for="high-tuition-($$$)"> High Tuition ($$$) </label>
				</div>
			</div>
			<div class="childcare container col">
				<label class="filters-label"> 
					<span > Childcare Support </span>
				</label>
				<div class="form-group" id="cc">
				  <select class="dropdown" name="cc" id="childcare">
				  	<option value selected data-i="0">- Select -</option>
				    <option value="1"> Children Welcome </option>
				    <option value="2"> Childcare Avaliable </option>
				    <option value="3"> No Childcare Avaliable </option>
				  </select>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="registration container col">
				<label class="filters-label"> 
					<span > Registration </span>
				</label>
				<div class="form-group" id="rgst">
				  <select class="dropdown" name="rgst" id="registration">
				  	<option value selected data-i="0">- Select -</option>
				    <option value="1"> Registration Required </option>
				    <option value="2"> Drop In </option>
				  </select>
				</div>
			</div>
			<div class="organization container col">
				<label class="filters-label"> 
					<span > Organization </span>
				</label>
				<div class="form-group" id="org">
				  <select class="dropdown" name="org" id="organization">
				  	<option value selected data-i="0">- Select -</option>
				    <option value="1"> Goodwill </option>
				    <option value="2"> SOAR </option>
				    <option value="3"> Lutheran Community Service </option>
				    <option value="4"> Multnomah County Library  </option>
				    <option value="5"> Torus </option>
				  </select>
				</div>
			</div>
			<div class="vol-needed container col">
				<label class="filters-label"> 
					<span > Volunteers needed? </span>
				</label>
				<div class="form-group" id="vn">
					<input type="checkbox" class="checkbox" id="volunteers-needed" name="vn" value="1">
					<label for="Yes"> Yes </label>
				</div>
			</div>
		</div>
	</div>
</form>