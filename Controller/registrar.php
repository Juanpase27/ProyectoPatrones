<?php 
$personalPresentation=$_POST['personalPresentation'];
$previousExperience=$_POST['previousExperience'];
($registrar_curriculum = "INSERT INTO curriculum (id_userData, personalPresentation, id_academicBackground, previousExperience) VALUES (1,'$personalPresentation',5,'$previousExperience') ");
require("conexion.php");
				$resultado = mysqli_query($conex,$registrar_curriculum);
					if(!$resultado){
						echo "Error al realizar registro del curriculum";
                        header("refresh:5.5; url=../index.php");
					}else {
						echo "Registro de curriculum exitoso del usuario";
							header("refresh:2.5; url=../index.php");
					}
?>