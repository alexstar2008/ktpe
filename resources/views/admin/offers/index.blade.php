@extends('admin.app')
@section('title','Пропозиції')
@section('content')
<h2 class="text-center">Список вакансій</h2>
<p>
    <a href="/admin/offers/create">Додати вакансію</a>
</p>
@isset($offers)
    <table class="table">
        <thead>
        <tr>
            <th>
                Назва компанії
            </th>
            <th>
                Вакансія
            </th>
            <th>
                Позиція
            </th>
            <th>
                Контактна особа
            </th>
            <th>
                Телефон
            </th>
            <th>
                E-Mail
            </th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($offers as $offer)
            <tr>
                <td>
                    {{$offer->company_name}}
                </td>
                <td>
                    {{$offer->job}}
                </td>
                <td>
                    {{$offer->position}}
                </td>
                <td>
                    {{$offer->contact_name}}
                </td>
                <td>
                    {{$offer->phone}}
                </td>
                <td>
                    {{$offer->email}}
                </td>
                <td>
                    <a href="/admin/offers/{{$offer->id}}/edit">Редагувати</a>
                </td>
                <td>
                    {{Form::open([ 'method'  => 'delete', 'url' => '/admin/offers/'.$offer->id ] ) }}
                    {{ Form::submit('Видалити', ['class' => 'btn btn-danger']) }}
                    {{Form::close()}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endisset
@endsection