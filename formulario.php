<?php

$nombre = $_GET["nombre"];
$apellidos = $_GET["apellidos"];
$nacimiento = $_GET["nacimiento"];
$telefono = $_GET["telefono"];
$email = $_GET["email"];
$perfil = $_GET["perfil"];
$curso = $_GET["curso"];

if (empty($nombre) || empty($apellidos) || empty($nacimiento)|| empty($telefono) || empty($email) || empty($curso)){
    echo "Falta algún dato. <a href='formulario.html'>Volver</a>";
}

else{
    echo 'Hola, eres ' .$nombre.' '.$apellidos. 
    '. <br> Naciste el ' .$nacimiento. 
    '. <br> Tu número de teléfono es ' .$telefono.
    '. <br> Tu e-mail es ' .$email. 
    '. <br> Eres ' .$perfil. 
    ' y participas en ' .$curso.' de DAW.';
}

echo "<br><br>Deportes: <br><br>";

foreach ($_GET['deportes'] as $indice => $deporte) {
    echo $deporte. '<br>';
  }


//var_dump($_GET["desastres"]); // Sin los corchetes en el "name" del checkbox, muestra solo el último dato
?>