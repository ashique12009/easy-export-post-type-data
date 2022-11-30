(function( $ ) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	$(document).ready(function() {
		$('#export-submit-btn').click(function() {
			// e.preventDefault();
			let action = $(this).attr("data-action");
			let nonce = $(this).attr("data-nonce");
			let post_type = $("#post-type-setting").val();

			$.ajax({
				type: "post",
				dataType: "json",
				url: myAjax.ajaxurl,
				data: {action: action, post_type: post_type, nonce: nonce},
				success: function(response) {
					console.log('res', response);
					if(response.type == "success") {
						//$("#vote_counter").html(response.vote_count);
						console.log('res', response);
					}
					else {
						alert("Your vote could not be added")
					}
				}
			});
		});
	});

})( jQuery );
