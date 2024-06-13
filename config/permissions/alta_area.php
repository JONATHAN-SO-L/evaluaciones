<?php 
include '../../assets/navs/links.php';
//include '../../assets/navs/administrador.php';
?>

<link rel="stylesheet" href="../../css/usuarios.css">

<body><br>

<div class="container">
    <a href="#" class="btn btn-warning"><i class="bi bi-arrow-left-circle-fill"></i>  <strong>Volver</strong></a><br><br>

    <div class="container form">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-header2"><br>
                    <img class="user_pic" src="../../assets/img/area.png"><h1 class="animated lightSpeedIn title-users">Nueva Área</h1>
                </div><br>
                
            <div class="card">
            <div class="card bg-danger text-white"><center><h6><strong>Para crear una nueva área es necesario que llenes el siguiente formulario</strong></h6></center></div>
            </div>

            <form class="border border-danger form-control" method="POST" action="#">
                <label for="nombre"><i class="bi bi-building-fill-add"></i> <strong>Nombre del Área:</strong></label>
                <input type="text" maxlength="50" class="form-control" placeholder="Ejemplo: Dirección General, Gerencia General, Capital Humano, etc." required name="nombre_comp"><br>

                <center>
                <input name="save_area" class="btn btn-success" type="submit" value="Guardar"><br><br>
                </center>
            </form>

            </div>
        </div><br>
    </div><br>
</div>

</body>