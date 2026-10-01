<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Procesando Ingreso</title>
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        .mensaje-exito {
            background-color: var(--celeste);
            text-align: center;
            padding: 100px 20px;
            min-height: 600px;
            font-family: 'Arial', sans-serif;
        }
        .mensaje-exito h1 {
            font-family: 'SimpsonFont', sans-serif;
            font-size: 40px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    
    <!-- Header Superior con Logo funcional -->
    <div class="header-superior-archivo">
        <a href="../index.html">
            <img src="../imagenes/logoprincipal.png" alt="The Simpsons" class="logo-pequeno">
        </a>
        <div></div>
    </div>

    <!-- Navegación Principal -->
    <header class="main-header">
        <nav>
            <a href="archivo.html">ARCHIVO <img src="../imagenes/iconorosquilla.png" alt="Icono" class="nav-icon"></a>
            <a href="habitantes.html">HABITANTES <img src="../imagenes/iconorosquilla.png" alt="Icono" class="nav-icon"></a>
            <a href="comunidad.html">COMUNIDAD <img src="../imagenes/iconorosquilla.png" alt="Icono" class="nav-icon"></a>
        </nav>
    </header>

    <main class="mensaje-exito">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usuario = htmlspecialchars($_POST['usuario']);
            
            echo "<h1>¡BIENVENIDO A SPRINGFIELD, " . strtoupper($usuario) . "!</h1>";
            echo "<p>Tus datos han sido validados correctamente usando PHP y HTML5.</p><br>";
            echo "<a href='../index.html' class='btn-amarillo'>VOLVER AL INICIO</a>";
        } else {
            echo "<h1>ACCESO DENEGADO</h1>";
            echo "<p>Por favor, ingresa desde el formulario.</p><br>";
            echo "<a href='registro.html' class='btn-amarillo'>VOLVER AL LOGIN</a>";
        }
        ?>
    </main>

    <footer>
        <img src="../imagenes/sobre.png" alt="Contacto" class="icono-footer">
    </footer>
</body>
</html>