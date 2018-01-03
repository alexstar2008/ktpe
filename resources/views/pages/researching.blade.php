@extends('pages.app')
@section('title',__('researching.seo_title'))

@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col s12 m12">
                <div class="card modal-content">

                <img src="/img/kpi.png" class="center-block" style="margin-top: 15px;">

                @lang('researching.content')

                </div>
            </div>
        </div>
    </div>
@endsection
