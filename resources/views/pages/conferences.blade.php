@extends('pages.app')
@section('title',__('conferences.seo_title'))

@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
                @isset($conferences)
                    @foreach($conferences as $key=>$conference)
                    <div class="col s12 m12 conferences">
                        <div class="card horizontal">
                            @if(isset($conference->img))
                            <div class="card-image">
                                <img src="{{ asset('/storage'.$conference->img) }}" />
                            </div>
                            @endif
                            <div class="card-stacked">
                                <div class="card-content">
                                    @if( app()->getLocale()=='ua')
                                        <span class="card-title"><b>{{ $conference->title}}</b></span>
                                        <p class="date"><b>{{ $conference->created_at  }}</b></p>
                                        <p>{{ $conference->text }}</p>
                                    @else
                                        <span class="card-title"><b>{{ $conference->title_en}}</b></span>
                                        <p class="date"><b>{{ $conference->created_at  }}</b></p>
                                        <p>{{ $conference->text_en }}</p>
                                    @endif
                                </div><div class="card-action">
                                    <a href="#modal-conference{{ $key }}">@lang('shared.more')</a>
                                </div>
                            </div>
                        </div>
                        <div id="modal-conference{{ $key }}" class="modal modal-fixed-footer">
                            <div class="modal-content">
                                @if( app()->getLocale()=='ua')
                                    <h4>{{ $conference->title }}</h4>
                                    <p>{{  $conference->text }}</p>
                                @else
                                    <h4>{{ $conference->title_en }}</h4>
                                    <p>{{  $conference->text_en }}</p>
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
