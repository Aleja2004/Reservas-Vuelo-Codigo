document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Obtener los valores de usuario y contraseña ingresados
    var usuario = document.querySelector('input[name="usuario"]').value;
    var contrasena = document.querySelector('input[name="contrasena"]').value;
    
    // Validar el formulario
    if (usuario === '' || contrasena === '') {
      document.querySelector('.error').textContent = 'Por favor, complete todos los campos';
      return;
    }
    
    // Realizar la lógica de autenticación
    // Aquí puedes realizar una petición AJAX al servidor para verificar las credenciales
    
    // Si las credenciales son válidas, redireccionar al usuario a la página principal
    window.location.href = 'menu.php';
  });
  