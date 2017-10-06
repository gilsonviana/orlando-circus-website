(function ($, root, undefined) {
	
	$(function () {

		'use strict';

		/* A simple and scalable hamburger menu using css transitions. */
		var isActive = false;

		$('.js-menu').on('click', function() {
			if (isActive) {
				$(this).removeClass('active');
				$('body').removeClass('menu-open');
			} else {
				$(this).addClass('active');
				$('body').addClass('menu-open');
			}

			isActive = !isActive;
		});
		
		var $form = $('#form');
		
		$form.submit(function(e) {
			
			console.log('form-submit-event');
			
			e.preventDefault();
			
			var $inputs = $form.find('input, textarea');
			
			var $serialized = $inputs.serialize();
			
			$.ajax({
				type: 'post',
				url: '../getquote.php',
				data: $serialized,
				success: function() {
					alert('hooray!');
				}
			});
			
		});
		
		// window.addEventListener("load", function() {
		//     var contactForm = document.getElementById("needs-validation");
		//     var contactFormSuccessAlert = document.getElementById("form-success-alert");
		    
		//     contactForm.addEventListener("submit", function(event) {
		//       if (contactForm.checkValidity() == false) {
		//         event.preventDefault();
		//         event.stopPropagation();
		//       } else {
		//         contactFormSuccessAlert.classList.add('hide-alert');
		//         contactForm.classList.add("was-validated");
		//       }      
		//     }, false);
		//   }, false);


	});
	
})(jQuery, this);


