<?php 
include '../../../assets/navs/links2.php';
include '../../../assets/navs/settings.php';
?>

<link rel="stylesheet" href="../../../css/usuarios.css">

<body><br><br><br>

<div class="container">
    <a href="../view/puestos.php" class="btn btn-warning"><i class="bi bi-arrow-left-circle-fill"></i>  <strong>Volver</strong></a><br><br>

    <div class="container form">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-header2"><br>
                    <img class="user_pic" src="../../../assets/img/puesto.png"><h1 class="animated lightSpeedIn title-users">Nuevo Puesto</h1>
                </div><br>
                
            <div class="card">
            <div class="card bg-danger text-white"><center><h6><strong>Para crear un nuevo puesto es necesario que llenes el siguiente formulario</strong></h6></center></div>
            </div>

            <form class="border border-danger form-control" method="POST" action="#">
                <label for="area"><i class="bi bi-building-fill-check"></i> <strong>Área:</strong></label>
                <select name="area" class="form-control" required>
                    <option value=""> - Selecciona el área - </option>
                    <option value=""></option>
                </select><br>
                <label for="nombre"><i class="bi bi-diagram-2-fill"></i> <strong>Nombre del Puesto:</strong></label>
                <input type="text" maxlength="50" class="form-control" placeholder="Ejemplo: Cultura Laboral, Jefatura de Control de Calidad, Asesor Técnico Comercial, etc." required name="nombre_comp"><br>

                <center>
                <input name="save_area" class="btn btn-success" type="submit" value="Guardar"><br><br>
                </center>
            </form>

            </div>
        </div><br>
    </div><br>
</div>

</body>