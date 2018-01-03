@extends('admin.app')

@section('title','Редагування олімпіади')
@section('content')

<h2>Редагування олімпіади</h2>
{{ Form::open(array('url' => 'admin/competitions/'.$competition->id, 'method' => 'PUT', 'class'=>'col-md-12','files' => true)) }}
    <div class="form-horizontal">
        <h4>Змініть всі необхідні поля</h4>
        <hr />
        <div class="form-group">
            <label class="control-label col-md-2">Укр. Заголовок</label>
            <div class="col-md-10">
                <input class="form-control" value="{{$competition->title}}" name="title" required />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2">Eng. Заголовок</label>
            <div class="col-md-10">
                <input class="form-control" value="{{$competition->title_en}}" name="title_en" />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2">Укр. Текст</label>
            <div class="col-md-10">
                <textarea class="form-control" rows="4" name="text" required>{{$competition->text}}</textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2">Eng. Текст</label>
            <div class="col-md-10">
                <textarea class="form-control" rows="4" name="text_en">{{$competition->text_en}}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2">Фото</label>
            <div class="col-md-10" style="display: none"></div>
            <div class="col-md-10">
                @isset($competition->img)
                    <img id="imm" src="{{ asset('/storage/'.$competition->img) }}" alt="Photo" style="width: 200px; height: 200px;" class="img-rounded">
                @endisset
                <input type="file" name="img" id="uploadFile" id="PhotoLink" /><br />
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
    <a href="/admin/competitions">До списку олімпіад</a>
</div>

<script src="{{ asset('js/Uploader.js')  }}"></script>
<script>
    $(document).ready(function () {
//        $('#photoUploadSubmit').click(function (e) {
//            const target = '#PhotoLink';
//            UploadFile(e, target);
//        });
    });
</script>
@endsection