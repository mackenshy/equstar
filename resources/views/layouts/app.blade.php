<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>		
	<link rel="shortcut icon" href="{{ url('/favicon.ico') }}" type="image/vnd.microsoft.icon">
	<link rel="canonical" href="{{ config('app.url') }}">
	<title>{{ config('app.name') }}</title>
	@include('layouts.metas')
	@include('layouts.styles')
  <script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
   </script>
</head>
<body>
	@include('layouts.header')
	<div class="container-fluid wrapper" id="app">		
		@include('layouts.cart')
		@yield('content')    
	</div>
	@include('layouts.footer')
	@include('layouts.scripts')
</body>
</html>