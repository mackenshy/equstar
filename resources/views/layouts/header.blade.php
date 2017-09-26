@section("header")
	<nav class="navbar navbar-default navbar-fixed-top menu">
	  <div class="container-fluid">
	    <div class="navbar-header">
	    	<a href="javascipt:void(0);" class="navbar-toggle collapsed cart">
	      	<i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
	      </a>
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>	      
	      <a class="navbar-brand" href="{{ url('/') }}">
	      	<img src="{{ url('/images/logo.png') }}" alt="EquStar" title="EquStar">
	      </a>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a></li>
	        <li><a href="{{ url('/products') }}">Products</a></li>
	        <li><a href="{{ url('/build-your-owns') }}">Biuld your own</a></li>
	        <li><a href="{{ url('/about-us') }}">About us</a></li>
	        <li><a href="{{ url('/contact') }}">Contact</a></li>
	      </ul>	      

	      <ul class="nav navbar-nav navbar-right">
	      	<li><a href="tel:XXXX"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +1 800 - 3787 827</a></li>
	      	<li class="hidden-xs hidden-sm separator"></li>
	        <li><a href="{{  url('/login') }}">Log in</a></li>	
	        <li>
	        	<a href="javascipt:void(0);" class="hidden-xs hidden-sm cart">
	        		<i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
	        	</a>
	        </li>
	      </ul>	      
	    </div>		   
	  </div>
	</nav>	
@show