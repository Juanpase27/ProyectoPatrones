<?php 
$personalPresentation=$_POST['personalPresentation'];
$previousExperience=$_POST['previousExperience'];
($editar_curriculum = "UPDATE `curriculum` SET `id_userData`=1,`personalPresentation`='$personalPresentation',`id_academicBackground`=6,`previousExperience`='$previousExperience' where id_userData=1");
require("conexion.php");
				$resultado = mysqli_query($conex,$editar_curriculum);
					if(!$resultado){
						echo "Error al realizar registro del curriculum";
                        header("refresh:5.5; url=../index.php");
					}else {
						echo "Registro de curriculum exitoso del usuario";
							header("refresh:2.5; url=../index.php");
					}
?>