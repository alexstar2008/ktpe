@extends('admin.app')

@section('title','Оновлення вакансії')
@section('content')

<h2>Оновлення вакансії</h2>

{{ Form::open(array('url' => 'admin/offers/'.$offer->id, 'method' => 'PUT', 'class'=>'col-md-12')) }}
    <div class="form-horizontal">
        <h4>Змініть необхідну вам інформацію</h4>
        <hr />
        {{--Company Name--}}
        <div class="form-group">
            <label class="control-label col-md-2">Укр. Назва компанії</label>
            <div class="col-md-10">
                <input class="form-control" name="company_name" value="{{$offer->company_name}}" required />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2">Eng. Назва компанії</label>
            <div class="col-md-10">
                <input class="form-control" name="company_name_en" value="{{$offer->company_name_en}}" />
            </div>
        </div>
        {{--Vacancy--}}
        <div class="form-group">
            <label class="control-label col-md-2">Укр. Вакансія</label>
            <div class="col-md-10">
                <input class="form-control" name="job" value="{{$offer->job}}" required />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2">Eng. Вакансія</label>
            <div class="col-md-10">
                <input class="form-control" name="job_en" value="{{$offer->job_en}}"  />
            </div>
        </div>
        {{--Position--}}
        <div class="form-group">
            <label class="control-label col-md-2">Укр. Позиція</label>
            <div class="col-md-10">
                <input class="form-control" name="position" value="{{$offer->position}}" />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2">Eng. Позиція</label>
            <div class="col-md-10">
                <input class="form-control" name="position_en" value="{{$offer->position_en}}" />
            </div>
        </div>
        {{--Contact Person--}}
        <div class="form-group">
            <label class="control-label col-md-2">Укр. Контактна особа</label>
            <div class="col-md-10">
                <input class="form-control" name="contact_name" value="{{$offer->contact_name}}" required />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2">Eng. Контактна особа</label>
            <div class="col-md-10">
                <input class="form-control" name="contact_name_en" value="{{$offer->contact_name_en}}" />
            </div>
        </div>
        {{--Phone|Email--}}
        <div class="form-group">
            <label class="control-label col-md-2">Телефон</label>
            <div class="col-md-10">
                <input class="form-control" name="phone" value="{{$offer->phone}}" />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2">E-mail</label>
            <div class="col-md-10">
                <input class="form-control" name="email" value="{{$offer->email}}" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <input type="submit" value="Зберегти" class="btn btn-default" />
            </div>
        </div>
    </div>
{{ Form::close() }}
<div>
    <a href="/admin/offers">До списку вакансій</a>
</div>

{{--@section Scripts {--}}
    {{--@Scripts.Render("~/bundles/jqueryval")--}}
{{--}--}}
@endsection