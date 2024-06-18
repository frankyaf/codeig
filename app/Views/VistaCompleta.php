    <div class="container">
        <div class="text-center">
        <h1>Noticia Completa comp</h1>
        </div>
        <div id="resultado">
            
        </div>

        <button onclick="irPagina()" type="button" class="btn btn-outline-success">Administración a</button>
    </div>
<script>
    ObjectID = <?php echo $id ?>;
    $.ajax({
            url: 'http://localhost/codeig4/public/Contenidos/listaContenidos/'+ObjectID,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                // Manejar los datos recibidos
                console.log(data);
                // Filas que deseas mostrar (2, 3, 6)
                titulo=data['title'];
                console.log(titulo);
                // Crear cards
                var cardsHtml = '';
                
                cardsHtml += '<div class="">';
                cardsHtml += `
                                <img src="image/${data['img_p']}" class="img-fluid cover" alt="...">
                                
                                `

                    cardsHtml +=`
                                <p class="text-overlay">
                                    <strong>
                                        ${data['title']}
                                    </strong>
                                </p>
                                `
                    
                    cardsHtml +=`
                                <h1>
                                        ${data['description']}
                                </h1>
                                `
                    //cardsHtml += `<a href="${data[cont]['id']}"></a>`
                    cardsHtml += `</div>`;

                // Mostrar la card en el elemento con ID 'resultado'
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

