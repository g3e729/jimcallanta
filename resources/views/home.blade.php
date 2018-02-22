@extends('layouts.app')

@section('title', 'Jim Callanta')

@push('scripts')
	<script type="text/javascript">
		function backTop(id) {
			var element = id || 'body';

			$('html, body').animate({
			    scrollTop: $(element).offset().top
			}, 500);
		}

		$('a[href^="/#"]').on('click', function (event) {
			var id = $.attr(this, 'href').replace("/", "");
			event.preventDefault();

			backTop(id);
		});

		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			    document.getElementById("backTop").style.display = "block";
			} else {
			    document.getElementById("backTop").style.display = "none";
			}
		}
	</script>
@endpush

@section('content')
  <div class="p-0 main-wrapper">
		@include('partials.pages.welcome')
		@include('partials.pages.about')
		@include('partials.pages.work')
		@include('partials.pages.contact')
		<button onclick="backTop()" id="backTop" title="Go to top">Top</button>
  </div>
@endsection