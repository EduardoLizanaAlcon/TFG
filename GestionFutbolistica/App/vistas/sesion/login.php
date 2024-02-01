<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login de Fútbol</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body class="vh-100 bg-secondary d-flex flex-column">

<!-- Header -->
<header class="bg-dark text-white text-center py-3">
    <div class="container">
        <h1 class="mb-0"><i class="fas fa-futbol"></i> Portal de Fútbol <i class="fas fa-futbol"></i></h1>
    </div>
    
</header>
<!-- Cuerpo -->
<div class="container flex-grow-1 my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="car bg-dark text-light" > <!-- Estilos en línea añadidos -->
                <div class="card-body">
                    <h2 class="text-center mb-4">
                        <i class="fas fa-futbol"></i> Iniciar Sesión <i class="fas fa-futbol"></i>
                    </h2>
                    <form method="post">
                        <div class="form-group">
                            <label for="username">Usuario:</label>
                            <input type="text" class="form-control" id="username" name="usuario" placeholder="Ingrese su usuario">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña:</label>
                            <input type="password" class="form-control" id="password" name="contra" placeholder="Ingrese su contraseña">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">
                            <i class="fas fa-sign-in-alt"></i> Iniciar Sesión
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
    <div class="container">
        <p class="mb-0">&copy; 2024 Portal de Fútbol</p>
    </div>
</footer>

<!-- Bootstrap JS y Popper.js (necesarios para el funcionamiento de Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Font Awesome JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>

</body>
</html>
