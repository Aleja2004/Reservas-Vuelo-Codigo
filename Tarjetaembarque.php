<!DOCTYPE html>
<html>
<head>
    <title>Boleto de Avión</title>
    <link rel="stylesheet" type="text/css" href="orden/css/styleTarjeta.css">
</head>
<body>
    <div class="ticket">
        <div class="header">
            <img class="logo" src="orden/imagenes/logo_transparent.png" alt="Airline Logo">
            <h2>Satela</h2>
        </div>

        <div class="flight-details">
            <h3>Detalles del Vuelo</h3>
            <p><strong>Número de vuelo:</strong> 123</p>
            <p><strong>Origen:</strong> Satela</p>
            <p><strong>Destino:</strong> Tromsø Airport</p>
            <p><strong>Fecha y Hora:</strong> 05 de Junio, 2023, 10:00 AM</p>
            <p><strong>Terminal:</strong> Terminal 1</p>
        </div>
    

        <div class="passenger-details">
            <h3>Detalles del Pasajero</h3>
            <p><strong>Nombre:</strong> John Doe</p>
        </div>

        <div class="qr-code">
            <img src="orden/imagenes/qr-code.png" alt="Código QR">
        </div>

        <div class="contact-details">
            <h3>Detalles de Contacto</h3>
            <p><strong>Teléfono:</strong> 123-456-7890</p>
            <p><strong>Email:</strong> info@aerolineaMGC.com</p>
        </div>

        <center><div class="cancellation-policy">
            <h3>Política de Cancelación y Reembolso</h3>
            <p>Política de cancelación y reembolso: <a href="https://www.colombiacompra.gov.co/sites/cce_public/files/cce_tienda_virtual/derecho_de_retracto_desistimiento_y_otras_circunstancias_de_reembolso_tiquetes.pdf">Más información</a></p>

        </div></center>

        <center><div class="security-features">
            <p>Características de seguridad:  <a href="https://udi.edu.co/images/asa/rac/RAC%20%20160%20-%20Seguridad%20de%20la%20Aviacion%20Civil.pdf">Más detalles</a></p>

        </div></center>
    
    </div>

    <script src="orden/js/scriptTarjeta.js"></script>
   
</body>

<center>
    <div class="download-options">
      <h3></h3>
      <button onclick="downloadTicket('pdf')">Descargar como PDF</button>
      <button onclick="downloadTicket('png')">Descargar como PNG</button>
      <button onclick="downloadTicket('jpg')">Descargar como JPG</button>
    </div>
  </center>
</html>
