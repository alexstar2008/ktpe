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
        </td>
        <td>
            {{Form::open([ 'method'  => 'delete', 'url' => '/admin/competitions/'.$competition->id ] ) }}
            {{ Form::submit('Видалити', ['class' => 'btn btn-danger']) }}
            {{Form::close()}}
        </td>
    </tr>
@endforeach
</tbody>
</table>
@endsection
