@extends('admin.app')
@section('title','Олімпіади')

@section('content')
<h2 class="text-center">Список олімпіад</h2>
<p>
    <a href="/admin/competitions/create">Додати олімпіаду</a>
</p>
<table class="table">
<thead>
    <tr>
        <th>
            Заголовок
        </th>
        <th>
            Дата створення
        </th>
        <th></th>
    </tr>
</thead>
<tbody>
@foreach($competitions as $competition)
    <tr>
        <td>
            {{$competition->title}}
        </td>
        <td>
            {{$competition->created_at}}
        </td>
        <td>
            <a  href="/admin/competitions/{{$competition->id}}/edit">Редагувати</a>
            {{--<a  href="/competitions">Видалити</a>--}}
        </td>
    </tr>
@endforeach
</tbody>
</table>
@endsection
