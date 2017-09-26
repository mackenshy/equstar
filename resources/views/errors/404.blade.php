@extends('layouts.app')

@section('content')
  <section class="row page-error">
    <div class="col-xs-12">
      <h4>Page not found</h4>
      <a href="{{ url('/') }}">
      	<i class="glyphicon glyphicon-arrow-left" aria-hidden="true"></i> Return to home
      </a>
    </div>     
  </section>
@endsection