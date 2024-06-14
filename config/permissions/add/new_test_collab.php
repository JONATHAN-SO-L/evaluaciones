<?php 
include '../../../assets/navs/links2.php';
include '../../../assets/navs/settings.php';
?>

<link rel="stylesheet" href="../../../css/usuarios.css">
<link rel="stylesheet" href="../../../css/new_test_collab.css">

<body><br><br><br>

<div class="container">
    <a href="../view/eval_colab.php" class="btn btn-warning"><i class="bi bi-arrow-left-circle-fill"></i>  <strong>Volver</strong></a><br><br>

    <div class="container form">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-header2"><br>
                    <img class="user_pic" src="../../../assets/img/evaluacion.png"><h1 class="animated lightSpeedIn title-users">Nueva Evaluación</h1>
                </div><br>
                
            <div class="card">
            <div class="card bg-danger text-white"><center><h6><strong>Para crear una nueva evaluación es necesario que llenes el siguiente formulario</strong></h6></center></div>
            </div>

            <form class="border border-danger form-control" method="POST" action="#">
                <div class="card">
                <div class="card bg-primary text-white"><center><i class="bi bi-person-check"></i> <strong>Datos del evaluado</strong></center></div>
                </div>
                <label for="nombre_comp"><i class="bi bi-person-fill-lock"></i> <strong>Nombre del Empleado:</strong></label>
                <select name="nombre_comp" class="form-control" required>
                    <option value=""> - Selecciona el nombre del empleado - </option>
                    <option value=""></option>
                </select><br>
                <label for="no_empleado"><i class="bi bi-person-vcard-fill"></i> <strong>No. de Empleado:</strong></label>
                <input name="no_empleado" class="form-control readonly" readonly><br>
                <label for="area"><i class="bi bi-building-fill-lock"></i> <strong>Área:</strong></label>
                <input name="area" class="form-control readonly" readonly><br>
                <label for="puesto"><i class="bi bi-diagram-2-fill"></i> <strong>Puesto:</strong></label>
                <input name="puesto" class="form-control readonly" readonly><br><br>

                <div class="card">
                <div class="card bg-primary text-white"><center><strong>Datos del evaluador</strong></center></div>
                </div>
                <label for="evaluador"><i class="bi bi-person-fill-gear"></i> <strong>Nombre del evaluador:</strong></label>
                <input name="evaluador" class="form-control readonly" readonly><br>
                <label for="jefe_inmediaro"><i class="bi bi-diagram-3-fill"></i> <strong>Relación con el evaluado:</strong></label>
                <input name="jefe_inmediaro" class="form-control readonly" readonly><br>

                <div class="card">
                <div class="card bg-primary text-white"><center><strong>Indicadores / Objetivos a Evaluar</strong></center></div>
                </div>
                
                <!-- EVALUACIÓN -->
                <div class="table-responsive mt-3">
                <table class="table table-hover table-bordered table-striped">
                    <thead class="table-dark">
                    <tr>
                    <th>No.</th>
                    <th>Indicadores / Objetivos (SMART)</th>
                    <th>Meta o 
                    Resultado clave</th>
                    <th>Selector de forma</th>
                    <th>Tipo de escala</th>
                    <th>Meta en porcentaje</th>
                    <th>Autoevaluación</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                    <td>1</td>
                    <td>
                        <textarea name="objetivo1" class="form-control" placeholder="Anota el objetivo" required></textarea>
                    </td>
                    <td>
                        <input type="number" min="1" name="rel_key1" class="form-control" placeholder="Anota el resultado" required>
                    </td>
                    <td>
                        <select name="selector_key1" class="form-control" required>
                            <option value="%">%</option>
                            <option value="No aplica">No aplica</option>
                        </select>
                    </td>
                    <td>
                        <select name="scale_obj1" class="form-control" required>
                            <option value="Ascendente">Ascendente</option>
                            <option value="Descendente">Descendente</option>
                        </select>
                    </td>
                    <td>
                        <input type="number" min="1" name="percent_obj1" class="form-control" placeholder="Agrega el valor"   required>
                    </td>
                    <td>
                        <input type="number" min="1" name="autoev1" class="form-control" placeholder="Pondérate" required>
                    </td>
                    </tr>


                    <tr>
                    <td>2</td>
                    <td>
                        <textarea name="objetivo2" class="form-control" placeholder="Anota el objetivo" required></textarea>
                    </td>
                    <td>
                        <input type="number" min="1" name="rel_key2" class="form-control" placeholder="Anota el resultado" required>
                    </td>
                    <td>
                        <select name="selector_key2" class="form-control" required>
                            <option value="%">%</option>
                            <option value="No aplica">No aplica</option>
                        </select>
                    </td>
                    <td>
                        <select name="scale_obj2" class="form-control" required>
                            <option value="Ascendente">Ascendente</option>
                            <option value="Descendente">Descendente</option>
                        </select>
                    </td>
                    <td>
                        <input type="number" min="1" name="percent_obj2" class="form-control" placeholder="Agrega el valor"   required>
                    </td>
                    <td>
                        <input type="number" min="1" name="autoev2" class="form-control" placeholder="Pondérate" required>
                    </td>
                    </tr>


                    <tr>
                    <td>3</td>
                    <td>
                        <textarea name="objetivo3" class="form-control" placeholder="Anota el objetivo" required></textarea>
                    </td>
                    <td>
                        <input type="number" min="1" name="rel_key3" class="form-control" placeholder="Anota el resultado" required>
                    </td>
                    <td>
                        <select name="selector_key3" class="form-control" required>
                            <option value="%">%</option>
                            <option value="No aplica">No aplica</option>
                        </select>
                    </td>
                    <td>
                        <select name="scale_obj3" class="form-control" required>
                            <option value="Ascendente">Ascendente</option>
                            <option value="Descendente">Descendente</option>
                        </select>
                    </td>
                    <td>
                        <input type="number" min="1" name="percent_obj3" class="form-control" placeholder="Agrega el valor"   required>
                    </td>
                    <td>
                        <input type="number" min="1" name="autoev3" class="form-control" placeholder="Pondérate" required>
                    </td>
                    </tr>
                    </tbody>
                </table>

                <div class="card">
                <div class="card bg-primary text-white"><center><strong>Evaluación de Competencias 
                (¿Cómo?)</strong></center></div>
                </div>

