
var paperMenu = {
	$window: $('#paper-window'),
	$paperFront: $('#paper-front'),
	$nrmenu: $('.nrmenu'),
	offset: 1800,
	pageHeight: $('#paper-front').outerHeight(),
	
	open: function() {
		this.$window.addClass('tilt');
		this.$nrmenu.off('click');
		$('#container, .nrmenu').on('click', this.close.bind(this));
		this.nrmenuFix(true);
		console.log('opening...');
	},
	close: function() {
		this.$window.removeClass('tilt'); 
		$('#container, .nrmenu').off('click');
		this.$nrmenu.on('click', this.open.bind(this));
		this.nrmenuFix(false);
		console.log('closing...');
	},
	updateTransformOrigin: function() {
		scrollTop = this.$window.scrollTop();
		equation = (scrollTop + this.offset) / this.pageHeight * 100;
		this.$paperFront.css('transform-origin', 'center ' + equation + '%');
	},
	//nrmenu icon fix to keep its position
	nrmenuFix: function(opening) {
			if(opening) {
				$('.nrmenu').css({
					position: 'absolute',
					top: this.$window.scrollTop() + 30 + 'px'
				});
			} else {
				setTimeout(function() {
					$('.nrmenu').css({
						position: 'fixed',
						top: '30px'
					});
				}, 300);
			}
		},
	bindEvents: function() {
		this.$nrmenu.on('click', this.open.bind(this));
		$('.close').on('click', this.close.bind(this));
		this.$window.on('scroll', this.updateTransformOrigin.bind(this));
	},
	init: function() {
		this.bindEvents();
		this.updateTransformOrigin();
	},
};

paperMenu.init();
    
    
