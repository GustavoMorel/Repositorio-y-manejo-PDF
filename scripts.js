document.getElementById("myForm").addEventListener("submit", function (event) {
    var tema = document.getElementById("tema");
    var tema_valor = tema.value;
    var tema_texto = tema.options[tema.selectedIndex].text;


    // Añade campos ocultos al formulario con los valores y textos seleccionados
    var hidden1 = document.createElement("input");
    hidden1.setAttribute("type", "hidden");
    hidden1.setAttribute("name", "tema_valor");
    hidden1.setAttribute("value", tema_valor);
    this.appendChild(hidden1);

    var hidden2 = document.createElement("input");
    hidden2.setAttribute("type", "hidden");
    hidden2.setAttribute("name", "tema_texto");
    hidden2.setAttribute("value", tema_texto);
    this.appendChild(hidden2);


});




function eliminarDocumento(nombreArchivo) {
    var confirmacion = confirm('¿Estás seguro de que quieres eliminar este documento?');
    if (confirmacion) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '/proyecto-repositorio-documentos/sistema/componentes/eliminar_documento.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status === 200) {
                alert(xhr.responseText);
                location.reload(); // Recarga la página después de eliminar el documento
            }
        };
        xhr.send('nombreArchivo=' + nombreArchivo);
    }
}

function eliminarSubtema(subtema) {
    var confirmacion = confirm('¿Estás seguro de que quieres eliminar este documento?');
    if (confirmacion) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../componentes/borrar.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status === 200) {
                alert(xhr.responseText);
                location.reload(); // Recarga la página después de eliminar el documento
            }
        };
        xhr.send('id=' + subtema);
    }
}