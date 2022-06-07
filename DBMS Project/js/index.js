var els = document.querySelectorAll('.speak');
[].forEach.call(els, function(el) {
	el.addEventListener('click', function() {
		[].forEach.call(els, function(clk) {
			clk.classList.remove('active');
		});
		el.classList.add('active');
	});
});