@extends('pages.app')
@section('title','Пропозиції роботодавців')
@section('content')
    <div class="container" style="margin-top: 15px;">
        <div class="row">
            <div class="col s12 m12">
                <div class="card">
                    <table id="offers" class="responsive-table center">
                        <tr>
                            @lang('offers.table')
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