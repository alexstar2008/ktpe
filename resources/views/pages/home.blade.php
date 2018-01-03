@extends('pages.app')
@section('title',__('home.seo_title'))
@section('content')

	<script>
        $(document).ready(function(){
            $('.slider').slider();
        });
	</script>
    <div class="slider">
    	<ul class="slides">
    		<li>
    			<img src="/img/photos/3.jpg">
    		</li>
    		<li>
    			<img src="/img/photos/6.jpg">
    		</li>
    		<li>e
    			<img src="/img/photos/4.jpg">
    		</li>
    		<li>
    			<img src="/img/photos/1.jpg">
    		</li>
    	</ul>
    </div>


    <div class="container" style="margin-top: 20px;" id="main_desktop">
    	<div class="row">
    		<div class="col s12 m8">
    			<div class="card">
    				<div class="card-image">
    					<img src="/img/kkpi.jpg" class="main-card">
    					<span class="card-title">@lang('home.modals_titles.general')</span>
    				</div>
    				<div class="card-content">
    					<p align="justify">@lang('home.modals_desc.general')</p>
    				</div>
    				<div class="card-action">
    					<a href="#modal-main1">@lang('home.more')</a>
    				</div>
    			</div>

    			<div class="card">
    				<div class="card-image">
    					<img src="/img/history.jpg" class="main-card">
    					<span class="card-title">@lang('home.modals_titles.history')</span>
    				</div>
    				<div class="card-content">
    					<p>@lang('home.modals_desc.history')</p>
    				</div>
    				<div class="card-action">
    					<a href="#modal-main2">@lang('home.more')</a>
    				</div>
    			</div>

    			<div class="card">
    				<div class="card-image">
    					<img src="/img/park-kpi.jpg" class="main-card">
    					<span class="card-title">@lang('home.modals_titles.spec')</span>
    				</div>
    				<div class="card-content">
    					<p>@lang('home.modals_desc.spec')</p>
    				</div>
    				<div class="card-action">
    					<a href="#modal-main3">@lang('home.more')</a>
    				</div>
    			</div>
    		</div>

    		<div class="col s12 m4">

    			<h5 class="news-header">@lang('home.titles.news')</h5>

    			<div class="news" id="news">
				@isset($news)
					@foreach($news as $newsItem)
							<div class="card news-item">
								<div class="card-content">
									<p class="date"><b>{{ $newsItem->created_at }}</b></p>
									@if( app()->getLocale()=='ua')
										<h5 class="text text-center">{{ $newsItem->title }}</h5>
										<p class="text">{{ $newsItem->text }}</p>
									@else
										<h5 class="text text-center">{{ $newsItem->title_en }}</h5>
										<p class="text">{{ $newsItem->text_en }}</p>
									@endif
								</div>
							</div>
						@endforeach
				@endisset
    			</div>
    		</div>
    	</div>
    </div> 

    <div class="container" id="main_mobile">
    	<div class="row">
    		<div class="col s12">
    			<ul class="tabs">
    				<li class="tab col s6"><a class="active" href="#info">@lang('home.titles.general')</a></li>
    				<li class="tab col s6"><a href="#newsM">@lang('home.titles.news')</a></li>
    			</ul>
    		</div>

    		<div id="info" class="col s12">
    			<div class="card">
    				<div class="card-image">
    					<img src="/img/kkpi.jpg" class="main-card">
    					<span class="card-title">@lang('home.modals_titles.general')</span>
    				</div>
    				<div class="card-content">
    					<p>@lang('home.modals_desc.general')</p>
    				</div>
    				<div class="card-action">
    					<a href="#modal-main1">@lang('home.more')</a>
    				</div>
    			</div>

    			<div class="card">
    				<div class="card-image">
    					<img src="/img/history.jpg" class="main-card">
    					<span class="card-title">@lang('home.modals_titles.history')</span>
    				</div>
    				<div class="card-content">
    					<p>@lang('home.modals_desc.history')</p>
    				</div>
    				<div class="card-action">
    					<a href="#modal-main2">@lang('home.more')</a>
    				</div>
    			</div>

    			<div class="card">
    				<div class="card-image">
    					<img src="/img/park-kpi.jpg" class="main-card">
    					<span class="card-title">@lang('home.modals_titles.spec')</span>
    				</div>
    				<div class="card-content">
    					<p>@lang('home.modals_desc.spec')</p>
    				</div>
    				<div class="card-action">
    					<a href="#modal-main3">@lang('home.more')</a>
    				</div>
    			</div>
    		</div>
    		<div id="newsM" class="col s12 news">
			</div>

    	</div>
    </div>

    <!-- MODAL WINDOWS //-->

    <div id="modal-main1" class="modal modal-fixed-footer">
    	<div class="modal-content">
			@lang('home.modals.general')
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">@lang('home.back')</a>
		</div>
	</div>
	<div id="modal-main2" class="modal modal-fixed-footer">
		<div class="modal-content">
			@lang('home.modals.history')
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">@lang('home.back')</a>
		</div>
	</div>
	<div id="modal-main3" class="modal modal-fixed-footer">
		<div class="modal-content">
			@lang('home.modals.spec')
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">@lang('home.back')</a>
		</div>
	</div>

	<!-- // MODAL WINDOWS -->
		<script>
            $('.carousel.carousel-slider').carousel({ fullWidth: true });
			$(document).ready(function () {
				if ($("#main_desktop .news-item").length > 4) {
					const height1 = $('#main_desktop .col.s12.m8').outerHeight(true);
					const height2 = $('#main_desktop h5.news-header').outerHeight(true);
					const heightDifference = height1 - height2;

					$('#main_desktop .news').css('height', heightDifference, 'important');
					$('#main_desktop .news').css('overflow-y', 'auto', 'important');
				}
				const MOBILE_WIDTH = 601;
				if(window.innerWidth < MOBILE_WIDTH){
				    const newsWrapper = $('#news');
				    const newsMobileWrapper = $('#newsM');
					newsMobileWrapper.html(newsWrapper.html());
					newsWrapper.html('');
				}
            });
	</script>
@endsection