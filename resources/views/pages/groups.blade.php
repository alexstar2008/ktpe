@extends('pages.app')
@section('title','Наукові Гуртки')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col s12 m12">
                <ul class="collapsible" data-collapsible="accordion">
                   @lang('groups.1')
                   @lang('groups.2')
                   @lang('groups.3')
                   @lang('groups.4')
                </ul>
            </div>
        </div>
    </div>
@endsection