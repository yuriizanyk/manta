const ready = (callback) => {
	if (document.readyState != "loading") callback();
	else document.addEventListener("DOMContentLoaded", callback);
}
  
ready(() => {


	/*
	* Prevent CF7 form duplication emails
	*/
	let cf7_forms_submit = document.querySelectorAll('.wpcf7-form .wpcf7-submit');

	if( cf7_forms_submit ) {
		cf7_forms_submit.forEach((element) => {

			element.addEventListener('click', (e) => {

				let form = element.closest('.wpcf7-form');

				if( form.classList.contains('submitting') ) {
					e.preventDefault();
				}
		    
			});

		});
	}

	
	/* SCRIPTS GO HERE */
	
});