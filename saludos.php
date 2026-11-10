<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="formulario">
        <h1>Saludos</h1>
        <hr>
        <label>Elije un idioma</label><input type="text" name="idioma">
        <hr>
        <button type="submit" name="saludo">Cargar saludo</button>
    <?php
        if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['saludo'])){
            // variable para el idioma
            $I = $_POST['idioma'];
            // comparar resultados
            if($I == "ESPAÑOL"){
                echo "Bienvenido Josue Francisco";
            } else if($I == "INGLES"){
                echo "Welcome Josue Francisco";
            } else if($I == "FRANCES"){
                echo "Bienvenue Josue Francisco";
            } else if($I == "PORTUGUES"){
                echo "Bem-vindo Josue Francisco";
            } else if($I == "CHINO"){
                echo "歡迎 josue Francisco";
            }
        } 
    ?>
    </div>
</body>
</html>