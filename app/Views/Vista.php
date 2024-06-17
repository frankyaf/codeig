
<!-- Archivo: app/Views/mi_vista.php -->
    <div class="container">
        <div class="text-center">
        <h1>Mi Vista</h1>
        </div>

        <div id="resultado">
            
        </div>
        <button onclick="irPagina()" type="button" class="btn btn-outline-success">Administración A</button>
    </div>
    
    

    <script>
        // Acceder al servicio REST con jQuery
        $.ajax({
            url: 'http://localhost/codeig4/public/Contenidos/listaContenidosPortada',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                // Manejar los datos recibidos
                console.log(data);
                // Filas que deseas mostrar (2, 3, 6)
                titulo=data[0]['titulo'];

                console.log(titulo);
                var selectedRows = [1, 2, 6];
                // Crear cards
                var cardsHtml = '';

                cont = 0;
                $.each(data, function(_, row) {
                    cardsHtml += '<div class="card">';
                    $.each(selectedRows, function(_, rowIndex) {
                        cardsHtml += `<p><strong>${Object.keys(row)[rowIndex]}:</strong> ${row[Object.keys(row)[rowIndex]]}</p>`;
                    });
                    cardsHtml += `<a href="${data[cont]['id']}" class="stretched-link">Go somewhere</a>`
                    cardsHtml += `
                                <div class="container">
                                <div class="d-flex justify-content-center">
                                <img src="Image/${data[cont]['nombre_portada']}" class="img-fluid img-thumbnail" alt="..." width=20%>
                                </div>
                                </div>
                                `
                    cardsHtml += '</div>';
                    cont += 1;
                });
                
                // Mostrar las cards en el elemento con ID 'resultado'
                $('#resultado').html(cardsHtml);
            },
            error: function(xhr, status, error) {
                console.error('Error al acceder al servicio REST:', error);
            }
        });

        // Función para redirigir a otra página
        function irPagina() {
            window.location.href ='listaArticulos'; // Reemplaza 'otra_pagina.html' con la URL de la página a la que deseas ir
        }
    </script>
