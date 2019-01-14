function marcarDesmarcar() {
    let marcar=document.getElementById("maestro").checked;
    [].forEach.call(document.getElementsByTagName("input"), function (e) { e.checked=marcar; })
}