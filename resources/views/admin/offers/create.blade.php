@extends('admin.app')

@section('title','Створення вакансії')
@section('content')


<h2>Створення вакансії</h2>
{{ Form::open(array('url' => 'admin/offers/', 'method' => 'POST', 'class'=>'col-md-12')) }}
    <div class="form-horizontal">
        <h4>Для створення нового запису внесіть інформацію у всі доступні поля</h4>
        <hr />
        <div class="form-group">
            <label class="control-label col-md-2">Назва компанії</label>
            <div class="col-md-10">
                <input class="form-control" name="companyName" />
                {{--@Html.ValidationMessageFor(model => model.UaCompanyName, "", new { @class = "text-danger" })--}}
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2">Робота</label>
            <div class="col-md-10">
                <input class="form-control" name="job" />
                {{--@Html.ValidationMessageFor(model => model.UaCompanyName, "", new { @class = "text-danger" })--}}
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2">Контактна особа</label>
            <div class="col-md-10">
                <input class="form-control" name="contactName" />
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
