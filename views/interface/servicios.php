<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Basic CRUD Application - jQuery EasyUI CRUD Demo</title>
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.10.19/themes/black/easyui.css">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.10.19/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.10.19/themes/color.css">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.10.19/demo/demo.css">
    <script type="text/javascript" src="jquery-easyui-1.10.19/jquery.min.js"></script>
    <script type="text/javascript" src="jquery-easyui-1.10.19/jquery.easyui.min.js"></script>
</head>
<body>
    <h2>ESTUDIANTES UTA</h2>
    
    <table id="dg" title="Estudiantes" class="easyui-datagrid" style="width:700px;height:250px"
            url="http://localhost/LoginCrudEstudiantes/controllers/APIRest.php?tipo=estudiantes",
            method='GET',
            toolbar="#toolbar" pagination="true"
            rownumbers="true" fitColumns="true" singleSelect="true">
        <thead>
            <tr>
                <th field="estCedula" width="50">Cedula</th>
                <th field="estNombre" width="50">Nombre</th>
                <th field="estApellido" width="50">Apellido</th>
                <th field="estTelefono" width="50">Telefono</th>
                <th field="estDireccion" width="50">Direccion</th>
                <th field="nombre" width="50">Curso</th>
            </tr>
        </thead>
    </table>
    <div id="toolbar">
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">Nuevo Estudiante</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Editar Estudiante</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Borrar Estudiante</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-print" plain="true" onclick="report()">Reporte Estudiante</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-search" plain="true" onclick="ventana()">Reporte Estudiante</a>
    </div>
    <div id='ventana' class="easyui-dialog" style="width:400px" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons'">
        <form id="nuevo" method="post" novalidate style="margin:0;padding:20px 50px">
            <div style="margin-bottom:10px">
                <input id='ced' name="estCedula" class="easyui-textbox" required="true" label="Cedula:" style="width:100%">
                <input type='submit' onclick="report2()">
            </div>
            </form>
    </div>
    <div id="dlg" class="easyui-dialog" style="width:400px" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons'">
        <form id="fm" method="post" novalidate style="margin:0;padding:20px 50px">
            <h3>Ingrese Estudiante</h3>
            <div style="margin-bottom:10px">
                <input name="estCedula" class="easyui-textbox" required="true" label="Cedula:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="estNombre" class="easyui-textbox" required="true" label="Nombre:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="estApellido" class="easyui-textbox" required="true" label="Apellido:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="estTelefono" class="easyui-textbox" required="true"  label="Telefono:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="estDireccion" class="easyui-textbox" required="true" label="Direccion:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <select name="curId" id='curId' class="easyui-combobox" required="true" label="Curso:" style="width:100%"></select>
            </div>
        </form>
    </div>
    <div id="dlg-buttons">
        <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px">Guardar</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancelar</a>
    </div>

    <script type="text/javascript">
        var url;
        function newUser(){
            $('#dlg').dialog('open').dialog('center').dialog('setTitle','Nuevo Estudiante');
            $('#fm').form('clear');
            loadCurID();
            url = 'http://localhost/LoginCrudEstudiantes/controllers/APIRest.php';
        }

        function report(){
            //SE UTILIZA EL REPORT PARA DISTINGUIR EL TIPO DE REPORTE
            url = 'http://localhost/LoginCrudEstudiantes/controllers/APIRest.php?report=1';
            window.open(url, '_blank');
        }


        function ventana(){
            $('#ventana').dialog('open').dialog('center').dialog('setTitle', 'Cedula Estudiante');
            $('#fm').form('clear');
        }

        function report2() {
            var ced = $('#ced').val(); // Asegúrate de que el ID coincide con el del input en el formulario
            if (ced) {
                //SE UTILIZA EL REPORT PARA DISTINGUIR EL TIPO DE REPORTE Y SE MANDA CON LA CÉDULA
                var url = 'http://localhost/LoginCrudEstudiantes/controllers/APIRest.php?report=2&cedula=' + ced;
                window.open(url, '_blank');
            }
        }

        function editUser(){
            var row = $('#dg').datagrid('getSelected');
            console.log(row);
            if (row){
                $('#dlg').dialog('open').dialog('center').dialog('setTitle','Editar Estudiante');
                $('#fm').form('load', row);
                loadCurID(row.curId);
                url = 'http://localhost/LoginCrudEstudiantes/controllers/APIRest.php?cedula='+row.estCedula;
            }
        }


        function loadCurID(selectedCurID = null) {
            $('#curId').combobox({
                url: 'http://localhost/LoginCrudEstudiantes/controllers/APIRest.php?tipo=cursos',
                method:'GET',
                valueField: 'curId',
                textField: 'nombre',
                panelHeight: 'auto',
                onLoadSuccess: function(){
                    if (selectedCurID) {
                        $('#curId').combobox('setValue', selectedCurID);
                    }
                }
            });
        }



        function saveUser(){
            try {
                if (url != 'http://localhost/LoginCrudEstudiantes/controllers/APIRest.php') {
                //Enviar los datos del formulario para editar el estudiante
                $.ajax({
                    url:  'http://localhost/LoginCrudEstudiantes/controllers/APIRest.php?cedula='+$('#fm').find('input[name="estCedula"]').val()  , // URL con la cedula
                    type: 'PUT', 
                    data: {
                        estNombre: $('#fm').find('input[name="estNombre"]').val(),
                        estApellido: $('#fm').find('input[name="estApellido"]').val(),
                        estDireccion: $('#fm').find('input[name="estDireccion"]').val(),
                        estTelefono: $('#fm').find('input[name="estTelefono"]').val(),
                        curId : $('#fm').find('#curId').combobox('getValue')
                    },
                    //evalua si el resultado es correcto

                    success: function(result) {
                        //Si el error es de la API usar el console.log ya que al evaluar da un error "Unexpected token '<'"
                        //console.log(result);
                        var result = eval('(' + result + ')'); // Evaluar el resultado
                        if (result.errorMsg) {
                            $.messager.show({
                                title: 'Error',
                                msg: result.errorMsg
                            });
                        } else {
                            //En caso de ser correcto
                            $('#dlg').dialog('close'); // Cerrar el diálogo
                            $('#dg').datagrid('reload'); // Recargar los datos
                        }
                    },
                    error: function(xhr, status, error) {
                        $.messager.show({
                            title: 'Error',
                            msg: 'Error al actualizar el usuario: ' + error
                        });
                    }
                });
            } else{
                //Enviar los datos del formulario para    
                $('#fm').form('submit', {
                    url: url,
                    onSubmit: function(){
                        return $(this).form('validate');
                    },
                    success: function(result){
                        alert(result);
                        var result = eval('(' + result + ')');
                        if (result.errorMsg){
                            $.messager.show({
                                title: 'Error',
                                msg: result.errorMsg
                            });
                        } else {
                            $('#dlg').dialog('close');
                            $('#dg').datagrid('reload');
                        }
                    }
                });
            }
            } catch (error) {
                console.log(error);
                
              alert("Error al editar el estudiante");  
            }
          
        }

        function destroyUser(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $.messager.confirm('Confirmar','¿Estás seguro de eliminar?', function(r){
                if (r){
                    $.ajax({
                            url: "http://localhost/LoginCrudEstudiantes/controllers/APIRest.php?cedula="+row.estCedula,
                            type: "DELETE",
                            
                            success: (jsonData) => {
                                console.log(jsonData);
                                $('#dg').datagrid('reload');

                            }, error: (error) => {
                                console.log("Error al leer el json", error);
                            }
                        })  
                }
                });
            }
        }
    </script>
</body>
</html>
