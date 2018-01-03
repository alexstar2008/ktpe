@extends('pages.app')
@section('title',__('offers.seo_title'))

@section('content')
    <div class="container" style="margin-top: 15px;">
        <div class="row">
            <div class="col s12 m12">
                <div class="card">
                    <table id="offers" class="responsive-table center">
                        <tr>
                            @lang('offers.table')
                        </tr>
                        @isset($offers)
                            @foreach($offers as $offer)
                                @if(app()->isLocale('ua'))
                                    <tr>
                                        <td>{{ $offer->created_at }}</td>
                                        <td>{{ $offer->company_name }}</td>
                                        <td>{{ $offer->job }}</td>
                                        <td>{{ $offer->position }}</td>
                                        <td>{{ $offer->contact_name }}</td>
                                        <td>{{ $offer->phone }}</td>
                                        <td>{{ $offer->email }}</td>
                                    </tr>
                                @else
                                    <tr>
                                        <td>{{ $offer->created_at }}</td>
                                        <td>{{ $offer->company_name_en }}</td>
                                        <td>{{ $offer->job_en }}</td>
                                        <td>{{ $offer->position_en }}</td>
                                        <td>{{ $offer->contact_name_en }}</td>
                                        <td>{{ $offer->phone }}</td>
                                        <td>{{ $offer->email }}</td>
                                    </tr>
                                @endif
                            @endforeach
                        @endisset
                    </table>
                </div>
            </div>
        </div>
    </div>   
@endsection