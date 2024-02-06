<?php
    require RUTA_APP.'\vistas\equipo\inc\header.php';
?>

<div class="container my-5 col-10 h-100">
    <div class="row justify-content-center h-100">
        <div class="d-flex justify-content-center col-12 h-75 row" id="contenedor">
            <!-- Contenido dinámico generado con JavaScript -->
        </div>
        <div class="col-12 mt-3">
            <button class="btn btn-primary mr-0" id="btnAnterior">Anterior</button>
            <button class="btn btn-primary ml-0" id="btnSiguiente">Siguiente</button>
        </div>
    </div>
</div>

<?php
    require RUTA_APP.'\vistas\inc\footer.php'
?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var partidos = <?php echo json_encode($this->datos['partidos']); ?>;
        var contenedor = document.getElementById("contenedor");
        var currentIndex = 0;

        function mostrarPartidos() {
            // Limpiar el contenido del contenedor
            contenedor.innerHTML = '';
            // Mostrar los siguientes 9 partidos
            partidos.slice(currentIndex, currentIndex + 9).forEach(function(partido) {
                var divpartido = document.createElement("div");
                divpartido.classList.add("col-3", "h-25", "m-3", "border", "row");  // Agrega clases Bootstrap

                var divLocal = document.createElement("div");
                divLocal.className = "col-4  ";
                var nombreLocal = document.createElement("p");
                nombreLocal.textContent = partido['Local'][0]['Nombre'];  // Modificado para mostrar el nombre del equipo local
                nombreLocal.classList.add("fs-1", "text-white", "text-sm"); // Clases de Bootstrap para tamaño y color de texto

                var centro = document.createElement("div");
                centro.className = "col-4  ";
                var fecha = document.createElement("p");
                fecha.textContent = partido['Fecha'];  // Modificado para mostrar el nombre del equipo local
                fecha.classList.add("text-white", "text-sm"); // Clases de Bootstrap para color de texto

                var divVisitante = document.createElement("div");
                divVisitante.className = "col-4  ";
                var nombreVisitante = document.createElement("p");
                nombreVisitante.textContent = partido['Visitante'][0]['Nombre'];  // Modificado para mostrar el nombre del equipo local
                nombreVisitante.classList.add("fs-1", "text-white", "text-sm"); // Clases de Bootstrap para tamaño y color de texto

                divpartido.appendChild(divLocal);
                divLocal.appendChild(nombreLocal);
                divpartido.appendChild(centro);
                centro.appendChild(fecha);
                divpartido.appendChild(divVisitante);
                divVisitante.appendChild(nombreVisitante);
                contenedor.appendChild(divpartido);
            });
        }

        function actualizarBotones() {
            document.getElementById("btnAnterior").style.display = currentIndex === 0 ? "none" : "inline-block";
            document.getElementById("btnSiguiente").style.display = currentIndex + 9 >= partidos.length ? "none" : "inline-block";
        }

        // Mostrar los primeros partidos
        mostrarPartidos();
        actualizarBotones();

        document.getElementById("btnAnterior").addEventListener("click", function() {
            currentIndex = Math.max(0, currentIndex - 9);
            mostrarPartidos();
            actualizarBotones();
        });

        document.getElementById("btnSiguiente").addEventListener("click", function() {
            currentIndex = Math.min(currentIndex + 9, partidos.length - 9);
            mostrarPartidos();
            actualizarBotones();
        });
    });
</script>

</body>
</html>
