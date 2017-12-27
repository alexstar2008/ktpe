@extends('pages.app')
@section('title','Олімпіади')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            @foreach($competitions as $key=>$competition)
                <div class="col s12 m12" id="olympiads">
                    <div class="card horizontal">
                        @if(isset($competition->img))
                            <div class="card-image">
                                <img src="{{ $competition->img }}">
                            </div>
                        @endif
                        <div class="card-stacked">
                            <div class="card-content">
                                <span class="card-title"><b>{{ $competition->title }}</b>
                                </span>
                                <p class="date"><b>{{ $competition->created_at }}</b></p>
                                <p>{{ $competition->text }}</p>
                            </div>
                            <div class="card-action">
                                <a href="#modal-olympiads{{$key}}">Більше інформації</a>
                            </div>
                        </div>
                    </div>
                    <div id="modal-olympiads{{$key}}" class="modal modal-fixed-footer">
                        <div class="modal-content">
                            <h4>{{ $competition->title }}</h4>
                            <p>{{ $competition->text }}</p>
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Назад</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
