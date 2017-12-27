@extends('admin.app')

@section('title','Редагування конференції')
@section('content')

<h2>Редагування конференції</h2>



{{ Form::open(array('url' => 'admin/conferences/'.$conference->id, 'method' => 'PUT', 'class'=>'col-md-12','files' => true)) }}

<div class="form-horizontal">
    <h4>Тут ви можете оновити інформацію про конференцію</h4>
    <hr />
    {{--@Html.ValidationSummary(true, "", new { @class = "text-danger" })--}}

    <div class="form-group">
        <label class="control-label col-md-2">Заголовок</label>
        <div class="col-md-10">
            <input class="form-control" value="{{$conference->title}}" name="title" />
            {{--@Html.ValidationMessageFor(model => model.UaHeader, "", new { @class = "text-danger" })--}}
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2">Текст</label>
        <div class="col-md-10">
            <input class="form-control" value="{{$conference->text}}" name="text" />
            {{--@Html.ValidationMessageFor(model => model.UaHeader, "", new { @class = "text-danger" })--}}
        </div>
    </div>


    <div class="form-group">
        <label class="control-label col-md-2">Фото</label>
        <div class="col-md-10" style="display: none"></div>
        <div class="col-md-10">
            @if($conference->img)
                <img id="imm" src="data:image/jpeg;base64,{{ base64_encode($imgContent) }}" alt="Photo" style="width: 200px; height: 200px;" class="img-rounded">
            @endif
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

<div>
    <a href="/admin/conferences">До списку конференції</a>
</div>

{{--@section Scripts {--}}
{{--@Scripts.Render("~/bundles/jqueryval")--}}

<script src="~/Scripts/PhotoUpload/Uploader.js"></script>
<script>
    // PHOTO UPLOAD
    $('#photoUploadSubmit').click(function (e) {
        var target = '#PhotoLink';
        UploadFile(e, target);
    });
</script>

@endsection