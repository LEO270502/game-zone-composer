<?php
//Requerir el archivo autoload para mapear.
require '../vendor/autoload.php';

use User\GameZone\Juego;
//Arreglo.
$palabrasList = ['porsche', 'panamera', 'cayman', 'carrera', 'cayenne'];
$juego = new Juego($palabrasList); //Se crea una instancia en la clase Juego

if($_SERVER ['REQUEST_METHOD']== 'POST'){
    //La palabra que el usuario escribio en el campo
    $palabraEscrita = $_POST ['word'];
    //Se verifica que la palabra que ingreso el usuario es correcta
    $isCorrect = $juego->checarPalabra($palabraEscrita);
    //Estructura de control if que dependiendo de la validacion anterior asigna un mensaje.
    if($isCorrect){
        $message = 'La palabra que escribiste es correcta';
    }else{
        $message = '¡Error! la palabra es incorrecta, intentalo de nuevo';
    }
}else {
    
        //El mensaje se muestra vacío inicialmente
        $message = ''; 
    
    }
  

//Obtiene una nueva palabra desordenada
$palabraDesordenada = $juego->getPalabraDesordenada();
?>


<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameZone</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="icon" type="image/jpg" href="img/Game Zone.jpg">
</head>
<body>
    <div class="form-container">
    <h1>Juego de palabras</h1>
    <p>Adivina la palabra: <?= htmlspecialchars($palabraDesordenada) ?></p>
    <form method="POST">
        <input type="text" name="word" required>
        <button type="submit">Enviar</button>
    </form>
    <p><?= htmlspecialchars($message) ?></p>
</div>
</body>
</html>

