// This JS file will work on all period theme pages. 
// this is a naive way to limit this code to the search page .../classes/
if((/\/classes\/\B|\/classes\/page\/\d\//).test(window.location.pathname)){

/////////////////////////////////////////////////////////////////////
// Filter values presist on reload
/////////////////////////////////////////////////////////////////////
	function parseUrl() {
		let searchQuery = window.location.search;
		let paramList = searchQuery.substring(1).split("&");
		let paramDict = {};
		for(param of paramList){
			let [key, value] = param.split("=");

			if(value === "" || value === "0" || key === "s"){
				continue;
			}
			key = decodeURIComponent(key);
			key = key.replace("[]", "");

			if (paramDict[key] === undefined){
				paramDict[key] = [value];
			}else {
				paramDict[key].push(value);

			}
		}
		return paramDict;
	}

	function loadFiltersStateFromUrl() {
		let filtersStatus = parseUrl();
		for([key, value] of Object.entries(filtersStatus)) {
			try{
				let filtersElements = document.getElementById(key).children;
				Array.from(value, choosen => {
					if( ["org", "rgst", "cc"].includes(key) ){
						filtersElements.item(0).item(choosen).selected = true;
					}else{
						filtersElements.item((choosen - "1") * 3).checked = true;
					}
				})
			}catch{
				continue;
			}
		}
	}

	function addFormSubmitToCheckboxAndDropdownFilters() {
		let checkboxItems = document.getElementsByClassName("checkbox");
		let dropdownItems = document.getElementsByClassName("dropdown");
		Array.from(checkboxItems, child => {
			child.addEventListener("change", function() {
				this.form.submit();
			});
		})
		Array.from(dropdownItems, child => {
			child.addEventListener("change", function () {
				this.form.submit();
			});
		})
	}

	// Not the most ideal solution but it works for now
	// This submit the filter form instead of the search form
	// when the user search a word the string gets copied to 
	// hidden input value when it submits the filter form
    function searchFormSubmit(e) { 
    	 e.preventDefault()
    	let searchValue = document.getElementById("search-form").s.value;
    	if(searchValue != ""){
    		document.getElementById("s").value = searchValue;
    		document.getElementById("filters-form").submit();
    	}
    }
	addFormSubmitToCheckboxAndDropdownFilters();
	loadFiltersStateFromUrl();
}
