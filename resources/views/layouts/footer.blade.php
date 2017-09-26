@section("footer")
	<footer class="foot">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-4">
					<h6>MENU</h6>
					<ul>
						<li><a href="{{ url('/') }}">Home</a></li>
		        <li><a href="{{ url('/products') }}">Products</a></li>
		        <li><a href="{{ url('/build-your-owns') }}">Biuld your own</a></li>
		        <li><a href="{{ url('/about-us') }}">About us</a></li>
		        <li><a href="{{ url('/contact') }}">Contact</a></li>
					</ul>
				</div>
				<div class="col-sm-4">
					<h6>FOLLOW US</h6>
					<a href="{{ url('/') }}" class="logo">
						<img src="{{ url('/images/logo-white.png') }}" alt="EquStar" title="EquStar">
					</a>
					<a href="javascript:void(0);" target="_blank" title="@equstar" alt="Facebook" class="social-networks">
						<i class="fa fa-facebook" aria-hidden="true"></i>
					</a>
					<a href="javascript:void(0);" target="_blank" title="@equstar" alt="Twitter" class="social-networks">
						<i class="fa fa-twitter" aria-hidden="true"></i>
					</a>
					<a href="javascript:void(0);" target="_blank" title="@equstar" alt="instagram" class="social-networks">
						<i class="fa fa-instagram" aria-hidden="true"></i>
					</a>
				</div>
				<div class="col-sm-4">
					<h6>NEWSLETTER</h6>
					<form action="" method="POST" id="suscribe-form" class="form-inline">
						<div class="form-group">					  
						  <div class="input-group">
						    <input type="email" class="form-control" name="email" id="email" placeholder="Email">				    
						    <span class="input-group-btn">
					        <button class="btn btn-default" type="submit">SUBMIT</button>
					      </span>
						  </div>					  
						</div>					
					</form>
					<span class="suscribe-message">Thanks! You've signed up successfully.</span>
				</div>
				<div class="col-sm-12">
					<span class="text-center rights">
						<i class="fa fa-copyright" aria-hidden="true"></i> EquStar 2017. ALL RIGHTS RESERVED.	
					</span>				
				</div>
			</div>
		</div>
	</footer>
@show