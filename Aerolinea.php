<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="orden/css/styleAerolinea.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Aerolinea</title>
</head>

<body>

    <div class="container-page" id="Container">
        <div class="login-container" id="LoginContainer">

            <a href="menu.php" class="back-button">
                <i class="fas fa-arrow-left"></i> Atrás
            </a>


            <h1 class="title">Aerolinea</h1>
            <form action="conexion.php" method="POST">
                <div class="input-line-container">
                    <span class="name-input">Nombre</span>
                    <input type="text" name="Nombre" class="input-line" id="name-input" placeholder="Ingrese su nombre">
                </div>
                <div class="input-line-container">
                    <span class="name-input">Pais</span>
                    <input type="text" name="Pais" class="input-line" id="country-input"placeholder="Ingrese su apellido">
                </div>
                
                <center><button type="submit" name="Registrar"><i class="fas fa-user-plus"></i>
                        Registrar</button></center>
                <br>
                <button type="submit" name="submit" value="buscar"><i class="fas fa-search"></i>search</button>
                
               
                

            </form>
            <br>
            





        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="code.js"></script>
</body>

</html>
