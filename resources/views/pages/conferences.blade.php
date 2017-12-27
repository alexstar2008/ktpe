@extends('pages.app')
@section('title','Конференції')
@section('content')
    <script>
        $.ajax({
            url: "http://localhost:8000/api/conferences",
            type: "GET",
            success: function (responce) {

                for(i = 0; i < responce.length; i++) {
                    if(responce[i].PhotoLink !== null) {
                        $("#conferences").html(
                            $("#conferences").html() + '<div class="card horizontal">' + '<div class="card-image">' + '<img src="' + responce[i].PhotoLink + '">' + '</div>' + '<div class="card-stacked">' + '<div class="card-content">' + '<span class="card-title">' + '<b>' + responce[i].title + '</b>' + '</span>' + '<p class="date">' + '<b>' + responce[i].created_at + '</b>' + '</p>' + '<p>' + responce[i].text + '</p>' + '</div>' + '<div class="card-action">' + '<a href="#modal-conference' + [i] + '">' + 'Більше інформації' + '</a>' + '</div>' + '</div>' + '</div>'
                        );
                    } else {
                        $("#conferences").html(
                            $("#conferences").html() + '<div class="card horizontal">' + '<div class="card-stacked">' + '<div class="card-content">' + '<span class="card-title">' + '<b>' + responce[i].title + '</b>' + '</span>' + '<p class="date">' + '<b>' + responce[i].created_at + '</b>' + '</p>' + '<p>' + responce[i].text + '</p>' + '</div>' + '<div class="card-action">' + '<a href="#modal-conference' + [i] + '">' + 'Більше інформації' + '</a>' + '</div>' + '</div>' + '</div>'
                        );
                    }

                    $("#modal").html(
                        $("#modal").html() + '<div id="modal-conference' + [i] + '" class="modal modal-fixed-footer">' + '<div class="modal-content">' + '<h4>' + responce[i].title + '</h4>' + '<p>' + responce[i].text + '</p>' + '</div>' + '<div class="modal-footer">' + '<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">' + 'Назад' + '</a>' + '</div>' + '</div>'
                    );
                }

                $(document).ready(function(){
                    $('.modal').modal();
                });
            },            

            error: function (responce) {
                alert('Smth going wrong!');
            }
        });
    </script>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col s12 m12" id="conferences">
                
            </div>
        </div>
    </div>
@endsection
