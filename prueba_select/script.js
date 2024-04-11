document.addEventListener('DOMContentLoaded', function() {
    var selectTema = document.getElementById('selectTema');
    var selectSubtema = document.getElementById('selectSubtema');
    var subtemas = <?php include 'consulta_subtemas.php'; ?>; // Obtener subtemas desde PHP

    // Cuando se selecciona una opción del primer select, filtrar opciones del segundo select
    selectTema.addEventListener('change', function() {
        var id_tema = selectTema.value;
        // Limpiar el segundo select
        selectSubtema.innerHTML = '<option value="">Seleccione...</option>';
        // Si se ha seleccionado una opción válida en el primer select
        if (id_tema !== '') {
            // Filtrar subtemas según el tema seleccionado en el primer select
            var filteredSubtemas = subtemas.filter(function(subtema) {
                return subtema.subtema_id_tema == id_tema;
            });
            // Llenar el segundo select con los subtemas filtrados
            filteredSubtemas.forEach(function(subtema) {
                var option = document.createElement('option');
                option.value = subtema.id;
                option.textContent = subtema.subtema_den;
                selectSubtema.appendChild(option);
            });
        }
    });
});
