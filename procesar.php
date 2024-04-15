<?php
    //->>>>>Obtenemos los datos del formulario 
    $nombre_apellidos = $_POST['nombre_apellidos'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $ocupacion = $_POST['ocupacion'];
    $teléfono = $_POST['teléfono'];
    $email = $_POST['email'];
    $nacionalidad = $_POST['nacionalidad'];
    $nivel_ingles = $_POST['nivel_ingles'];
    $lenguajes = isset($_POST['lenguajes']) ? $_POST['lenguajes'] : [];
    $aptitudes = $_POST['aptitudes'];
    $habilidades = isset($_POST['habilidades']) ? $_POST['habilidades'] : [];
    $perfil = $_POST['perfil'];
    $lenguajes_texto = implode(", ", $lenguajes);

    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CV1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="main">
        <div class="top-section">
            <img src="foto.png" class="perfil">
            <p class="i1">' . $nombre_apellidos . '</p>
            <p class="i2">' . $ocupacion  . '</p>

        </div>

        <div class="clearfix"></div>

        <div class="block1">
            <div class="content-box" style="padding-left: 40px;">
                <p class="head">Datos</p>
                <p class="i3" > <i class="fas fa-birthday-cake"></i>&nbsp;&nbsp;' .$fecha_nacimiento .'</p>
                <p class="i3" > <i class="fa fa-phone"></i>&nbsp;&nbsp;' . $teléfono . ' </p>
                <p class="i3" > <i class="fa fa-envelope"></i>&nbsp;&nbsp;' . $email . ' </p>
                <p class="i3" > <i class="fa fa-map-marker"></i>&nbsp;&nbsp;' . $nacionalidad . ' </p>
                <br/>
                <p class="head">Nivel de Ingles</p> 
                <p class="i3" >'. $nivel_ingles  . '</p>
                <br/>
                <p class="head">Lenguajes de programación</p>
                <p class="i3" >'. $lenguajes_texto  . '</p>       
                <br/> 
                <p class="head">APTITUDES</p> 
                <ul class="tex">
                    <li>' . $aptitudes . '</li>
                </ul> 
                <br/>
                <p class="head">HABILIDADES</p> 
                <ul class="tex">
                    <li>' . implode(", ", $habilidades) . '</li>
                </ul>
                <br/>
                <p class="head">Otros intereses</p>
                <ul class="tex">
                    <li>Lectura de libros</li>
                    <li>Videojuegos</li>
                </ul>
            </div>
        </div>
        <div class="linea"></div>
        <div class="block2">
            <div class="content-box">
                <p class="head">PERFIL</p>
                <p class="i3" style="font-size: 14px;">' . $perfil . '</p>
                <br/>
                <p class="head">EXPERIENCIA LABORAL</p>
                <p class="i-4">Lorem ipsum dolor sit amet consectetur 
                adipisicing elit. Officia quibusdam voluptates iure sunt aliquid, dicta.
                Lorem ipsum dolor sit amet consectetur </p>
                <p class="i-4">Lorem ipsum dolor sit amet consectetur 
                adipisicing elit. Officia quibusdam voluptates iure sunt aliquid, dicta.
                Lorem ipsum dolor sit amet consectetur</p>
                <p class="i-4">adipisicing elit. Officia quibusdam voluptates iure sunt aliquid, dicta.</p>
                <br/>
                <p class="head">FORMACIÓN</p> 
                <p class="i-4">Lorem ipsum dolor sit amet consectetur 
                adipisicing elit. Officia quibusdam voluptates iure sunt aliquid, dicta.
                Lorem ipsum dolor sit amet consectetur </p>
                <p class="i-4">Lorem ipsum dolor sit amet consectetur 
                adipisicing elit. Officia quibusdam voluptates iure sunt aliquid, dicta.
                Lorem ipsum dolor sit amet consectetur</p>
                <p class="i-4">adipisicing elit. Officia quibusdam voluptates iure sunt aliquid, dicta.</p>
                <p class="i-4">Otra Empresa - Puesto: Analista de Datos (Julio 2022 - Diciembre 2022)</p>
                <br/>                    
            </div>
        </div>
    </div>
</body>
</html>';

$contenido = "Nombre y Apellidos: " . $nombre_apellidos . "\n";
$contenido .= "Fecha de Nacimiento: " . $fecha_nacimiento . "\n";
$contenido .= "Ocupación: " . $ocupacion . "\n";
$contenido .= "teléfono: " . $teléfono . "\n";
$contenido .= "email: " . $email . "\n";
$contenido .= "Nacionalidad: " . $nacionalidad . "\n";
$contenido .= "Nivel de inglés: " . $nivel_ingles . "\n";
$contenido .= "Lenguajes de programación: " . implode(", ", $lenguajes) . "\n";
$contenido .= "Aptitudes: " . $aptitudes . "\n";
$contenido .= "Habilidades: " . implode(", ", $habilidades) . "\n";
$contenido .= "Perfil: " . $perfil . "\n\n";

//Indicamos donde se colocara nuestra informacion enviada
$archivo = 'informacion.txt';
file_put_contents($archivo, $contenido, FILE_APPEND);
?>
