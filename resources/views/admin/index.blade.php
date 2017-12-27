@extends('admin.app')
@section('title','КТПЕ')

@section('content')
<div class="jumbotron">
    <h1>Адміністративний додаток кафедри теоретичної та прикладної економіки</h1>
    <p class="lead">Тут Ви зможете налаштувати контент Вашого сайту</p>
    @if(session('status'))
    @endif
    {{--@Html.ActionLink("Авторизуватись", "SignIn", "User", new { area = "" }, new { @class = "btn btn-primary btn-lg" })--}}
</div>
@endsection