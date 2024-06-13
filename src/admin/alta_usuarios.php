<?php 
include '../../assets/navs/links.php';
include '../../assets/navs/administrador.php';
?>

<link rel="stylesheet" href="../../css/usuarios.css">

<body><br>

<div class="container">
    <a href="usuarios.php" class="btn btn-warning"><i class="bi bi-arrow-left-circle-fill"></i>  <strong>Volver</strong></a><br><br>

    <div class="container form">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-header2"><br>
                    <img class="user_pic" src="../../assets/img/usuarios.png"><h1 class="animated lightSpeedIn title-users">Nuevo Usuario</h1>
                </div><br>
                
            <div class="card">
            <div class="card bg-danger text-white"><center><h6><strong>Para crear un nuevo usuario es necesario que llenes el siguiente formulario</strong></h6></center></div>
            </div>

            <form class="border border-danger form-control" method="POST" action="#">
                <label for="nombre"><i class="bi bi-person-fill"></i> <strong>Nombre Completo:</strong></label>
                <input type="text" maxlength="50" class="form-control" placeholder="Ejemplo: Ruben Arturo Ramírez Ocampo" required name="nombre_comp"><br>
                <label for="correo"><i class="bi bi-envelope-at-fill"></i> <strong>Correo electrónico:</strong></label>
                <input type="email" maxlength="255" class="form-control" placeholder="Ejemplo: email@email.com" required name="correo"><br>
                <label for="usuario"><i class="bi bi-person-circle"></i> <strong>Nombre de Usuario:</strong></label>
                <input type="text" maxlength="10" class="form-control" placeholder="Ejemplo: RUBENMARTI, máximo 10 caracteres" required name="usuario"><br>
                <label for="contrasena"><i class="bi bi-key-fill"></i> <strong>Contraseña:</strong></label>
                <input type="text" title="Mínimo 8 caracteres" maxlength="50" min="8" class="form-control" placeholder="Mínimo 8 caracteres" required name="pwd"><br>
                <label for="area"><i class="bi bi-buildings-fill"></i> <strong>Área:</strong></label>
                <select name="area" class="form-control" required>
                    <option value=""> - Selecciona el área correspondiente - </option>
                    <option value=""></option>
                </select><br>
                <label for="puesto"><i class="bi bi-diagram-3-fill"></i> <strong>Puesto:</strong></label>
                <select name="puesto" class="form-control" required>
                    <option value=""> - Selecciona el puesto correspondiente - </option>
                    <option value=""></option>
                </select><br>
                <label for="tipo"><i class="bi bi-person-bounding-box"></i> <strong>Tipo de Usuario:</strong></label>
                <select name="tipo_usuario" class="form-control" required>
                    <option value=""> - Selecciona el tipo de usuario correspondiente - </option>
                    <option value="A">Administrador</option>
                    <option value="D">Usuario de Desarrollo Organizacional / Capital Humano</option>
                    <option value="J">Jefe Inmediato</option>
                    <option value="C">Colaborador</option>
                </select><br>

                <center>
                <input name="save_user" class="btn btn-success" type="submit" value="Guardar"><br><br>
                </center>
            </form>

            </div>
        </div><br>
    </div><br>
</div>

</body>