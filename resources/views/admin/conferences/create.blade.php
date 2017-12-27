@extends('admin.app')

@section('title','Створити конференцію')
@section('content')

<h2>Створити конференцію</h2>

{{ Form::open(['url' => 'admin/conferences/', 'method' => 'POST', 'class'=>'col-md-12','files' => true]) }}

    <div class="form-horizontal">
        <h4>Заповніть всі поля для створення нового запису</h4>
        <hr />
        <div class="form-group">
            <label class="control-label col-md-2">Укр. Заголовок</label>
            <div class="col-md-10">
                <input class="form-control" name="title" />
                {{--@Html.ValidationMessageFor(model => model.UaHeader, "", new { @class = "text-danger" })--}}
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2">Укр. Текст</label>
            <div class="col-md-10">
                <input class="form-control" name="text" />
                {{--@Html.ValidationMessageFor(model => model.UaHeader, "", new { @class = "text-danger" })--}}
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-md-2">Фото</label>
            <div class="col-md-10" style="display: none"></div>
            <div class="col-md-10">
                {{--<img id="imm" src="@src" alt="Photo" style="width: 200px; height: 200px;" class="img-rounded">--}}
                <input type="file" name="img" id="uploadFile" /><br />
                {{--<a id="photoUploadSubmit" class="btn btn-default">Завантажити</a>--}}
                {{--<i id="fileUploadSpiner" class="fa fa-circle-o-notch fa-spin" style="margin: 20px;visibility: hidden;font-size:24px"></i>--}}
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
    <a href="/admin/conferences">До списку конференцій</a>
</div>

{{--@section Scripts {--}}
    {{--@Scripts.Render("~/bundles/jqueryval")--}}

    {{--<script src="~/Scripts/PhotoUpload/Uploader.js"></script>--}}

    {{--<script>--}}
        {{--// PHOTO UPLOAD--}}
        {{--$('#photoUploadSubmit').click(function (e) {--}}
            {{--var target = '#PhotoLink';--}}

            {{--UploadFile(e, target);--}}
        {{--});--}}
    {{--</script>--}}
{{--}--}}
@endsection