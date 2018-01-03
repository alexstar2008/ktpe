@extends('admin.app')

@section('title','Редагування конференції')
@section('content')

<h2>Редагування конференції</h2>



{{ Form::open(array('url' => 'admin/conferences/'.$conference->id, 'method' => 'PUT', 'class'=>'col-md-12','files' => true)) }}

<div class="form-horizontal">
    <h4>Тут ви можете оновити інформацію про конференцію</h4>
    <hr />

    <div class="form-group">
        <label class="control-label col-md-2">Укр. Заголовок</label>
        <div class="col-md-10">
            <input class="form-control" value="{{$conference->title}}" name="title"  required/>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2">Eng. Заголовок</label>
        <div class="col-md-10">
            <input class="form-control" value="{{$conference->title_en}}" name="title_en" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2">Укр. Текст</label>
        <div class="col-md-10">
            <textarea class="form-control" rows="4" name="text" required>{{$conference->text}}</textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2">Eng. Текст</label>
        <div class="col-md-10">
            <textarea class="form-control" rows="4" name="text_en">{{$conference->text_en}}</textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2">Фото</label>
        <div class="col-md-10" style="display: none"></div>
        <div class="col-md-10">
            @isset($conference->img)
                <img id="imm" src="{{ asset('/storage'.$conference->img) }}" alt="Photo" style="width: 200px; height: 200px;" class="img-rounded">
            @endisset
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