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

$("input[type=radio]").change(function () {
    if (this.value==="fecha"){
        $("#busqueda").prop('type','date');
    }else {
        $("#busqueda").prop('type','text');
    }
});

function filtrarEventos() {

    if($("#busqueda").val()!=""){
        $.ajax({
            url: 'http://localhost/servi/3Evaluacion/appEventos/api/eventosBusqueda.php',
            method:'get',
            data:{"por":$('input[type=radio]:checked').val(),
                    "busqueda":$("#busqueda").val()},
            statusCode: {
                404: function() {
                    alert("La busqueda no ha devuelto ningún resultado");
                    $("#busqueda").val("");
                },
                200: function (data) {
                    rellenarTabla(data);
                }
            },
        });
        return false;
    }
}
function rellenarTabla(data) {
    var tbody=$('#tablaEventos > tbody');
    tbody.empty();

    data.forEach(evento => {
        tbody.append("<tr>" +
                "<th scope=\"row\">"+evento["nombreEvento"]+"</th>" +
                    "<td>"+evento["tipo"]+"</td>" +
                    "<td>"+evento["fecha"]+"</td>" +
                    "<td>"+evento["nombreLocal"]+"</td>" +
                    "<td>" +
                        "<a tabindex=\"0\" class=\"btn btn-outline-info\" role=\"button\" data-toggle=\"popover\" data-trigger=\"focus\" data-content=\""+evento["descripcion"]+"\">Ver descripción</a>" +
                    "</td>" +
            "</tr>");
    });
}