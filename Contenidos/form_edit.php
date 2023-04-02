<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="../css/style_p.css" />
</head>

<body>
    <section class="container">
        <header>Editar hoja de vida</header>
        <form action="#" class="form">
            <label>Seleccione el usuario por su ID</label>
            <select>
                <?php
        //la idea aquí es que haga una consulta por ID o userid
        $total=4;
        for ($i = 1; $i <= $total; $i++) {
            echo '<option value="' . $i . '">usuario ' . $i . '</option>';
        }
        ?>

<?php
require("../../Controller/conexion.php");

$vista_user ="SELECT * FROM userData where id_userData = 1";//Modificar esto para escoger al usuario correctamente 

$result_user =mysqli_query($conex, $vista_user);

while($consulta_user = mysqli_fetch_assoc($result_user)){
    ?>



                <!--<option>Colombia</option>-->
            </select>
            <button type="submit" class="env_cons">Consultar</button>
            
        </form>
        <form action="../../Controller/editar.php" class="form" method="post">
            <!--En este apartado debe de tomar el id anterior y sobre el realizar la consulta $consulta_user ="SELECT * FROM curriculum where id ="opción tomada arriba"; Y $consulta_curriculum ="SELECT * FROM userData where id ="opción tomada arriba";-->
            <div class="input-box">
                <label>Nombre(s)</label>
                <input type="text" value="<?php echo $consulta_user["userName"];//$consulta_user['userName'] ?>"
                pattern="[a-zA-Z-áéíóúÁÉÍÓÚñÑ]{1,30}" required disabled />
            </div>
            <div class="input-box">
                <label>Apellido(s)</label>
                <input type="text" value="<?php echo $consulta_user['userLast']; ?>" placeholder="Ingresa
                tu(s) apellido(s) completo(s)" required disabled />
            </div>
            <div class="input-box address">
                <label>Lugar de nacimiento:</label>
                <div class="column">
                    <div class="select-box">
                        <select disabled>
                            <option>
                                <?php echo $consulta_user['country']; ?>
                            </option>
                        </select>
                    </div>
                    <div class="select-box">
                        <select disabled>
                            <option>
                                <?php echo $consulta_user['city']; ?>
                            </option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="input-box">
                    <label>Número de telefono:</label>
                    <input type="number" value="<?php echo $consulta_user['contact']; ?>" pattern="[0-9]{1,20}" required
                        disabled />
                </div>
                <div class="input-box">
                    <label>Fecha de nacimiento:</label>
                    <input type="date" value="<?php echo $consulta_user['birthDate']; ?>" placeholder="Enter birth date"
                        required disabled />
                </div>
            </div>
            <div class="input-box">
                <label>Correo:</label>
                <input type="email" value="<?php echo $consulta_user['email']; ?>" placeholder="Ingresa tu
                correo" pattern="" required disabled />
            </div>
            <div class="input-box">
                <label>Nivel de escolaridad:</label>
            </div>
            <div class="select-box">
                <select>
                    <?php
                }
            $vista_academicBackground ="SELECT * FROM academicbackground ";//where id_userData=1
            $result_academicBackground = mysqli_query($conex, $vista_academicBackground);
            while($consulta_academicBackground = mysqli_fetch_assoc($result_academicBackground)){
                echo '<option>'.$consulta_academicBackground["educationLevel"].'</option>';
            }
            ?>
                </select>
            </div>
            <?php
                
            $vista_curriculum ="SELECT * FROM curriculum where id_userData=1";
            $result_curriculum = mysqli_query($conex, $vista_curriculum);
            
            while($consulta_curriculum = mysqli_fetch_assoc($result_curriculum)){
                if ($consulta_curriculum["id_userData"]==1) {
                    
                
            ?>
            <div class="input-box">
                <label>Descripción personal:</label><br>
                <textarea pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\- ]{1,1023}" name="personalPresentation"
                    spellcheck="true" value=""><?php echo $consulta_curriculum["personalPresentation"]; ?></textarea>
            </div>
            <div class="input-box">
                <label>Experiencia anterior (mejorar?):</label><br>
                <textarea pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\- ]{1,1023}" name="previousExperience"
                    spellcheck="true" value=""><?php echo $consulta_curriculum['previousExperience']; ?></textarea>
            </div>
            <?php
                }
        }
        ?>
            <div class="input-box">
                <label>Discapacidad:</label>
            </div>
            <div class="select-box">
                <select disabled>
                    <?php
                
            $vista_disability ="SELECT * FROM disability";
            $result_disability = mysqli_query($conex, $vista_disability);
            while($consulta_disability = mysqli_fetch_assoc($result_disability)){
                echo '<option>'.$consulta_disability["disabilityName"].'</option>';
            }
            ?>
                </select>
            </div>
            <?php

?>
            
                
                <button type="submit">Editar</button>
            
        </form>
        <button name="Volver"><a href="../../index.php">Volver</a></button>
    </section>
</body>

</html>