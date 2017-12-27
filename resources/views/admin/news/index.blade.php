@extends('admin.app')
@section('title','Новини')

@section('content')
<h2>Список новин</h2>
<p>
    <a href="/admin/news/create">Створити новину</a>
</p>
@isset($news)
    <table class="table">
        <tr>
            <th>
                Текст
            </th>
            <th>
                Створено
            </th>
        </tr>

        @foreach($news as $newsItem)
            <tr>
                <td>
                    {{$newsItem->text}}
                </td>
                <td>
                    {{$newsItem->created_a}}
                </td>
                <td>
                    <a href="/admin/news/{{$newsItem->id}}/edit">Редагувати</a>
                    {{--@Html.ActionLink("Delete", "Delete", new { id = item.Id })--}}
                </td>
            </tr>
        @endforeach
    </table>
@endisset
@endsection