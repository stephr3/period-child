

// Initial session when a user first visit the site.
if(sessionStorage.length === 0){
	sessionStorage.setItem('happening-now', 'true');
}	

// This JS file will work on all period theme pages. 
// this is a naive way to limit this code to the search page .../classes/
if((/\/classes\/\B|\/classes\/page\/\d\//).test(window.location.pathname)){

/////////////////////////////////////////////////////////////////////
// Filter collaspe state persist on reload and pagination
/////////////////////////////////////////////////////////////////////
	function filterButton(){
		let collBtn = document.getElementById("collapse-button");
		let hdnInput = document.getElementById("collapse");

		collBtn.addEventListener("click", function () {
			setTimeout(function() {
				if (collBtn.classList.contains('collapsed')){
					hdnInput.value = 0;
				} else {
					hdnInput.value = 1;
				} 
			}, 100);
		});
	};

	function paginationFilterState(){
		let pageNumberBtns = document.querySelectorAll('a.page-numbers');
		let hdnInput = document.getElementById("collapse");

		for(btn of pageNumberBtns) {
			btn.addEventListener("click", function() {
				this.setAttribute('href', this.href.replace(/clpse=\d/, 'clpse='+ hdnInput.value));
			});
		}
	}

// Instead of using session Storage we can use the search query to load filter values
// this solution us better because when a user adjust the url, the new picked the values will be reflected 
// in the filters section
// TODO
	function LoadFiltersStateFromUrl() {
		let searchQuery = window.location.search;
	}
/////////////////////////////////////////////////////////////////////
// Filter values presist on reload
/////////////////////////////////////////////////////////////////////
	function filtersSaveState() {
		let checkboxItems = document.getElementsByClassName("checkbox");
		let dropdownItems = document.getElementsByClassName("dropdown");
		Array.from(checkboxItems, child => {
			child.addEventListener("change", () => {
				sessionStorage.setItem(child.id, child.checked);
			});
		})
		Array.from(dropdownItems, child => {
			child.addEventListener("change", () => {
				sessionStorage.setItem(child.id, child.selectedIndex);
			});
		})
	}

	function filtersLoadState(){
		let checkboxItems = document.getElementsByClassName("checkbox");
		let dropdownItems = document.getElementsByClassName("dropdown");
		for(child of checkboxItems) {
			child.checked = sessionStorage.getItem(child.id) === 'true' ? true : false;  
		}
		for(child of dropdownItems) {
			child.selectedIndex = parseInt(sessionStorage.getItem(child.id));
		}
	}

	// sessionStorage.clear();

	filtersLoadState();
	filtersSaveState();
	filterButton();
	paginationFilterState();


}
