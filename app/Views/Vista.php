
<!-- Archivo: app/Views/mi_vista.php -->
    
    <div class="text-center">
        <h1>Vista Contenido</h1>
    </div>
    <div class="cards-container" id="cards-container">
        <div id="resultado" class="content">
            
        </div>
    </div>

    <button onclick="irPagina()" type="button" class="btn btn-outline-success">Administración A</button>

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
