@extends('pages.app')
@section('title','Куратори')

@section('content')
	<div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col s12 m12">
                <div class="card horizontal curator">
                    <div class="card-image lecturer">
                        <img src="/img/lecturers/duchenko.jpg">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                        <span class="card-title"><b>@lang('curators.1.title')</b></span>
                        <p><i>@lang('curators.1.content')</i></p>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
@endsection