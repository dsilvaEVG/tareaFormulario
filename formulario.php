<?php
//GIT TareaFormulario
//Guardo todos los $_GET en variables para comodidad
$nombre = $_GET["nombre"];
$apellidos = $_GET["apellidos"];
$nacimiento = $_GET["nacimiento"];
$telefono = $_GET["telefono"];
$email = $_GET["email"];
$perfil = $_GET["perfil"];

//Condición si el nombre falta o está completo
if (empty($nombre)){
    echo "Falta el nombre. <br/> ";
}
else{
    echo "Tu nombre es ".$nombre.".<br/>";
}

//Condición si los apellidos faltan o están completos
if (empty($apellidos)){
    echo "Faltan los apellidos. <br/> ";
}
else{
    echo "Tus apellidos son ".$apellidos.".<br/>";
}

//Condición si la fecha de nacimiento está completa
if (empty($nacimiento)){
    echo "Falta la fecha de nacimiento. <br/> ";
}
else{
    echo "Tu fecha de nacimiento es ".$nacimiento.".<br/>";
}

//Condición si el número de teléfono está escrito
if (empty($telefono)){
    echo "Falta un número de teléfono. <br/> ";
}
else{
    echo "Tu número de teléfono es ".$telefono.".<br/>";
}

//Condición si el e-mail está completo
if (empty($email)){
    echo "Falta un e-mail. <br/> ";
}
else{
    echo "Tu e-mail es ".$email.".<br/>";
}

//Condición si el usuario es alumno o profesor
if (empty($perfil)){
    echo "No has indicado si eres alumno o profesor. <br/> ";
}
else{
    echo "Eres ".$perfil.".<br/>";
}

//Condición para ver si el curso está marcado
if (empty($_GET["curso"])){
    $_GET["curso"] = null; //Si está vacío, pasamos a null para saltar el error
    echo "No hay curso seleccionado. <br/> ";
}
else{
    $curso = $_GET["curso"];
}

//Condición para ver si hay algún checkbox marcado
if (empty($_GET["deportes"])){
    $_GET["deportes"] = null; //Si está vacío, pasamos a null para saltar el error
    echo "No hay deporte seleccionado. <br/> ";
}
else{ //Mostramos la lista de deportes marcados con un foreach
    echo "<br><br>Tus deportes: <br><br>";

foreach ($_GET['deportes'] as $indice => $deporte) {
    echo $deporte. '<br>';
  }
}

echo "<br/><input type='button' value='Volver' onclick='history.back()'>";

?>
