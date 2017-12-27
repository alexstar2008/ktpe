@extends('admin.app')
@section('title','Конференції')

@section('content')
<h2 class="text-center">Список конференцій</h2>
<p>
    <a href="/admin/conferences/create">Додати конференцію</a>
</p>
@isset($conferences)
    <table class="table">
        <thead>
        <tr>
            <th>
                Заголовок
            </th>
            <th>
                Створено
            </th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($conferences as $conference)
            <tr>
                <td>
                    {{$conference->title}}
                </td>
                <td>
                    {{$conference->created_at}}
                </td>
                <td>
                    <a href="/admin/conferences/{{$conference->id}}/edit">Редагувати</a>
                    {{--@Html.ActionLink("Delete", "Delete", new { id = item.Id })--}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endisset
@endsection