<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa Verde</title>
    <!-- Enlace a los archivos CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Enlace a los archivos JavaScript de Bootstrap (opcional, si necesitas funcionalidad de Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Tus estilos personalizados -->
    <link rel="stylesheet" href="estilos.css">
    <!-- Fuentes de Google (si las estás usando) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Noto+Sans+JP&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="jquery.convform.css">
    </link>
    <link
        href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=Catamaran:wght@100..900&family=Indie+Flower&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100..900&family=Indie+Flower&display=swap"
        rel="stylesheet">
    <script type="text/javascript" src="jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="jquery.convform.js"></script>
    <script type="text/javascript" src="script.js"></script>


</head>

<body>

    <div class="chat_icon">
        <img src="img/chatbot.png">
    </div>

    <div class="chat_box">
        <div class="conv-form-wrapper">
            <form action="" method="GET" class="hidden">
                <select name="category"
                    data-conv-question="¡Hola, somos Empresa Verde y tenemos la función de hacer que pases el mejor viaje de tu vida!">
                    <option value="Interesado">¡Estoy interesado!</option>
                    <option value="Informacion">¡Más información!</option>
                </select>

                <div data-conv-fork="category">
                    <div data-conv-case="Interesado">
                        <select name="Descuento"
                            data-conv-question="¡Genial! Tenemos descuentos del 25% en tu primer viaje. ¿Deseas ver los sitios turísticos?">
                            <option value="Lugares">¡Ver lugares!</option>
                        </select>
                    </div>

                    <div data-conv-fork="Descuento">

                        <div data-conv-case="Lugares">
                            <input type="text" name="InfLuga"
                                data-conv-question="Tenemos dos promociones para la hermosa ciudad de Ica y el bello Cusco. Para poder hablar con un asesor de viajes ingrese al chat de WhatsApp <a href='https://wa.link/d1avso' target='_blank'>aquí</a> ">
                        </div>

                    </div>

                    <div data-conv-case="Informacion">
                        <input type="text" name="InfEmpresa"
                            data-conv-question="Somos una empresa encargada de ofrecer viajes a sitios turísticos al mejor precio, contamos con más de 6 años de experiencia en el rubro y nuestros clientes nos respaldan">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="contenedor">
        <header class="cabecera">
            <h1>Empresa Verde 🌳</h1>
        </header>
        <nav>
            <ul>
                <li>
                    <a href="#" class="animate" data-bs-toggle="collapse" data-bs-target="#collapseAcercaDe"
                        role="button" aria-expanded="false" aria-controls="collapseAcercaDe">
                        Acerca de
                    </a>
                    <div class="collapse" id="collapseAcercaDe">
                        <div class="card card-body">
                            Este proyecto está realizado por: <br> Arias Espino, Abel <br> Bellon Chero, Dariel <br>
                            Chirito Gómez, Lorenzo <br> Serpa Rios, Alvaro
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
    <div class="refe">
        <main>
            <section class="content-principal">
                <div class="image-container">
                    <img src="referencia2.jpeg" class="animated-image">
                </div>
                <div class="texto-superpuesto">
                    <div>
                        <h1 class="imgtext1 animate-entrada">Vive experiencias Inolvidables</h1>
                        <h2 class="imgtext2 animate-entrada">¡Elige cuál es tu próximo destino!</h2>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <h1 class="prev">Échale un vistazo a estos lugares...</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
        include('conexion.php');

        $query = "SELECT * FROM lugares";
        $result = $conexion->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="col">';
                echo '<div class="card h-100">';
                echo '<img src="' . $row['imagen'] . '" class="card-img-top" alt="' . $row['nombre'] . '">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $row['nombre'] . '</h5>';
                echo '<p class="card-text">' . $row['descripcion'] . '</p>';
                echo '</div>';
                echo '<div class="card-footer">';
                echo '<small class="text-body-secondary">Ubicación: ' . $row['ubicacion'] . '</small>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "No hay lugares turísticos disponibles.";
        }

        $conexion->close();
        ?>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Contacto</h3>
                    <p>Correo electrónico: info@empresalaverde.com</p>
                    <p>Teléfono: 123-456-7890</p>
                </div>
                <div class="col-lg-6">
                    <h3>Nunca es tarde <br> para conocer el mundo 🌳</h3>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>