<?php 
include '../../../assets/navs/links2.php';
include '../../../assets/navs/settings.php';
?>

<link rel="stylesheet" href="../../../css/usuarios.css">

<body><br><br><br>

<div class="container">
    <a href="#" class="btn btn-warning"><i class="bi bi-arrow-left-circle-fill"></i>  <strong>Volver</strong></a><br><br>

    <div class="container form">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-header2"><br>
                    <img class="user_pic" src="../../../assets/img/objetivos.png"><h1 class="animated lightSpeedIn title-users">Objetivos SMART Colaboradores</h1>
                </div><br>
                
            <div class="card">
            <div class="card bg-primary text-white"><center><h6><strong>Puedes realizar cualquier acción permitida con los objetivos enlistados</strong></h6></center></div>
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
                    <th>Colaborador</th>
                    <th>Área</th>
                    <th>Puesto</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                    <td>
                        <div class="btn-group">
                        <a href="metas_user.php" class="btn btn-sm btn-success"><i class="bi bi-eye-fill"></i> Ver</a>
                        </div>
                    </td>
                    <td>Ruben Ramírez</td>
                    <td>Desarrollo Organizacional</td>
                    <td>Cultura Laboral</td>
                    </tr>

                    <tr>
                    <td>
                        <div class="btn-group">
                        <a href="metas_user.php" class="btn btn-sm btn-success"><i class="bi bi-eye-fill"></i> Ver</a>
                        </div>
                    </td>
                    <td>Ruben Ramírez</td>
                    <td>Desarrollo Organizacional</td>
                    <td>Cultura Laboral</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            </div>
        </div><br><br>
    </div><br>
</div>

</body>