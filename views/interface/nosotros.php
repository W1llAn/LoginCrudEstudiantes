    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
    <div class="container">
        <div class="row flex-lg-nowrap">
           <!--  <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
                <div class="card p-3">
                    <div class="e-navlist e-navlist--active-bg">
                        <ul class="nav">
                            <li class="nav-item"><a class="nav-link px-2 active" href="#"><i class="fa fa-fw fa-bar-chart mr-1"></i><span>Overview</span></a></li>
                            <li class="nav-item"><a class="nav-link px-2" href="https://www.bootdey.com/snippets/view/bs4-crud-users" target="__blank"><i class="fa fa-fw fa-th mr-1"></i><span>CRUD</span></a></li>
                            <li class="nav-item"><a class="nav-link px-2" href="https://www.bootdey.com/snippets/view/bs4-edit-profile-page" target="__blank"><i class="fa fa-fw fa-cog mr-1"></i><span>Settings</span></a></li>
                        </ul>
                    </div>
                </div>  
            </div> -->

            <div class="col">
                <div class="e-tabs mb-3 px-3">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" href="#">Users</a></li>
                    </ul>
                </div>

                <div class="row flex-lg-nowrap">
                    <div class="col mb-3">
                        <div class="e-panel card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h6 class="mr-2"><span>Users</span><small class="px-1">Be a wise leader</small></h6>
                                </div>
                                <div class="e-table">
                                    <div class="table-responsive table-lg mt-3">
                                        <table class="table table-bordered" id="students-table">
                                            <thead>
                                                <tr>
                                                    <th>Cédula</th>
                                                    <th>Nombre</th>
                                                    <th>Apellido</th>
                                                    <th>Teléfono</th>
                                                    <th>Dirección</th>
                                                    <th>Curso</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Datos se llenarán con AJAX -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <ul class="pagination mt-3 mb-0">
                                            <li class="disabled page-item"><a href="#" class="page-link">‹</a></li>
                                            <li class="active page-item"><a href="#" class="page-link">1</a></li>
                                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                                            <li class="page-item"><a href="#" class="page-link">4</a></li>
                                            <li class="page-item"><a href="#" class="page-link">5</a></li>
                                            <li class="page-item"><a href="#" class="page-link">›</a></li>
                                            <li class="page-item"><a href="#" class="page-link">»</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center px-xl-3">
                                    <button class="btn btn-success btn-block" type="button" data-bs-toggle="modal" data-bs-target="#user-form-modal1">New User</button>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- User Form Modal -->
            <div class="modal fade" role="dialog" tabindex="-1" id="user-form-modal1">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Editar Estudiante</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="py-1">
                                <form id="student-form">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="estCedula">Cédula</label>
                                                <input type="text" class="form-control" id="estCedula" name="estCedula" placeholder="Cédula" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="estNombre">Nombre</label>
                                                <input type="text" class="form-control" id="estNombre" name="estNombre" placeholder="Nombre" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="estApellido">Apellido</label>
                                                <input type="text" class="form-control" id="estApellido" name="estApellido" placeholder="Apellido" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="estTelefono">Teléfono</label>
                                                <input type="text" class="form-control" id="estTelefono" name="estTelefono" placeholder="Teléfono" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="estDireccion">Dirección</label>
                                                <input type="text" class="form-control" id="estDireccion" name="estDireccion" placeholder="Dirección" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="curId">Curso</label>
                                                <select class="form-control" id="curId" name="curId" required>
                                                    <!-- Las opciones se llenarán dinámicamente con AJAX -->
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col d-flex justify-content-end">
                                            <button class="btn btn-primary" type="submit">Guardar Estudiante</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Cargar datos de estudiantes
            $.ajax({
                url: 'http://localhost/LoginCrudEstudiantes/controllers/APIRest.php?tipo=estudiantes', // Cambia esto por la ruta correcta a tu archivo PHP
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    var tableBody = $('#students-table tbody');
                    tableBody.empty();
                    if (data !== "No hay estudiantes") {
                        data.forEach(function(student) {
                            var row = '<tr>' +
                                '<td>' + student.estCedula + '</td>' +
                                '<td>' + student.estNombre + '</td>' +
                                '<td>' + student.estApellido + '</td>' +
                                '<td>' + student.estTelefono + '</td>' +
                                '<td>' + student.estDireccion + '</td>' +
                                '<td data-curso-id="' + student.nombre + '">' + student.nombre + '</td>'+
                                '<td class="text-center align-middle">' +
                                    '<div class="btn-group align-top">' +
                                        '<button class="btn btn-warning btn-sm btn-outline-secondary badge edit-btn" type="button" data-bs-toggle="modal" data-bs-target="#user-form-modal1">Edit</button>' +
                                        '<button class="btn btn-danger btn-sm btn-outline-secondary badge delete-btn" type="button"><i class="fa fa-trash"></i></button>' +
                                    '</div>' +
                                '</td>' +
                                '</tr>';
                            tableBody.append(row);
                        });
                    } else {
                        var noData = '<tr><td colspan="8" class="text-center">No hay estudiantes</td></tr>';
                        tableBody.append(noData);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error en la solicitud AJAX:', status, error);
                }
            });

            $(document).ready(function() {
            // Limpiar los campos del formulario cuando se abra el modal
            $('#user-form-modal1').on('show.bs.modal', function (e) {
                // Limpiar los campos de texto
                $('#estCedula, #estNombre, #estApellido, #estTelefono, #estDireccion').val('');
                // Limpiar el campo de curso y seleccionar la primera opción
                $('#curId').val($('#curId option:first').val()).change();
            });
        });

            $.ajax({
                url: 'http://localhost/LoginCrudEstudiantes/controllers/APIRest.php?tipo=cursos', // Cambia esto por la ruta correcta a tu archivo PHP para obtener los cursos
                method: 'GET',
                dataType: 'json',
                success: function(cursos) {
                    var cursoSelect = $('#curId');
                    cursoSelect.empty();
                    cursos.forEach(function(curso) {
                        var option = $('<option></option>')
                            .attr('value', curso.curId)
                            .text(curso.nombre);
                        cursoSelect.append(option);
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error en la solicitud AJAX:', status, error);
                }
            });

    // Capturar clic en el botón de editar
    $(document).on('click', '.edit-btn', function() {
        // Obtener la fila de la tabla
        var row = $(this).closest('tr');

        // Obtener los datos de la fila
        var cedula = row.find('td:eq(0)').text();
        var nombre = row.find('td:eq(1)').text();
        var apellido = row.find('td:eq(2)').text();
        var telefono = row.find('td:eq(3)').text();
        var direccion = row.find('td:eq(4)').text();
        var cursoId = row.find('td:eq(5)').data('curso-id'); 

        // Llenar los campos del formulario del modal con los datos obtenidos
        $('#estCedula').val(cedula);
        $('#estNombre').val(nombre);
        $('#estApellido').val(apellido);
        $('#estTelefono').val(telefono);
        $('#estDireccion').val(direccion);
        $('#curId').val(cursoId).change(); 

        // Adjuntar el evento submit del formulario de edición
        $('#student-form').off('submit').on('submit', function(e) {
            e.preventDefault();

            // Obtener los datos del formulario
            var formData = $(this).serialize();

            // Agregar la cédula al formulario
            formData += '&cedula=' + cedula;

            $.ajax({
                url: 'http://localhost/LoginCrudEstudiantes/controllers/APIRest.php?cedula='+cedula, 
                method: 'PUT',
                data: formData, 
                dataType: 'json',
                success: function(response) {
                    alert(response);
                    $('#user-form-modal1').modal('hide');
                    location.reload(); 
                },
                error: function(xhr, status, error) {
                    console.error('Error en la solicitud AJAX:', status, error);
                }
            });
        });
    });
            // Manejar el envío del formulario
            $('#student-form').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: 'http://localhost/LoginCrudEstudiantes/controllers/APIRest.php', 
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        alert(response);
                        $('#user-form-modal1').modal('hide');
                        location.reload(); 
                    },
                    error: function(xhr, status, error) {
                        console.error('Error en la solicitud AJAX:', status, error);
                    }
                });
            });
        });

    $(document).ready(function() {
    $(document).on('click', '.delete-btn', function() {
        var row = $(this).closest('tr');
        var cedula = row.find('td:eq(0)').text(); // Obtener la cédula del estudiante
        if (confirm("¿Estás seguro de que quieres eliminar este estudiante?")) {
            // Realizar la solicitud AJAX para eliminar el estudiante
            $.ajax({
                url: 'http://localhost/LoginCrudEstudiantes/controllers/APIRest.php?cedula='+cedula, // Ruta al archivo PHP de eliminación
                method: 'DELETE',
                dataType: 'json',
                success: function(response) {
                    alert(response);
                    location.reload(); // Recargar la página para mostrar la lista actualizada
                },
                error: function(xhr, status, error) {
                    console.error('Error en la solicitud AJAX:', status, error);
                }
            });
        }
    });
});



    </script>
    </body>
    </html>

