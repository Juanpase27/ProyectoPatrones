<?php?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--<link rel="stylesheet" href="../css/style_p.css" />-->
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body class="dashboard dashboard_1">
    <div class="full_container">
        <div class="inner_container">
            <?php 
                require_once "sidebar.php";?>
                ?>
            <div id="content">
                <?php
                require_once "topbar.php";
                ?>
                <section class="container"><!--readonly="readonly"-->
                    <header>Registro hoja de vida</header>
                    <form action="#" class="form">
                        <div class="input-box">
                            <label>Nombre(s)</label>
                            <input type="text" placeholder="Ingresa tu(s) nombre(s) completo(s)"
                                pattern="[a-zA-Z-áéíóúÁÉÍÓÚñÑ]{1,30}" required />
                        </div>
                        <div class="input-box">
                            <label>Apellido(s)</label>
                            <input type="text" placeholder="Ingresa tu(s) apellido(s) completo(s)" required />
                        </div>
                        <div class="input-box address">
                            <label>Lugar de nacimiento:</label>
                            <div class="column">
                                <div class="select-box">
                                    <select>
                                        <option hidden>País</option>
                                        <option>Colombia</option>
                                        <option>Ecuador</option>
                                        <option>Perú</option>
                                        <option>Venezuela</option>
                                    </select>
                                </div>
                                <div class="select-box">
                                    <select>
                                        <option hidden>Ciudad</option>
                                        <option>Armenia</option>
                                        <option>Bogotá</option>
                                        <option>Ibagué</option>
                                        <option>Monteria</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="input-box">
                                <label>Número de telefono:</label>
                                <input type="number" placeholder="Ingresa tu número de telefono" pattern="[0-9]{1,20}"
                                    required />
                            </div>
                            <div class="input-box">
                                <label>Birth Date</label>
                                <input type="date" placeholder="Enter birth date" required />
                            </div>
                        </div>
                        <div class="input-box">
                            <label>Correo:</label>
                            <input type="email" placeholder="Ingresa tu correo" pattern="[0-9]{1,20}" required />
                        </div>
                        <div class="input-box">
                            <label>Nivel de escolaridad:</label>
                        </div>
                        <div class="select-box">
                            <select>
                                <option hidden>Escolaridad</option>
                                <option>Bachillerato</option>
                                <option>Tecnico</option>
                                <option>Tecnologo</option>
                                <option>Universidad</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <label>Descripción personal:</label><br>
                            <textarea name="Descripcion" spellcheck="true"></textarea>
                        </div>
                        <div class="input-box">
                            <label>Experiencia anterior (mejorar?):</label><br>
                            <textarea name="experiencia" spellcheck="true"></textarea>
                        </div>
                        <div class="input-box">
                            <label>Descripción discapacidad(es):</label><br>
                            <textarea name="discapacidad" spellcheck="true"></textarea>
                        </div>
                        <div class="column">
                            <button type="submit">Volver</button>
                            <button>Registrar</button>
                        </div>
                    </form>
                </section>
            </div>
            <?php
    require_once "js.php";
    ?>
        </div>
    </div>


</body>

</html>