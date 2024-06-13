<?php 
include '../../../assets/navs/links2.php';
include '../../../assets/navs/settings.php';
?>

<link rel="stylesheet" href="../../../css/usuarios.css">

<body><br><br><br>

<div class="container">
    <a href="../add/alta_area.php" class="btn btn-success"><i class="bi bi-plus-circle-fill"></i>  <strong>Nueva Área</strong></a><br><br>

    <div class="container form">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-header2"><br>
                    <img class="user_pic" src="../../../assets/img/usuarios.png"><h1 class="animated lightSpeedIn title-users">Áreas</h1>
                </div><br>
                
            <div class="card">
            <div class="card bg-primary text-white"><center><h6><strong>Puedes realizar cualquier acción permitida con las áreas enlistadas</strong></h6></center></div>
            </div>

            <div class="container mt-3">
                <form action="#" method="GET">
                        <div class="row">
                        <div class="col-sm-4">
                        <input type="search" class="form-control buscador" placeholder="Buscar" name="buscador">
                        <button class="btn btn-primary boton_buscar" name="buscar"><i class="bi bi-search"></i></button>
                        </div>
                        </div>
                </form>
            </div>

            <div class="table-responsive mt-3">
                <table class="table table-hover table-bordered table-striped">
                    <thead class="table-dark">
                    <tr>
                    <th>Acción</th>
                    <th>Nombre Completo</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                    <td>
                        <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-primary"><i class="bi bi-eye-fill"></i> Ver</button>
                        <button type="button" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i> Editar</button>
                        <button type="button" class="btn btn-sm btn-danger"><i class="bi bi-trash-fill"></i> Borrar</button>
                        </div>
                    </td>
                    <td>Desarrollo Organizacional</td>
                    </tr>

                    <tr>
                    <td>
                        <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-primary"><i class="bi bi-eye-fill"></i> Ver</button>
                        <button type="button" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i> Editar</button>
                        <button type="button" class="btn btn-sm btn-danger"><i class="bi bi-trash-fill"></i> Borrar</button>
                        </div>
                    </td>
                    <td>Capital Humano</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            </div>
        </div><br><br>
    </div><br>
</div>

</body>