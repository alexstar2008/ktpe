@extends('admin.app')
@section('title','Пропозиції')
@section('content')
<h2>Список вакансій</h2>
<p>
    <a href="/admin/offers/create">Додати вакансію</a>
</p>
@isset($offers)
    <table class="table">
        <tr>
            <th>
                Назва компанії
            </th>
            <th>
                Робота
            </th>
            <th>
                Позиція
            </th>
            <th>
                Повне ім'я
            </th>
            <th>
                Телефон
            </th>
            <th>
                E-Mail
            </th>
            <th></th>
        </tr>

        @foreach($offers as $offer)
            <tr>
                <td>
                    {{$offer->companyName}}
                </td>
                <td>
                    {{$offer->job}}
                </td>
                <td>
                    {{$offer->companyName}}
                </td>
                <td>
                    {{$offer->contactName}}
                </td>
                <td>
                    {{$offer->phone}}
                </td>
                <td>
                    {{$offer->email}}
                </td>
                <td>
                    <a href="/admin/offers/{{$offer->id}}/edit">Редагувати</a>
                    {{--@Html.ActionLink("Delete", "Delete", new { id = item.Id })--}}
                </td>
            </tr>
        @endforeach

    </table>
@endisset
@endsection