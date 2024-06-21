
    <div class="container">
        <div class="row">
            <h1>
                    Administración de Articulos
            </h1>
        </div>
    
        <div class="row ">
            <div class="dflex justify-content-md-end">
                <button type="button" class="btn btn-success " id="btnNuevoArticulo">
                        Nuevo
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd" d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                    </svg>
                       Articulo  
                </button>
                
            </div>    
        </div>

                <table id="tableArticulos" class="table table-bordered border-dark table-striped table-condensed table-hover table responsive" style="width:100%">
                      <thead class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>Título</th>
                                <th>Palabras clave</th>
                                <th>Area</th>
                                <th>Tipo</th>
                                <th>Nombre de Portada</th>
                                <th>Nombre de Thumbnail</th>
                                <th>Descripción</th>
                                <th>Fecha</th>
                                <th>Fecha de actualización</th>
                                <th>Acciones</th>
                            </tr>
                          </thead>
                        <tbody id="actualizar">
                                                           
                        </tbody>
                               
                </table>
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

    <div class="container ">

          <div class="modal fade" id="modalTabla" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formArticulo">    
                    <div class="modal-body">
                            <div class="form-group">
                            <label for="titulo" class="col-form-label">Titulo:</label>
                            <input type="text" class="form-control" id="titulo">
                            </div>

                            <div class="form-group">
                            <label for="keywords" class="col-form-label">Keywords:</label>
                            <input type="text" class="form-control" id="keywords">
                            </div>

                            <div class="form-group">
                            <label for="area" class="col-form-label">Area:</label>
                            <input type="text" class="form-control" id="area">
                            </div>

                            <div class="form-group">
                            <label for="tipo" class="col-form-label">Tipo:</label>
                            <input type="text" class="form-control" id="tipo">
                            </div>
                            
                            <div class="form-group">
                            <label for="nombre_portada" class="col-form-label">Nombre Portada:</label>
                            <input type="text" class="form-control" id="nombre_portada">
                            </div>

                            <div class="form-group">
                            <label for="nombre_previa" class="col-form-label">Nombre Previa:</label>
                            <input type="text" class="form-control" id="nombre_previa">
                            </div>

                            <div class="form-group">
                                <label for="descripcion" class="col-form-label">Descripción:</label>
                                <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" name="descripcion_e" id="descripcion" style="height: 100px"></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group">
                            <label for="titulo" class="col-form-label">Fecha:</label>
                            <input type="datetime-local" class="form-control" id="fecha">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
                        </div>
                    </form>
          
                </div>
                
              </div>
            </div>
          </div>

    </div>

    <div class="container ">

          <div class="modal fade" id="modalTablaEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formArticuloEdit" method="POST">    
                        <div class="modal-body">
                            <div class="form-group">
                            <label for="id_e" class="col-form-label">Id:</label>
                            <input type="text" class="form-control" id="id_e" readonly>
                            </div>

                            <div class="form-group">
                            <label for="titulo_e" class="col-form-label">Titulo:</label>
                            <input type="text" class="form-control" id="titulo_e">
                            </div>

                            <div class="form-group">
                            <label for="keywords" class="col-form-label">Keywords:</label>
                            <input type="text" class="form-control" id="keywords_e">
                            </div>

                            <div class="form-group">
                            <label for="area" class="col-form-label">Area:</label>
                            <input type="text" class="form-control" id="area_e">
                            </div>

                            <div class="form-group">
                            <label for="tipo" class="col-form-label">Tipo:</label>
                            <input type="text" class="form-control" id="tipo_e">
                            </div>
                            
                            <div class="form-group">
                            <label for="nombre_portada_e" class="col-form-label">Nombre Portada:</label>
                            <input type="text" class="form-control" id="nombre_portada_e">
                            </div>

                            <div class="form-group">
                            <label for="nombre_previa_e" class="col-form-label">Nombre Previa:</label>
                            <input type="text" class="form-control" id="nombre_previa_e">
                            </div>

                            <div class="form-group">
                                <label for="descripcion_e" class="col-form-label">Descripción:</label>
                                <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" name="descripcion_e" id="descripcion_e" style="height: 100px"></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group">
                            <label for="titulo" class="col-form-label">Fecha:</label>
                            <input type="datetime-local" class="form-control" id="fecha_e">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
                        </div>
                    </form>
          
                </div>
                
              </div>
            </div>
          </div>

    </div>

