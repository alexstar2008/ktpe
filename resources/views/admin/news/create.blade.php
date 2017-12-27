@extends('admin.app')

@section('title','Створити новину')
@section('content')
<h2>Створення новини</h2>
{{ Form::open(array('url' => 'admin/news/', 'method' => 'POST', 'class'=>'col-md-12')) }}

    <div class="form-horizontal">
        <h4>Внесіть інформацію у всі поля на даній формі</h4>
        <hr />
        {{--@Html.ValidationSummary(true, "", new { @class = "text-danger" })--}}
        <div class="form-group">
            <label class="control-label col-md-2">Укр. Заголовок</label>
            <div class="col-md-10">
                <input class="form-control" name="title" />
                {{--@Html.ValidationMessageFor(model => model.UaText, "", new { @class = "text-danger" })--}}
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2">Укр. Текст</label>
            <div class="col-md-10">
                <input class="form-control" name="text" />
                {{--@Html.ValidationMessageFor(model => model.UaText, "", new { @class = "text-danger" })--}}
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <input type="submit" value="Додати" class="btn btn-default" />
            </div>
        </div>
    </div>

<div>
    <a href="/admin/news">До списку новин</a>
</div>

{{--@section Scripts {--}}
    {{--@Scripts.Render("~/bundles/jqueryval")--}}
{{--}--}}
@endsection