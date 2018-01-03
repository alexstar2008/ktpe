@extends('admin.app')
@section('title','Новини')

@section('content')
<h2 class="text-center">Список новин</h2>
<p>
    <a href="/admin/news/create">Створити новину</a>
</p>
@isset($news)
    <table class="table">
        <thead>
        <tr>
            <th>
                Заголовок
            </th>
            <th>
                Створено
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($news as $newsItem)
            <tr>
                <td>
                    {{$newsItem->title}}
                </td>
                <td>
                    {{$newsItem->created_at}}
                </td>
                <td>
                    <a href="/admin/news/{{$newsItem->id}}/edit">Редагувати</a>
                </td>
                <td>
                    {{Form::open([ 'method'  => 'delete', 'url' => '/admin/news/'.$newsItem->id ] ) }}
                        {{ Form::submit('Видалити', ['class' => 'btn btn-danger']) }}
                    {{Form::close()}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endisset
@endsection