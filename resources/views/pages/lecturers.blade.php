@extends('pages.app')

@section('title',__('lectures.seo_title'))
@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m12" style="margin-top: 20px;">
                <ul class="tabs">
                    <li class="tab col s6"><a class="active" href="#lecturers">@lang('lectures.tabs.scientific')</a></li>
                    <li class="tab col s6"><a href="#helpers">@lang('lectures.tabs.helpful')</a></li>
                </ul>
            </div>

            <div id="lecturers" class="col s12 m12">
               <div class="card horizontal lecturer">
                    <div class="card-image lecturer-photo">
                        <img src="/img/lecturers/kreidych.png">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <span class="card-title"><b>@lang('lectures.scientific.1.title')</b></span>
                            <p><i>@lang('lectures.scientific.1.desc')</i></p>
                        </div>
                        <div class="card-action">
                            <a href="#kreidych">@lang('lectures.more')</a>
                        </div>
                    </div>                    
                </div>
                <div id="kreidych" class="modal modal-fixed-footer">
                    <div class="modal-content">
                        @lang('lectures.scientific.1.modal')
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">@lang('lectures.back')</a>
                    </div>
                </div>

                <div class="card horizontal lecturer">
                    <div class="card-image lecturer-photo">
                        <img src="/img/lecturers/semenchenko.jpg">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <span class="card-title"><b>@lang('lectures.scientific.2.title')</b></span>
                            <p><i>@lang('lectures.scientific.2.desc')</i></p>
                        </div>
                        <div class="card-action">
                            <a href="#semenchenko">Дізнатись більше</a>
                        </div>
                    </div>
                </div>

                <div id="semenchenko" class="modal modal-fixed-footer">
                    <div class="modal-content">
                        @lang('lectures.scientific.2.modal')
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Назад</a>
                    </div>
                </div>

                <div class="card horizontal lecturer">
                    <div class="card-image lecturer-photo">
                        <img src="/img/lecturers/ilyash.png">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <span class="card-title"><b>@lang('lectures.scientific.3.title')</b></span>
                            <p><i>@lang('lectures.scientific.3.desc')</i></p>
                        </div>
                        <div class="card-action">
                            <a href="#ilyash">Дізнатись більше</a>
                        </div>
                    </div>
                </div>

                <div id="ilyash" class="modal modal-fixed-footer">
                    <div class="modal-content">
                        @lang('lectures.scientific.3.modal')
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Назад</a>
                    </div>
                </div>

                <div class="card horizontal lecturer">
                    <div class="card-image lecturer-photo">
                        <img src="/img/lecturers/roshchyna.jpg">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <span class="card-title"><b>@lang('lectures.scientific.4.title')</b></span>
                            <p><i>@lang('lectures.scientific.4.desc')</i></p>
                        </div>
                        <div class="card-action">
                            <a href="#roshchyna">Дізнатись більше</a>
                        </div>
                    </div>
                </div>

                <div id="roshchyna" class="modal modal-fixed-footer">
                    <div class="modal-content">
                        @lang('lectures.scientific.4.modal')
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Назад</a>
                    </div>
                </div>

                <div class="card horizontal lecturer">
                    <div class="card-image lecturer-photo">
                        <img src="/img/lecturers/duchenko.jpg">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <span class="card-title"><b>@lang('lectures.scientific.5.title')</b></span>
                            <p><i>@lang('lectures.scientific.5.desc')</i></p>
                        </div>
                        <div class="card-action">
                            <a href="#duchenko">Дізнатись більше</a>
                        </div>
                    </div>
                </div>

                <div id="duchenko" class="modal modal-fixed-footer">
                    <div class="modal-content">
                        @lang('lectures.scientific.5.modal')
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Назад</a>
                    </div>
                </div>

                <div class="card horizontal lecturer">
                    <div class="card-image lecturer-photo">
                        <img src="/img/lecturers/ivanytskia.jpg">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <span class="card-title"><b>@lang('lectures.scientific.6.title')</b></span>
                            <p><i>@lang('lectures.scientific.6.desc')</i></p>
                        </div>
                        <div class="card-action">
                            <a href="#ivanytskia">Дізнатись більше</a>
                        </div>
                    </div>
                </div>

                <div id="ivanytskia" class="modal modal-fixed-footer">
                    <div class="modal-content">
                        @lang('lectures.scientific.6.modal')
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Назад</a>
                    </div>
                </div>

                <div class="card horizontal lecturer">
                    <div class="card-image lecturer-photo">
                        <img src="/img/lecturers/ereshko.jpg">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <span class="card-title"><b>@lang('lectures.scientific.7.title')</b></span>
                            <p><i>@lang('lectures.scientific.7.desc')</i></p>
                        </div>
                        <div class="card-action">
                            <a href="#ereshko">Дізнатись більше</a>
                        </div>
                    </div>
                </div>

                <div id="ereshko" class="modal modal-fixed-footer">
                    <div class="modal-content">
                        @lang('lectures.scientific.7.modal')
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Назад</a>
                    </div>
                </div>

                <div class="card horizontal lecturer">
                    <div class="card-image lecturer-photo">
                        <img src="/img/lecturers/lobodzynska.jpg">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <span class="card-title"><b>@lang('lectures.scientific.8.title')</b></span>
                            <p><i>@lang('lectures.scientific.8.desc')</i></p>
                        </div>
                        <div class="card-action">
                            <a href="#lobodzynska">Дізнатись більше</a>
                        </div>
                    </div>
                </div>

                <div id="lobodzynska" class="modal modal-fixed-footer">
                    <div class="modal-content">
                        @lang('lectures.scientific.8.modal')
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Назад</a>
                    </div>
                </div>

                <div class="card horizontal lecturer">
                    <div class="card-image lecturer-photo">
                        <img src="/img/lecturers/pavlenko.jpg">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <span class="card-title"><b>@lang('lectures.scientific.9.title')</b></span>
                            <p><i>@lang('lectures.scientific.9.desc')</i></p>
                        </div>
                        <div class="card-action">
                            <a href="#pavlenko">Дізнатись більше</a>
                        </div>
                    </div>
                </div>

                <div id="pavlenko" class="modal modal-fixed-footer">
                    <div class="modal-content">
                        @lang('lectures.scientific.9.modal')
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Назад</a>
                    </div>
                </div>

                <div class="card horizontal lecturer">
                    <div class="card-image lecturer-photo">
                        <img src="/img/lecturers/shevchuk.jpg">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <span class="card-title"><b>@lang('lectures.scientific.10.title')</b></span>
                            <p><i>@lang('lectures.scientific.10.desc')</i></p>
                        </div>
                        <div class="card-action">
                            <a href="#shevchuk">Дізнатись більше</a>
                        </div>
                    </div>
                </div>

                <div id="shevchuk" class="modal modal-fixed-footer">
                    <div class="modal-content">
                        @lang('lectures.scientific.10.modal')
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Назад</a>
                    </div>
                </div>

                <div class="card horizontal lecturer">
                    <div class="card-image lecturer-photo">
                        <img src="/img/lecturers/bordanova.jpg">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <span class="card-title"><b>@lang('lectures.scientific.11.title')</b></span>
                            <p><i>@lang('lectures.scientific.11.desc')</i></p>
                        </div>
                        <div class="card-action">
                            <a href="#bordanova">Дізнатись більше</a>
                        </div>
                    </div>
                </div>

                <div id="bordanova" class="modal modal-fixed-footer">
                    <div class="modal-content">
                        @lang('lectures.scientific.11.modal')
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Назад</a>
                    </div>
                </div>

                <div class="card horizontal lecturer">
                    <div class="card-image lecturer-photo">
                        <img src="/img/lecturers/udovytskia.jpg">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <span class="card-title"><b>@lang('lectures.scientific.12.title')</b></span>
                            <p><i>@lang('lectures.scientific.12.desc')</i></p>
                        </div>
                        <div class="card-action">
                            <a href="#udovytskia">Дізнатись більше</a>
                        </div>
                    </div>
                </div>

                <div id="udovytskia" class="modal modal-fixed-footer">
                    <div class="modal-content">
                        @lang('lectures.scientific.12.modal')
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Назад</a>
                    </div>
                </div>

                <div class="card horizontal lecturer">
                    <div class="card-image lecturer-photo">
                        <img src="/img/lecturers/obelets.jpg">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <span class="card-title"><b>@lang('lectures.scientific.13.title')</b></span>
                            <p><i>@lang('lectures.scientific.13.desc')</i></p>
                        </div>
                        <div class="card-action">
                            <a href="#obelets">Дізнатись більше</a>
                        </div>
                    </div>
                </div>

                <div id="obelets" class="modal modal-fixed-footer">
                    <div class="modal-content">
                        @lang('lectures.scientific.13.modal')
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Назад</a>
                    </div>
                </div>
            </div>

            <div id="helpers" class="col s12 m12">
                <div class="card horizontal lecturer">
                    <div class="card-image lecturer-photo">
                        <img src="/img/lecturers/renska.jpg">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <span class="card-title"><b>@lang('lectures.helpful.1.title')</b></span>
                            <p><i>@lang('lectures.helpful.1.desc')</i></p>
                        </div>
                    </div>
                </div>

                <div class="card horizontal lecturer">
                    <div class="card-image lecturer-photo">
                        <img src="/img/lecturers/meged.jpg">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <span class="card-title"><b>@lang('lectures.helpful.2.title')</b></span>
                            <p><i>@lang('lectures.helpful.2.desc')</i></p>
                        </div>
                    </div>
                </div>

                <div class="card horizontal lecturer">
                    <div class="card-image lecturer-photo">
                        <img src="/img/lecturers/kunytska.jpg">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <span class="card-title"><b>@lang('lectures.helpful.3.title')</b></span>
                            <p><i>@lang('lectures.helpful.3.desc')</i></p>
                        </div>
                    </div>
                </div>

                <div class="card horizontal lecturer">
                    <div class="card-image lecturer-photo lecturer-photo">
                        {{--<img src="">--}}
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <span class="card-title"><b>@lang('lectures.helpful.4.title')</b></span>
                            <p><i>@lang('lectures.helpful.4.desc')</i></p>
                        </div>
                    </div>
                </div>

                <div class="card horizontal lecturer">
                    <div class="card-image lecturer-photo">
                        <img src="/img/lecturers/melnychuk.jpg">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <span class="card-title"><b>@lang('lectures.helpful.5.title')</b></span>
                            <p><i>@lang('lectures.helpful.5.desc')</i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection