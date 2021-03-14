<?php get_header();

get_template_part( 'content/archive-header' );

do_action( 'after_archive_header' ); ?>

<div id="loop-container" class="loop-container">
	<div class="filters-container">
		<form action="#">
			<div class="main-search-content-container">
			<div class="search-container">
				<input type="text" placeholder="Search.." name="search">
				<button type="submit"><i class="fa fa-search"></i></button>
			</div>
			<div class="filters-button-container">
				<button type="button" class="collapsible"> <span>Filters</span> </button>
			</div>
			</div>
			<div class="filters-options-container">
				<div class="region-container">
					<label class="filters-label"> 
						<span style="font-weight: bold;"> Regions </span>
					</label>
					<div class="form-group">
						<input type="checkbox" id="north-northeast" name="region" value="North/Northeast">
						<label for="north-northeast"> North/Northeast </label><br>
						<input type="checkbox" id="south-southeast" name="region" value="South/Southeast">
						<label for="south-southeast"> South/Southeast </label><br>
						<input type="checkbox" id="southwest" name="region" value="Southwest">
						<label for="southwest"> Southwest </label><br>
						<input type="checkbox" id="downtown" name="region" value="Downtown">
						<label for="downtown"> Downtown </label><br>
						<input type="checkbox" id="gresham" name="region" value="Gresham">
						<label for="gresham"> Gresham </label><br>
						<input type="checkbox" id="washington-county" name="region" value="Washington County">
						<label for="washington-county"> Washington County </label><br>
						<input type="checkbox" id="clark-county" name="region" value="Clark County">
						<label for="clark-county"> Clark County </label><br>
						<input type="checkbox" id="other-areas" name="region" value="Other Areas">
						<label for="other-areas"> Other Areas </label><br><br>
					</div>
				</div>
				<div class="class-type-container">
					<label class="filters-label"> 
						<span style="font-weight: bold;"> Class Type </span>
					</label>
					<div class="form-group">
						<input type="checkbox" id="esl" name="class_type" value="ESL">
						<label for="esl"> ESL </label><br>
						<input type="checkbox" id="ged" name="class_type" value="GED">
						<label for="ged"> GED </label><br>
						<input type="checkbox" id="citizenship" name="class_type" value="Citizenship">
						<label for="citizenship"> Citizenship </label><br>
						<input type="checkbox" id="conversation" name="class_type" value="Conversation">
						<label for="conversation"> Conversation </label><br>
						<input type="checkbox" id="spanish-abe" name="class_type" value="Spanish ABE">
						<label for="spanish-abe"> Spanish ABE </label><br>
						<input type="checkbox" id="1:1-Tutoring" name="class_type" value="1:1/Tutoring">
						<label for="1:1-Tutoring"> 1:1/Tutoring </label><br>
						<input type="checkbox" id="intercambio" name="class_type" value="Intercambio">
						<label for="intercambio"> Intercambio </label><br>
						<input type="checkbox" id="workplace-esp" name="class_type" value="Workplace/ESP">
						<label for="workplace-esp"> Workplace/ESP </label><br>
						<input type="checkbox" id="excursion" name="class_type" value="Excursion">
						<label for="excursion"> Excursion </label><br>
						<input type="checkbox" id="language-specific" name="class_type" value="Language Specific">
						<label for="language-specific"> Language Specific </label><br>
						<input type="checkbox" id="other-resource" name="class_type" value="Other Resource">
						<label for="other-resource"> Other Resource </label><br>				
						<input type="checkbox" id="all" name="class_type" value="All">
						<label for="all"> All </label><br><br>
					</div>
				</div>
				<div class="class-format-container">
					<label class="filters-label"> 
						<span style="font-weight: bold;"> Class Format </span>
					</label>
					<div class="form-group">
						<input type="checkbox" id="virtual" name="class_format" value="Virtual">
						<label for="virtual"> Virtual </label><br>
						<input type="checkbox" id="hybrid" name="class_format" value="Hybrid">
						<label for="hybrid"> Hybrid </label><br>
						<input type="checkbox" id="in-person" name="class_format" value="In Person">
						<label for="in-person"> In Person </label><br>				
						<input type="checkbox" id="flexible" name="class_format" value="Flexible">
						<label for="flexible"> Flexible </label><br><br>
					</div>
				</div>
				<div class="level-container">
					<label class="filters-label"> 
						<span style="font-weight: bold;"> Level </span>
					</label>
					<div class="form-group">
						<input type="checkbox" id="multilevel" name="level" value="Multilevel">
						<label for="multilevel"> Multilevel </label><br>
						<input type="checkbox" id="beginning" name="level" value="Beginning">
						<label for="beginning"> Beginning </label><br>
						<input type="checkbox" id="intermediate" name="level" value="Intermediate">
						<label for="intermediate"> Intermediate </label><br>
						<input type="checkbox" id="advanced" name="level" value="Advanced">
						<label for="advanced"> Advanced </label><br>	
						<input type="checkbox" id="literacy" name="level" value="Literacy">
						<label for="literacy"> Literacy </label><br>	
						<input type="checkbox" id="ged" name="level" value="GED">
						<label for="ged"> GED </label><br>	
						<input type="checkbox" id="any" name="level" value="Any">
						<label for="any"> Any </label><br><br>
					</div>
				</div>
				<div class="days-container">
					<label class="filters-label"> 
						<span style="font-weight: bold;"> Days Offered </span>
					</label>
					<div class="form-group">
						<input type="checkbox" id="monday" name="days_offered" value="Monday">
						<label for="monday"> Monday </label><br>
						<input type="checkbox" id="tuesday" name="days_offered" value="Tuesday">
						<label for="tuesday"> Tuesday </label><br>
						<input type="checkbox" id="wednesday" name="days_offered" value="Wednesday">
						<label for="wednesday"> Wednesday </label><br>
						<input type="checkbox" id="thursday" name="days_offered" value="Thursday">
						<label for="thursday"> Thursday </label><br>
						<input type="checkbox" id="friday" name="days_offered" value="Friday">
						<label for="friday"> Friday </label><br>	
						<input type="checkbox" id="saturday" name="days_offered" value="Saturday">
						<label for="saturday"> Saturday </label><br>	
						<input type="checkbox" id="sunday" name="days_offered" value="Sunday">
						<label for="sunday"> Sunday </label><br><br>
					</div>
				</div>
				<div class="time-container">
					<label class="filters-label"> 
						<span style="font-weight: bold;"> Time of Day </span>
					</label>
					<div class="form-group">
						<input type="checkbox" id="morning" name="time_of_day" value="Morning">
						<label for="morning"> Morning </label><br>
						<input type="checkbox" id="afternoon" name="time_of_day" value="Afternoon">
						<label for="afternoon"> Afternoon </label><br>
						<input type="checkbox" id="evening" name="time_of_day" value="Evening">
						<label for="evening"> Evening </label><br>	
						<input type="checkbox" id="any" name="time_of_day" value="Any">
						<label for="any"> Any </label><br><br>
					</div>
				</div>
				<div class="cost-container">
					<label class="filters-label"> 
						<span style="font-weight: bold;"> Cost </span>
					</label>
					<div class="form-group">
						<input type="checkbox" id="free" name="cost" value="Free">
						<label for="free"> Free </label><br>
						<input type="checkbox" id="fee-($)" name="cost" value="Fee ($)">
						<label for="fee-($)"> Fee ($) </label><br>	
						<input type="checkbox" id="high-tuition-($$$)" name="cost" value="High Tuition ($$$)">
						<label for="high-tuition-($$$)"> High Tuition ($$$) </label><br><br>
					</div>
				</div>
				<div class="childcare-container">
					<label class="filters-label"> 
						<span style="font-weight: bold;"> Childcare Support </span>
					</label>
					<div class="form-group">
					  <select name="childcare" id="childcare">
					  	<option value="" selected="selected" data-i="0">- Select -</option>
					    <option value="Children Welcome"> Children Welcome </option>
					    <option value="Childcare Avaliable"> Childcare Avaliable </option>
					    <option value="No Childcare Avaliable"> No Childcare Avaliable </option>
					  </select>
					</div>
				</div>
				<div class="registration-container">
					<label class="filters-label"> 
						<span style="font-weight: bold;"> Childcare Support </span>
					</label>
					<div class="form-group">
					  <select name="registration" id="registration">
					  	<option value="" selected="selected" data-i="0">- Select -</option>
					    <option value="Registration Required"> Registration Required </option>
					    <option value="Drop In"> Drop In </option>
					  </select>
					</div>
				</div>
				<div class="organization-container">
					<label class="filters-label"> 
						<span style="font-weight: bold;"> Organization </span>
					</label>
					<div class="form-group">
					  <select name="organization" id="organization">
					  	<option value="" selected="selected" data-i="0">- Select -</option>
					    <option value="Goodwill"> Goodwill </option>
					    <option value="SOAR"> SOAR </option>
					    <option value="Lutheran Community Service"> Lutheran Community Service </option>
					    <option value="Multnomah County Library "> Multnomah County Library  </option>
					    <option value="Torus"> Torus </option>
					  </select>
					</div>
				</div>
				<div class="vol-needed-container">
					<label class="filters-label"> 
						<span style="font-weight: bold;"> Volunteers needed? </span>
					</label>
					<div class="form-group">
						<input type="checkbox" id="yes" name="volunteers_needed" value=true>
						<label for="yes"> Yes </label><br><br>
					</div>
				</div>
				<div class="happening-now-container">
					<label class="filters-label"> 
						<span style="font-weight: bold;"> Happening now </span>
					</label>
					<div class="form-group">
						<input type="checkbox" checked id="yes" name="happening_now" value=true>
						<label for="yes"> Yes </label><br><br>
					</div>
				</div>
			</div>
		</form>
	</div>

    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            ct_period_get_content_template();
        endwhile;
    endif;
    ?>
</div><?php

ct_period_pagination();

get_footer();