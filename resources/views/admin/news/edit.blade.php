@extends('admin.app')

@section('title','Оновлення новини')
@section('content')
<h2>Оновлення новини</h2>
{{ Form::open(array('url' => 'admin/news/'.$newsItem->id, 'method' => 'PUT', 'class'=>'col-md-12')) }}
    <div class="form-horizontal">
        <h4>Змініть всю необхідну інформацію про новину</h4>
        <hr />
        <div class="form-group">
            <label class="control-label col-md-2">Укр. Заголовок</label>
            <div class="col-md-10">
                <input class="form-control" value="{{$newsItem->title}}" name="title" required />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2">Eng. Заголовок</label>
            <div class="col-md-10">
                <input class="form-control" value="{{$newsItem->title_en}}" name="title_en" />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2">Укр. Текст</label>
            <div class="col-md-10">
                <textarea class="form-control" rows="4" name="text" required >{{$newsItem->text}}</textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2">Eng. Текст</label>
            <div class="col-md-10">
                <textarea class="form-control" rows="4" name="text_en">{{$newsItem->text_en}}</textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <input type="submit" value="Оновити" class="btn btn-default" />
            </div>
        </div>
    </div>
{{ Form::close() }}

<div>
    <a href="/admin/news">До списку новин</a>
</div>

{{--@section Scripts {--}}
    {{--@Scripts.Render("~/bundles/jqueryval")--}}
{{--}--}}
@endsection