<!------------------------------------------------------
EXCELENCIA
------------------------------------------------------->

                <div class="table-responsive mt-3">
                <table class="table table-hover table-bordered table-striped">
                    <div class="card">
                    <div class="card bg-primary text-white"><center><i class="bi bi-patch-check-fill"></i> <strong>Excelencia</strong></center></div>
                    </div>

                    <thead class="table-primary">
                    <tr>
                    <th>No.</th>
                    <th>Aspiramos y trabajamos todos los días para alcanzar la excelencia en todas nuestras actividades personales y profesionales</th>
                    <th>Autoevaluación</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                    <td>1</td>
                    <td>¿Hago el máximo esfuerzo en todo los que hago para alcanar la excelencia?</td>
                    <td>
                        <input type="number" min="1" name="autoev1" class="form-control" placeholder="Anota el resultado" required>
                    </td>
                    </tr>

                    <tr>
                    <td>2</td>
                    <td>¿Te mantienes actualizado/a con las últimas tendencias y mejores prácticas en tu campo?</td>
                    <td>
                        <input type="number" min="1" name="autoev2" class="form-control" placeholder="Anota el resultado" required>
                    </td>
                    </tr>

                    <tr>
                    <td>3</td>
                    <td>¿Evalúas tus propios resultados y buscas áreas de mejora?</td>
                    <td>
                        <input type="number" min="1" name="autoev3" class="form-control" placeholder="Anota el resultado" required>
                    </td>
                    </tr>

                    <tr>
                    <td>4</td>
                    <td>¿Gestionas el tiempo y los recursos para maximizar tu eficiencia y calidad en el trabajo?</td>
                    <td>
                        <input type="number" min="1" name="autoev4" class="form-control" placeholder="Anota el resultado" required>
                    </td>
                    </tr>

                    <tr>
                    <td>5</td>
                    <td>¿Redacto mis reportes, correos, mensajes sin errores de ortografía, con la puntuación adecuada y que comunique sin ambigüedades lo que quiero transmitir?</td>
                    <td>
                        <input type="number" min="1" name="autoev5" class="form-control" placeholder="Anota el resultado" required>
                    </td>
                    </tr>

                    <thead class="table-primary">
                    <tr>
                    <th></th>
                    <th>Resultado</th>
                    <th>0</th>
                    </tr>
                    </thead>
                    
                    </tbody>
                </table>

<!------------------------------------------------------
COMPROMISO
------------------------------------------------------->

<div class="table-responsive mt-3">
                <table class="table table-hover table-bordered table-striped">
                    <div class="card">
                    <div class="card bg-success text-white"><center><strong>Compromiso</strong></center></div>
                    </div>

                    <thead class="table-success">
                    <tr>
                    <th>No.</th>
                    <th>Somos conscientes de cumplir en tiempo y forma, convirtiendo nuestras promesas en realidad.</th>
                    <th>Autoevaluación</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                    <td>1</td>
                    <td> ¿Cumples con los plazos establecidos para tus tareas y proyectos?</td>
                    <td>
                        <input type="number" min="1" name="autoev6" class="form-control" placeholder="Anota el resultado" required>
                    </td>
                    </tr>

                    <tr>
                    <td>2</td>
                    <td>¿Asumes la responsabilidad de tus acciones?</td>
                    <td>
                        <input type="number" min="1" name="autoev7" class="form-control" placeholder="Anota el resultado" required>
                    </td>
                    </tr>

                    <tr>
                    <td>3</td>
                    <td>¿Te aseguras de entender completamente lo que se espera de ti en términos de plazos y entregables?</td>
                    <td>
                        <input type="number" min="1" name="autoev8" class="form-control" placeholder="Anota el resultado" required>
                    </td>
                    </tr>

                    <tr>
                    <td>4</td>
                    <td>¿Cuándo es necesario ajustar los plazos o reevaluar compromisos debido a cambios en el entorno o circunstancias imprevistas lo manejas adecuadamente para evitar perdidas o quejas?</td>
                    <td>
                        <input type="number" min="1" name="autoev9" class="form-control" placeholder="Anota el resultado" required>
                    </td>
                    </tr>

                    <tr>
                    <td>5</td>
                    <td>¿Cómo evalúas tu propio desempeño en términos de cumplimiento de compromisos y plazos?</td>
                    <td>
                        <input type="number" min="1" name="autoev10" class="form-control" placeholder="Anota el resultado" required>
                    </td>
                    </tr>

                    <thead class="table-success">
                    <tr>
                    <th></th>
                    <th>Resultado</th>
                    <th>0</th>
                    </tr>
                    </thead>
                    
                    </tbody>
                </table>

<!------------------------------------------------------
INTEGRIDAD
------------------------------------------------------->

            </div><br><br>

                <center>
                <input name="save_area" class="btn btn-success" type="submit" value="Guardar"><br><br>
                </center>
            </form>

            </div>
        </div><br>
    </div><br>
</div>

</body>