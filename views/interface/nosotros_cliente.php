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
                                <button class="btn btn-success btn-block" type="button" data-bs-toggle="modal" data-bs-target="#user-form-modal1" disabled>New User</button>
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
                                            <input type="text" class="form-control" id="estCedula" name="estCedula" placeholder="Cédula" required disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="estNombre">Nombre</label>
                                            <input type="text" class="form-control" id="estNombre" name="estNombre" placeholder="Nombre" required disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="estApellido">Apellido</label>
                                            <input type="text" class="form-control" id="estApellido" name="estApellido" placeholder="Apellido" required disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="estTelefono">Teléfono</label>
                                            <input type="text" class="form-control" id="estTelefono" name="estTelefono" placeholder="Teléfono" required disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="estDireccion">Dirección</label>
                                            <input type="text" class="form-control" id="estDireccion" name="estDireccion" placeholder="Dirección" required disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="curId">Curso</label>
                                            <select class="form-control" id="curId" name="curId" required disabled>
                                                <!-- Las opciones se llenarán dinámicamente con AJAX -->
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col d-flex justify-content-end">
                                        <button class="btn btn-primary" type="submit" disabled>Guardar Estudiante</button>
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
            url: 'https://crudestudiantes-hmf5d8dxcph7eacy.westus-01.azurewebsites.net/controllers/APIRest.php?tipo=estudiantes', // Cambia esto por la ruta correcta a tu archivo PHP
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
                                    '<button class="btn btn-warning btn-sm btn-outline-secondary badge edit-btn" type="button" disabled>Edit</button>' +
                                    '<button class="btn btn-danger btn-sm btn-outline-secondary badge delete-btn" type="button" disabled><i class="fa fa-trash"></i></button>' +
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

        // Mensaje al intentar presionar los botones deshabilitados
        $(document).on('click', '.edit-btn, .delete-btn, #user-form-modal1 button', function() {
            alert('No se puede hacer cambios. No eres administrador.');
        });
    });
</script>
</body>
</html>
