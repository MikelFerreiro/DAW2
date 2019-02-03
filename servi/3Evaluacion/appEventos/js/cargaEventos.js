function cargarEventos(id) {
    $.ajax({
        url: 'http://localhost/servi/3Evaluacion/appEventos/api/eventosPorLocal.php',
        method:'get',
        data:{"id":id},
        statusCode: {
            404: function() {
                alert( "page not found" );
            },
            200: function (data) {
                alert("hell yeah"+data);
            }
        },
        error: function (data) {
            alert("ha ocurrido un error"+data);
        }
    });
}