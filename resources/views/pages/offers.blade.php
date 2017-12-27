@extends('pages.app')
@section('title','Пропозиції роботодавців')
@section('content')
    <script>
        $.ajax({
            url: "http://localhost:8000/api/offers",
            type: "GET",
            success: function (responce) {
                for(i = 0; i < responce.length; i++) {
                    $("#offers").html(
                        $("#offers").html() + '<tr>' +  '<td>' + responce[i].created_at + '</td>' +  '<td>' + responce[i].companyName + '</td>' +  '<td>' + responce[i].job + '</td>' +  '<td>' + responce[i].contactName + '<br>' + responce[i].position + '</td>' +  '<td>' + responce[i].phone + '<br>' +responce[i].email + '</td>' + '</tr>'
                    );
                }
            },
            error: function (responce) {
                alert('Smth going wrong!');
            }
        });
    </script>
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
                            <th>Вакансії</th>
                            <th>Контактна особа</th>
                            <th>Контакти</th>
                        </tr>
                    </table>



                </div>
            </div>
        </div>
    </div>   
@endsection