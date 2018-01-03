@extends('pages.app')
@section('title',__('employers.seo_title'))

@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col s12 m12">
                <div class="card">
                    <div class="card-content">
                        @lang('employers.content')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection