@extends('pages.app')
@section('title','Пропозиції роботодавців')
@section('content')
    <div class="container" style="margin-top: 15px;">
        <div class="row">
            <div class="col s12 m12">
                <div class="card">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                        text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                        make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                        of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                        software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                        text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                        make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                        of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                        software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                        text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                        make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                    </p>     

                    <table id="offers" class="responsive-table center">
                        <tr>
                            <th>Дата надходження пропозиції</th>
                            <th>Компанія</th>
                            <th>Вакансія</th>
                            <th>Контактна особа</th>
                            <th>Контакти</th>
                        </tr>
                        @foreach($offers as $offer)
                            <tr>
                                <td>{{ $offer->created_at }}</td>
                                <td>{{ $offer->companyName }}</td>
                                <td>{{ $offer->job }}</td>
                                <td>{{ $offer->contactName }}</td>
                                <td>{{ $offer->phone }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>   
@endsection