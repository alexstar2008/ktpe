@extends('pages.app')
@section('title',__('olympiads.seo_title'))

@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            @isset($competitions)
                @foreach($competitions as $key=>$competition)
                    <div class="col s12 m12" id="olympiads">
                        <div class="card horizontal">
                            @if(isset($competition->img))
                                <div class="card-image">
                                    <img src="{{ asset('/storage/'.$competition->img) }}">
                                </div>
                            @endif
                            <div class="card-stacked">
                                <div class="card-content">
                                    @if(app()->getLocale() == 'ua')
                                        <span class="card-title"><b>{{ $competition->title }}</b>
                                        </span>
                                        <p class="date"><b>{{ $competition->created_at }}</b></p>
                                        <p>{{ $competition->text }}</p>
                                    @else
                                        <span class="card-title"><b>{{ $competition->title_en }}</b>
                                        </span>
                                        <p class="date"><b>{{ $competition->created_at }}</b></p>
                                        <p>{{ $competition->text_en }}</p>
                                    @endif
                                </div>
                                <div class="card-action">
                                    <a href="#modal-olympiads{{$key}}">@lang('shared.more')</a>
                                </div>
                            </div>
                        </div>
                        <div id="modal-olympiads{{$key}}" class="modal modal-fixed-footer">
                            <div class="modal-content">
                                @if(app()->getLocale() == 'ua')
                                    <h4>{{ $competition->title }}</h4>
                                    <p>{{ $competition->text }}</p>
                                @else
                                    <h4>{{ $competition->title_en }}</h4>
                                    <p>{{ $competition->text_en }}</p>
                                @endif
                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">@lang('shared.back')</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endisset
        </div>
    </div>
@endsection
