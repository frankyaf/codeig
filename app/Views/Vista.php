
<!-- Archivo: app/Views/mi_vista.php -->
    
    <div class="text-center">
        <h1>Vista Contenido</h1>
    </div>
    <div class="cards-container" id="cards-container">
        <div id="resultado" class="content">
            
        </div>
    </div>

    <button onclick="irPagina()" type="button" class="btnTabla">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 0 1-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0 1 12 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
        
    </svg>
    Tabla
    </button>

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

                // Crear cards
                var cardsHtml = '';

                cont = 0;
                $.each(data, function(_, row) {
                    /*Obtener la descripcion de la data a una variable*/
                    descripcion = data[cont]['description'];
                    var contenidoModificado = descripcion.replace(/<p>/g, '<p class="text-hidden">');

                    cardsHtml += '<div class="card">';
                    /*$.each(selectedRows, function(_, rowIndex) {
                        cardsHtml += `<p><strong>${Object.keys(row)[rowIndex]}:</strong> ${row[Object.keys(row)[rowIndex]]}</p>`;
                    });
                    cardsHtml += `<a href="${data[cont]['id']}" class="stretched-link">Go somewhere</a>`*/
                    cardsHtml += `
                                <a href="${data[cont]['id']}" class="card">
                                <img src="image/${data[cont]['img_p']}" class="img-fluid cover" alt="...">
                                
                                `

                    cardsHtml +=`
                                <p class="text-overlay">
                                    <strong>
                                        ${data[cont]['title']}
                                    </strong>
                                </p>
                                `
                    //Añade el contenido modificado a la card
                    cardsHtml +=`
                                        ${contenidoModificado}
                                `
                    //cardsHtml += `<a href="${data[cont]['id']}"></a>`
                    cardsHtml += `</a></div>`;

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
            window.location.href ='listaContenidos'; // Reemplaza 'otra_pagina.html' con la URL de la página a la que deseas ir 
        }
    </script>
