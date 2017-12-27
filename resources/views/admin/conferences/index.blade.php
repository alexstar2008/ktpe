@extends('admin.app')
@section('title','Конференції')

@section('content')
<p>
    <a href="/admin/conferences/create">Додати конференцію</a>
</p>
@isset($conferences)
    <table class="table">
        <tr>
            <th>
                Заголовок
            </th>
            <th>
                Створено
            </th>
            <th></th>
        </tr>
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
    </table>
@endisset
@endsection