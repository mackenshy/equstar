(function($){

	var shoppingCart = $('.shopping-cart');

	$('.cart').on('click', function(e) {
		e.preventDefault();
		openShoppingCart();
	});

	shoppingCart.find('.cart-header .close').on('click', function(e) {
		e.preventDefault();
		closeShoppingCart();
	});

	shoppingCart.find('.cart-overlay').on('click', function(e) {
		closeShoppingCart();
	}); 

	function openShoppingCart() {
		shoppingCart.find('.cart-container').toggleClass('open');
		shoppingCart.find('.cart-overlay').removeClass('hidden').addClass('show');
		$('body').css('overflow', 'hidden');
	}

	function closeShoppingCart() {
		shoppingCart.find('.cart-container').toggleClass('open');
		shoppingCart.find('.cart-overlay').removeClass('show').addClass('hidden');
		$('body').css('overflow', 'auto');
	}



})(jQuery);