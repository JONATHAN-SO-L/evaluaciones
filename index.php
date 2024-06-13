<?php include './assets/navs/links.php'; ?>

<link rel="stylesheet" href="./css/login.css">
<body>
    <div class="container col-sm-3 login">
        <form method="POST" action="#">
            <center><img class="logo" src="./assets/img/veco_logo.png"></center>
            <h3 class="modal-title"><strong><center>Iniciar Sesión | Evaluaciones</center></strong></h3><br>
            <center>
            <label><strong><h5>Usuario:</h5></strong></label>
            <input type="text" name="user" class="form-control input_login" placeholder="Por ejemplo: VECO" required><br>
            <label><strong><h5>Contraseña:</h5></strong></label>
            <input type="password" name="pwd" class="form-control input_login" placeholder="Ingresa la contraseña asignada"><br>
            </center><br>
            <center><input type="submit" name="acceder" class="btn btn-success" value="Acceder" required>
            </center>
        </form><br>
    </div>
</body>
</html>