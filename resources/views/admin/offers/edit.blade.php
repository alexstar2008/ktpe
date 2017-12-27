@extends('admin.app')

@section('title','Оновлення вакансії')
@section('content')

<h2>Оновлення вакансії</h2>

{{ Form::open(array('url' => 'admin/offers/'.$offer->id, 'method' => 'PUT', 'class'=>'col-md-12')) }}
    <div class="form-horizontal">
        <h4>Змініть необхідну вам інформацію</h4>
        <hr />
        {{--@Html.ValidationSummary(true, "", new { @class = "text-danger" })--}}
        <div class="form-group">
            <label class="control-label col-md-2">Назва компанії</label>
            <div class="col-md-10">
                <input class="form-control" value="{{$offer->companyName}}" name="companyName" />
                {{--@Html.ValidationMessageFor(model => model.UaCompanyName, "", new { @class = "text-danger" })--}}
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2">Робота</label>
            <div class="col-md-10">
                <input class="form-control" value="{{$offer->job}}" name="job" />
                {{--@Html.ValidationMessageFor(model => model.UaCompanyName, "", new { @class = "text-danger" })--}}
            </div>
        </div>
        <div class="form-group">
                <label class="control-label col-md-2">Контактна особа</label>
            <div class="col-md-10">
                <input class="form-control" value="{{$offer->contactName}}" name="contactName" />
                {{--@Html.ValidationMessageFor(model => model.UaCompanyName, "", new { @class = "text-danger" })--}}
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