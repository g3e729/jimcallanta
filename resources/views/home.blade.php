@extends('layouts.app')

@section('title', 'Jim Callanta')

@section('content')
  <div class="p-0 main-wrapper">
		@include('partials.pages.welcome')
		@include('partials.pages.about')
		@include('partials.pages.work')
		@include('partials.pages.contact')
  </div>
@endsection