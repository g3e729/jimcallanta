@extends('layouts.app')

@section('title', route_title())

@section('content')
  <div class="main-wrapper">
  	<div class="pages">
		<h1>{{ route_title() }}</h1>
		<div class="display-content">
			<p class="text-danger">coming soon...</p>
		</div> 
  	</div> 
  </div>
@endsection