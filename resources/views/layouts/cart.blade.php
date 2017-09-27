@section("cart")
	<div class="shopping-cart">
		<div class="cart-overlay hidden"></div>
		<div class="cart-container">
			<header class="cart-header">
				<a class="close" href="javascript:void(0);">
					<i class="glyphicon glyphicon-menu-right" aria-hidden="true"></i>
				</a>
				<h2 class="title">Your Cart</h2>
			</header>
			<div class="content">
				<span class="cart-empty">Your Cart Is Empty</span>	
				<a href="{{ url('/products') }}" class="btn btn-primary btn-shop-now">Shop Now</a>
			</div>
		</div>
	</div>
@show