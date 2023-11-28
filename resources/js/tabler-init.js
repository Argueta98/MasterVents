/*
Import the jQuery
*/

import jQuery from "jquery";

window.$ = window.jQuery = jQuery;

/*
Import the Tabler Js with Demo theme
*/
import '../../node_modules/@tabler/core/dist/js/tabler';
import '../../node_modules/@tabler/core/src/js/demo-theme';

document.addEventListener('DOMContentLoaded', function () {
    // Manejar el evento de cambio en el campo de búsqueda
    document.getElementById('searchTable').addEventListener('input', function () {
        // Obtener el valor de búsqueda
        var searchValue = this.value.toLowerCase();

        // Obtener todas las filas de la tabla
        var rows = document.querySelectorAll('table.datatable tbody tr');

        // Filtrar las filas de la tabla
        rows.forEach(function (row) {
            // Obtener el contenido de texto de la fila
            var textContent = row.textContent || row.innerText;

            // Mostrar u ocultar la fila según el valor de búsqueda
            row.style.display = textContent.toLowerCase().includes(searchValue) ? '' : 'none';
        });
    });
});
