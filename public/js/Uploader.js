function UploadFile(e, target) {
    e.preventDefault();

    $('#fileUploadSpiner').css('visibility', 'visible');

    var files = document.getElementById('uploadFile').files;
    if (files.length > 0) {
        if (window.FormData !== undefined) {
            var data = new FormData();
            for (var x = 0; x < files.length; x++) {
                data.append("file" + x, files[x]);
            }

            $.ajax({
                type: "POST",
                url: 'http://cathedra-api.azurewebsites.net/api/files/upload',
                contentType: false,
                processData: false,
                data: data,
                success: function (result) {
                    $(target).val(result);
                    $('#imm').attr('src', result);

                    $('#fileUploadSpiner').css('visibility', 'hidden');
                },
                error: function (xhr, status, p3) {
                }
            });
        } else {
            $('#fileUploadSpiner').css('visibility', 'hidden');
            return "Браузер не поддерживает загрузку файлов HTML5!";
        }
    }
    return "Браузер не поддерживает загрузку файлов HTML5!";
};