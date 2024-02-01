
<?php
    require RUTA_APP.'\vistas\equipo\inc\header.php'
?>

<!-- Resto del contenido -->
<div class="container flex-grow-1 my-5">
    <h1>Jugadores</h1>
    
    <div id="ContenedorJugadores">

    </div>
    <h1>Entrenador</h1>
    <div id="ContenedorEntrenador" class="mt-4 bg-ligth">

    </div>
    <?php

    //print_r($this->datos['entrenador']);
    ?>
    <h1>STAFF Tecnico</h1>
    <div id="ContenedorStaff">

    </div>
</div>

<?php
    require RUTA_APP.'\vistas\inc\footer.php'
?>
<script>
    // Convierte el array de jugadores de PHP a JavaScript
        var jugadores = <?php echo json_encode($this->datos['jugadores']); ?>;


    // Obtiene el contenedor de jugadores en el DOM
        var contenedorJugadores = document.getElementById('ContenedorJugadores');

    // Crea el contenedor principal que simulará ser una tabla
    var tabla = document.createElement('div');
    tabla.classList.add('table', 'table-bordered', 'table-responsive');

    // Crea el encabezado de la "tabla"
    var encabezado = document.createElement('div');
    encabezado.classList.add('thead', 'thead-dark', 'd-flex', 'flex-row', 'font-weight-bold', 'border-bottom', 'p-2');
    crearDiv(encabezado, 'Nombre');
    crearDiv(encabezado, 'Apellido');
    crearDiv(encabezado, 'Dorsal');
    crearDiv(encabezado, 'Equipo');
    crearDiv(encabezado, 'DNI');
    crearDiv(encabezado, 'Correo');
    crearDiv(encabezado, 'Telefono');
    crearDiv(encabezado, 'Fecha de Nacimiento');
    tabla.appendChild(encabezado);

    // Crea el cuerpo de la "tabla"
    var cuerpoTabla = document.createElement('div');

    // Recorre el array de jugadores y agrega cada fila a la "tabla"
    jugadores.forEach(function(jugador) {
        var fila = document.createElement('div');
        fila.classList.add('d-flex', 'flex-row', 'border-bottom', 'p-2');
        crearDiv(fila, jugador.Nombre);
        crearDiv(fila, jugador.Apellido);
        crearDiv(fila, jugador.Dorsal);
        crearDiv(fila, jugador.Equipo);
        crearDiv(fila, jugador.DNI);
        crearDiv(fila, jugador.Correo);
        crearDiv(fila, jugador.Telefono);
        crearDiv(fila, jugador.Fecha_nac);
        cuerpoTabla.appendChild(fila);
    });

    // Agrega el cuerpo de la "tabla" al contenedor
    tabla.appendChild(cuerpoTabla);
    contenedorJugadores.appendChild(tabla);

    // Función auxiliar para crear divs
    function crearDiv(contenedor, texto) {
        var div = document.createElement('div');
        div.classList.add('p-2', 'w-50');
        div.textContent = texto;
        contenedor.appendChild(div);
    }
</script>
</body>
</html>