<script>

    // Función para redirigir a otra página
    function irPagina() {
            window.location.href ='../public'; // Reemplaza 'otra_pagina.html' con la URL de la página a la que deseas ir
    }

    $(document).ready(function(){
        tableRI = $('#tableArticulos').DataTable({
        //scrollY: '200px',
        //responsive: true,
        dom: 'Bflrtip',
        buttons: [
            'copy', 'csv', 'excel','print',
        ],
        /*"columnDefs":[{
            "targets": -1,
            "data":null,
            "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditar'>Editar</button><button class='btn btn-danger btnBorrar'>Borrar</button></div></div>"  
           }],*/
            
        "language": {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast":"Último",
                    "sNext":"Siguiente",
                    "sPrevious": "Anterior"
                 },
                 "sProcessing":"Procesando...",
            },
            ajax: {
                    url: 'http://localhost/codeig4/public/Contenidos/listaContenidosPortada',
                    dataSrc: ''
                },
                columns: [
                    { data: 'id' },
                    { data: 'title' },
                    { data: 'keywords' },
                    { data: 'area' },
                    { data: 'type' },
                    { data: 'img_p' },
                    { data: 'thumbnail' },
                    { data: 'description' },
                    { data: 'date' },
                    { data: 'update_at'},
                    {
                        data: null,
                        render: function (data, type, row) {
                            //return '<button class="editar" data-id="' + row.id + '">Editar</button>' +
                            //       '<button class="borrar" data-id="' + row.id + '">Borrar</button>';
                            return`
                                <div class='text-center'>
                                    <div class='btn-group'>
                                        <button class='btn btn-primary btnEditar' data-id='${row.id}'>Editar</button>
                                        <button class='btn btn-danger btnBorrar' data-id='${row.id}'>Borrar</button>
                                    </div>
                                </div>`;
                        }
                    }
                ]

        });

        // Configurar eventos para los botones
        $('#tableArticulos').on('click', '.btnEditar', function() {
                var id = $(this).data('id');
                // Lógica para editar usando el ID
               // alert('Editar fila con ID ' + id);

                fila = $(this).closest("tr");
                id = parseInt(fila.find('td:eq(0)').text());
                titulo = fila.find('td:eq(1)').text();
                keywords = fila.find('td:eq(2)').text();
                area = fila.find('td:eq(3)').text();
                tipo= fila.find('td:eq(4)').text();
                nombre_portada = fila.find('td:eq(5)').text();
                nombre_previa = fila.find('td:eq(6)').text();
                
                descripcion = fila.find('td:eq(7)').text();
                tinymce.get('descripcion_e').setContent(descripcion);

                descripcion = fila.find('td:eq(7)').text();
                fecha = fila.find('td:eq(8)').text();

                $("#id_e").val(id);
                $("#titulo_e").val(titulo);
                $("#keywords_e").val(keywords);
                $("#area_e").val(area);
                $("#tipo_e").val(tipo);
                $("#nombre_portada_e").val(nombre_portada);
                $("#nombre_previa_e").val(nombre_previa);
                $("#descripcion_e").val(descripcion);
                $("#fecha_e").val(fecha);

                opcion = 2; //editar

                $(".modal-header").css("background-color", "#4e73df");
                $(".modal-header").css("color", "white");
                $(".modal-title").text("Editar Articulo");
                $("#modalTablaEdit").modal("show");
        });

        $("#btnNuevoArticulo").click(function(){

            $("#formArticulo").trigger("reset");
            $(".modal-header").css("background-color", "#1cc88a");
            $(".modal-header").css("color", "white");
            $(".modal-title").text("Nuevo Articulo");
            $("#modalTabla").modal("show");

                id=null;
                opcion = 1; // alta de articulo
        });

        $("#formArticulo").submit(function(e){
            e.preventDefault();    
            titulo = $.trim($("#titulo").val());
            keywords = $.trim($("#keywords").val());
            area = $.trim($("#area").val());
            tipo = $.trim($("#tipo").val());
            nombre_portada = $.trim($("#nombre_portada").val());
            nombre_previa = $.trim($("#nombre_previa").val());
            descripcion = tinymce.get('descripcion').getContent();
            fecha =$.trim($("#fecha").val());
            
            console.log(fecha);
            $.ajax({
                url: "http://localhost/codeig4/public/Contenidos/nuevoContenido",
                type: "POST",
                contentType: "application/json",
                data: JSON.stringify({
                    title: titulo,
                    keywords: keywords,
                    area: area,
                    type: tipo,
                    img_p: nombre_portada,
                    thumbnail: nombre_previa,
                    description: descripcion,
                    date: fecha,
                    id: id,
                    opcion: opcion
                }),
                success: function(data){  
                    //Insertar en el datatable la nueva fila
                    tableRI.ajax.reload();           
                }     
            });

            $("#modalTabla").modal("hide");    
        
        });

        $("#formArticuloEdit").submit(function(e){
            e.preventDefault();
            id = $.trim($("#id_e").val());    
            titulo = $.trim($("#titulo_e").val());
            keywords = $.trim($("#keywords_e").val());
            area = $.trim($("#area_e").val());
            tipo = $.trim($("#tipo_e").val());
            nombre_portada = $.trim($("#nombre_portada_e").val());
            nombre_previa = $.trim($("#nombre_previa_e").val());
            descripcion = tinymce.get('descripcion_e').getContent();
            fecha =$.trim($("#fecha_e").val());

            console.log(id);

            $.ajax({
                url: "http://localhost/codeig4/public/Contenidos/actualizarContenido/"+id,
                type: "POST",
                contentType: "application/json",
                data: JSON.stringify({
                    title: titulo,
                    keywords: keywords,
                    area: area,
                    type: tipo,
                    img_p: nombre_portada,
                    thumbnail: nombre_previa,
                    description: descripcion,
                    date: fecha,
                    id: id,
                    opcion: opcion
                }),
                success: function(data){  
                    //Insertar en el datatable la nueva fila
                    tableRI.ajax.reload();
                }     
            });

            $("#modalTablaEdit").modal("hide");   
            
        });

    }
    );

</script>