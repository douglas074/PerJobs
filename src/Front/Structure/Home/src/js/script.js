var iconCarregando = $('<span class="destaque">Carregando. Por favor aguarde...</span>');

$('#postForm').submit(function (e) {
    e.preventDefault();
    var serialize = $('#postForm').serialize();

    $.ajax({
        url: '/PerJobs/src/Front/Structure/Home/src/NewPost.php',
        dataType: 'html',
        type: 'POST',
        data: serialize,
        beforeSend: function () {
            $('#insere_aqui').html(iconCarregando);
        },
        complete: function () {
            $(iconCarregando).remove();
        },
        success: function (data) {
            $('#insere_aqui').html('<p>' + data + '</p>');
        },
        error: function (xhr, er) {
            $('#mensagem_erro').html('<p class="destaque">Error ' + xhr.status + ' - ' + xhr.statusText + '<br />Tipo de erro: ' + er + '</p>')
        }
    });

});