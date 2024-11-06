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
            url="http://crudestudiantes-hmf5d8dxcph7eacy.westus-01.azurewebsites.net/controllers/APIRest.php?tipo=estudiantes",
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
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="noPermission()">Nuevo Estudiante</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="noPermission()">Editar Estudiante</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="noPermission()">Borrar Estudiante</a>
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
        function noPermission() {
            $.messager.alert('Permiso Denegado', 'No tiene permisos de administrador para realizar esta acción.', 'error');
        }

        function report(){
            //SE UTILIZA EL REPORT PARA DISTINGUIR EL TIPO DE REPORTE
            url = 'http://crudestudiantes-hmf5d8dxcph7eacy.westus-01.azurewebsites.net/controllers/APIRest.php?report=1';
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
                var url = 'http://crudestudiantes-hmf5d8dxcph7eacy.westus-01.azurewebsites.net/controllers/APIRest.php?report=2&cedula=' + ced;
                window.open(url, '_blank');
            }
        }
    </script>
</body>
</html>
