document.addEventListener('DOMContentLoaded', function() {
    var select1 = document.getElementById('select1');
    var select2 = document.getElementById('select2');
     
    // Cuando se selecciona una opción del primer select, filtrar opciones del segundo select
    select1.addEventListener('change', function() {
        var id_tabla1 = select1.value;
        console.log(id_tabla1);
        // Limpiar el segundo select
        select2.innerHTML = '<option value="">Seleccione...</option>';
        // Si se ha seleccionado una opción válida en el primer select
        if (id_tabla1 !== '') {
            // Filtrar opciones del segundo select según el valor seleccionado en el primer select
            var options = select2.querySelectorAll('option[subtema_id_tema="' + id_tabla1 + '"]');
           // var options = select2.querySelectorAll('option[id=9]');
            options.forEach(function(option) {
                select2.appendChild(option);
            });
        }else{
            console.log('ey');
        }
    });
});
