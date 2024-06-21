    <div class="container">
        <div class="text-center">
        <h1>Noticia Completa</h1>
        </div>
        <div id="resultado">
            
        </div>

        <div class="row">
            <div class="dflex justify-content-md-end">
                <div class="fixed-bottom">
                    <button onclick="irPagina()" type="button" class="btnInicio">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                            <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                        </svg>
                        <span>
                            Inicio
                        </span>
                    </button>
                </div>
            </div>   
        </div>
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
                
                cardsHtml += '<div class="noticia">';
                cardsHtml += `
                                <img src="image/${data['img_p']}" class="img_noticia" alt="...">
                                
                                `

                    cardsHtml +=`
                                <h1 class="titulo_noticia">
                                    <strong>
                                        ${data['title']}
                                    </strong>
                                </h1>
                                `
                    
                    cardsHtml +=`
                                <h2 class="contenido_noticia">
                                        ${data['description']}
                                </h2>
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
            window.location.href ='../public'; // Reemplaza 'otra_pagina.html' con la URL de la página a la que deseas ir
        }
</script>

