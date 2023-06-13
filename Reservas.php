<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="orden/css/styleReservas.css" />


  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Reserva de asientos de vuelo</title>
</head>

<body>
  <a href="menu.php" onclick="goBack()" class="back-button">
    <i class="fas fa-arrow-left"></i> Atrás
  </a>

    <div class="movie-container">

      <select id="movie">

      </select>
    </div>
  



  <ul class="showcase">
    <li>
      <div class="seat"></div>
      <small>Disponible</small>
    </li>
    <li>
      <div class="seat selected"></div>
      <small>Seleccionado</small>
    </li>
    <li>
      <div class="seat sold"></div>
      <small>Ocupado</small>
    </li>
  </ul>
  <div class="container">
    <div class="screen"></div>

    <div class="row">
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
    </div>

    <div class="row">
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat sold"></div>
      <div class="seat sold"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
    </div>
    <div class="row">
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat sold"></div>
      <div class="seat sold"></div>
    </div>
    <div class="row">
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
    </div>
    <div class="row">
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat sold"></div>
      <div class="seat sold"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
    </div>
    <div class="row">
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat sold"></div>
      <div class="seat sold"></div>
      <div class="seat sold"></div>
      <div class="seat"></div>
    </div>
  </div>



  <div class="form-container">
    <form action="conexionReservas.php" method="POST">

      <center>
      <div class="input-line-container">
          <span class="name-input">Vuelo ID:</span>
          <input type="text" name="VueloID" class="input-line" id="country-input" placeholder="Ingrese su vuelo">
        </div>
        <br>
        <div class="input-line-container">
          <span class="name-input">Pasajero ID:</span>
          <input type="text" name="PasajeroID" class="input-line" id="name-input"
            placeholder="Ingrese su identificacion">
        </div>
        <br>
        <div class="input-line-container">
          <span class="name-input">Asiento</span>
          <input type="text" name="Asiento" class="input-line" id="country-input" placeholder="Ingrese su asiento">
        </div>


      </center>

      <br>

      <button type="submit" name="Registrar"><i class="fas fa-user-plus"></i> </button>
      <br>
      <button type="submit" name="submit" value="buscar"><i class="fas fa-search"></i>search</button>

    </form>
  </div>

  <script src="orden/js/scriptReservas.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>