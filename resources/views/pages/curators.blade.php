@extends('pages.app')
@section('title','Куратори')

@section('content')
	<div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col s12 m12">
                <div class="card horizontal curator">
                    <div class="card-image lecturer">
                        <img src="../../../../ktpe-front/img/lecturers/duchenko.jpg">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                        <span class="card-title"><b>Дученко Марина Михайлівна</b></span>

                        <p><i>Кандидат економічнх наук, доцент, магі ділої адміністрації в галузі "Банківська справа"</i></p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                        text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                        make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release</p>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col s12 m12">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><b>Куратори</b></span>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                        text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                        make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release </p>
                    </div>
                    <div class="card-action">
                        <a href="#modal-curators">Більше інформації</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL WINDOWS -->
        <div id="modal-curators" class="modal modal-fixed-footer">
        <div class="modal-content">
            <h4>Куратори</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
            text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Назад</a>
        </div>
    </div>
    <!-- MODAL WINDOWS -->
@endsection