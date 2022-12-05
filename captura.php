<?php
 require 'config/config.php';
 require 'config/database.php';

unset($_SESSION['carrito']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <link href="css/estilos.css" rel="stylesheet">
</head>

<body>

    <header>
        <div class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
            <div class="container">
            <a href="index.php" class="navbar-brand">

                <strong>Tienda Online</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

                <div class="collapse navbar-collapse" id="navbarHeader">
                    <ul class="navbar-nav me-auto mb-2 mb-1g-0">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link active"> Catalogo </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://wa.me/523312891097?text=Necesito%20ayuda%20con%20mi%20compra" class="nav-link"> Contacto </a>
                        </li>
                    </ul>
                    <a href="index.php" class="btn btn-primary"> 
                        Volver <span class="badge bg-secondary"></span>
                     </a>
                </div>
            </div>
        </div>
    </header>

    <h1>Pago exitoso</h3>";
  
</body>

</html>



