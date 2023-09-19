
$(function() {
	$('.galery__inner').magnificPopup({
		delegate: 'a',
		type: 'image',
		mainClass: 'mfp-img-mobile',
		gallery: {
			closeBtnInside: true,
			EscapeKey: true,
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1],
			// Will preload 0 - before current, and 1 after the current image
		},
		
	});
});


// $(function() {
// 	$('.galery__inner').magnificPopup({
// })
// })