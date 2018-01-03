@extends('pages.app')
@section('title','Конференції')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
                @foreach($conferences as $key=>$conference)
                <div class="col s12 m12 conferences">
                    <div class="card horizontal">
                        @if(isset($conference->img))
                        <div class="card-image">
                            <img src="{{ $conference->img }}" />
                        </div>
                        @endif
                        <div class="card-stacked">
                            <div class="card-content">
                                <span class="card-title"><b>{{ $conference->title}}</b></span>
                                <p class="date"><b>{{ $conference->created_at  }}</b></p>
                                <p>{{ $conference->text }}</p>
                            </div><div class="card-action">
                                <a href="#modal-conference{{ $key }}">@lang('shared.more')</a>
                            </div>
                        </div>
                    </div>
                    <div id="modal-conference{{ $key }}" class="modal modal-fixed-footer">
                        <div class="modal-content">
                            <h4>{{ $conference->title }}</h4>
                            <p>{{  $conference->text }}</p>
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">@lang('shared.back')</a>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
@endsection
