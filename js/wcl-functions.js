const ready = (callback) => {
	if (document.readyState != "loading") callback();
	else document.addEventListener("DOMContentLoaded", callback);
}

ready(() => {


	/*
	* Prevent CF7 form duplication emails
	*/
	let cf7_forms_submit = document.querySelectorAll('.wpcf7-form .wpcf7-submit');

	if (cf7_forms_submit) {
		cf7_forms_submit.forEach((element) => {

			element.addEventListener('click', (e) => {

				let form = element.closest('.wpcf7-form');

				if (form.classList.contains('submitting')) {
					e.preventDefault();
				}

			});

		});
	}





	/* SCRIPTS GO HERE */







	// wcl-header

	if (document.querySelector('.wcl-header')) {

		let section = document.querySelector('.wcl-header');

		// Btn menu

		section.querySelector('.wcl-t1-btn-menu').addEventListener('click', function (e) {
			if (this.classList.contains('active')) {
				section.classList.remove('active')
				section.querySelector('.data-nav').classList.remove('active')
				this.classList.remove('active')
				document.querySelector('body').classList.remove('overflow-hidden')
			} else {
				section.classList.add('active')
				section.querySelector('.data-nav').classList.add('active')
				this.classList.add('active')
				document.querySelector('body').classList.add('overflow-hidden')
			}
		})

		// Menu

		if (window.matchMedia("(min-width: 1360px)").matches) {
			section.querySelectorAll('.data-menu li.mod-arrow').forEach(element => {
				element.addEventListener('mouseover', function (e) {
					section.querySelectorAll('.data-menu li.mod-arrow.active').forEach(element_2 => {
						element_2.classList.remove('active')
					});

					centerBlock(element.querySelector('.wcl-mega-menu'))
					element.classList.add('active')
				})
			});

			section.addEventListener('click', function (e) {
				if (!e.target.closest('.wcl-mega-menu')) {
					if (section.querySelector('.data-menu li.mod-arrow.active')) {
						section.querySelector('.data-menu li.mod-arrow.active').classList.remove('active')
					}
				}
			})

			section.addEventListener('mouseleave', function (e) {
				if (section.querySelector('.data-menu li.mod-arrow.active')) {
					section.querySelector('.data-menu li.mod-arrow.active').classList.remove('active')
				}
			})

		} else {
			section.querySelectorAll('.data-menu li.mod-arrow').forEach(element => {
				element.addEventListener('click', function (e) {
					section.querySelectorAll('.data-menu li.mod-arrow.active').forEach(element_2 => {
						if (element_2 !== this) {
							element_2.classList.remove('active')
						}
					});

					if (element.classList.contains('active')) {
						element.classList.remove('active')
					} else {
						element.classList.add('active')
					}
				})
			});
		}



		function centerBlock(element) {
			var block = element; // Replace 'your-block-id' with the actual ID of your block
			var windowWidth = window.innerWidth;
			var blockWidth = block.offsetWidth;

			if (blockWidth < windowWidth * 0.8) {
				var leftOffset = (windowWidth - blockWidth) / 2;
				console.log(blockWidth)
				console.log(leftOffset)
				block.style.left = leftOffset + 'px';
			} else {
				block.style.left = ''; // Reset the left offset if the block width exceeds the threshold
			}
		}
	}


});