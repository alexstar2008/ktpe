@extends('pages.app')
@section('title',__('subjects.seo_title'))

@section('content')
	<script>
		$(".spoiler-trigger").click(function() {
			$(this).parent().next().collapse('toggle');
		});
	</script>
	<div class="container" style="margin-top: 20px;">
		<div class="row right">
			<div class="col s12 m12">
				<span>@lang('subjects.additional')</span>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">

			<div id="bachelor" class="col s12 m12">
				<b>@lang('subjects.title')</b>

				<ul class="collapsible" data-collapsible="accordion">
					@lang('subjects.list')
				</ul>

			</div>
		</div>
	</div>
@endsection