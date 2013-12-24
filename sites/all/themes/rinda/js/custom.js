/* =========================================================
Home page slider
============================================================ */
jQuery(function() {
	jQuery('.flexslider').flexslider({
		  animation: "slide",
		  slideshow: true, 
		  controlsContainer: ".flexslider-container"
  		});
	});
/* =========================================================
Featured news slider
============================================================ */
jQuery(function() {
	jQuery('#feature-gall').carouFredSel({
		responsive: true,
		prev: '#prev1',
		next: '#next1',
		width: '100%',
		scroll: 1,
		auto: false,
		items: {
			width: 200,
			visible: {
				min: 1,
				max: 3
			}
		}
	});
});
