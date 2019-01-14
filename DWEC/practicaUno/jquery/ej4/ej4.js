function marcarDesmarcar() {
    let marcar=$("#maestro").prop('checked');
    [].forEach.call($("input"), function (e) { e.checked=marcar; })
}