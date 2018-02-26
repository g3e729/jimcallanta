@extends('layouts.app')

@push('scripts')
	<script type="text/javascript">
		function backTop(id, offset) {
			var element = id || 'body';

			$('html, body').animate({
			    scrollTop: $(element).offset().top + offset
			}, 500);
		}

		$('a[href^="/#"], [data-go-to]').on('click', function (event) {
			var offset = $(this).hasClass('work-item') ? -200 : 0;

			if (this.hasAttribute('data-go-to')) {
				var id = $(this).data('go-to');
			} else {
				var id = $.attr(this, 'href').replace("/", "");
				event.preventDefault();
			}

			backTop(id, offset);
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
		@include('partials.homepage.welcome')
		@include('partials.homepage.about')
		@include('partials.homepage.work')
		@include('partials.homepage.contact')
		<button onclick="backTop('', 0)" id="backTop" title="Go to top">Top</button>
  </div>
@endsection