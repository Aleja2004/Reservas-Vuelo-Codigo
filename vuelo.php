<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="orden/css/styleVuelos.css">
    <title>Vuelo</title>
</head>

<body>

    <div class="container-page" id="Container">
        <div class="login-container" id="LoginContainer">

            <header>
                <div class="barra-superior">
                    <h1 class="titulo">Vuelos</h1>
                </div>
        </div>
        </header>

        <section class="contenedor">

            <div class="contenido">

                <div class="linea-decorativa">
                    <div class="circulo"></div>
                    <div class="circulo"></div>
                    <div class="circulo"></div>

                </div>
                <div class="left">
                    <button type="button" onclick="history.back()"><i class="fas fa-arrow-left"></i> Atrás</button>
                    <form action="conexionVuelos.php" method="POST">

                        <label for="origen">AerolineaID:</label>
                        <input type="text" name="AerolineaID" placeholder="Ingrese el ID de la aerolinea">

                        <label for="origen">Origen:</label>
                        <input type="text" name="Origen" placeholder="Ingrese el origen del vuelo">

                        <label for="destino">Destino:</label>
                        <input type="text" name="Destino" placeholder="Ingrese el destino del vuelo">

                        <label for="fecha">Fecha:</label>
                        <input type="date" name="Fecha">

                        <button type="submit" name="Registrar"><i class="fas fa-user-plus"></i> Registrar</button>
                        <br>
                        <button type="submit" name="submit" value="buscar"><i class="fas fa-search"></i>search</button>

                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </form>
                </div>

                <div class="right">
                    <div class="popular">
                        Popular
                    </div>
                    <div class="contenedor-fotos">
                        <figure>
                            <img src="orden/imagenes/noruega.jpg" alt="">
                            <figcaption>Noruega</figcaption>
                        </figure>
                        <figure>
                            <img src="orden/imagenes/italia.jpg" alt="">
                            <figcaption>Italia</figcaption>
                        </figure>
                        <figure>
                            <img src="orden/imagenes/españa.jpg" alt="">
                            <figcaption>España</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </section>
</body>

</html>