<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="dsp-flex-xs flex-direction-column identity-layout">

    <header class="navbar navbar-expand-md navbar-dark bg-dark justify-content-center">
        <a class="navbar-brand" href="../../../index.php">
            <div class="d-flex align-items-center">
                <i class="bx bx-code-block text-white mr-2"></i>
                <h4 class="text-white">Easy Code</h4>
            </div>
        </a>
    </header>
    
    <main>
        
        <div class="container">
            <div class="row justify-content-center mt-5">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <h2 class="text-center mb-4">Inicio de Sesión</h2>
                    
                    <?php
                      if ($_SERVER["REQUEST_METHOD"] == "POST") {
                          // Procesar el formulario cuando se envía
                          $dni = $_POST['dni'];
                          $nombre = $_POST['nombre'];
                          $correo = $_POST['correo'];
                          $contraseña = $_POST['contraseña'];

                          // Conectar a la base de datos (debes tener la clase Conectar definida)
                          $db = new mysqli("localhost", "root", "", "proyecto_web");

                          if ($db->connect_error) {
                              die("Conexión fallida: " . $db->connect_error);
                          }

                          // Llamar al procedimiento almacenado para añadir usuarios
                          $sql = "CALL añadir_usuario($dni, '$nombre', '$correo', '$contraseña')";

                          if ($db->query($sql) === TRUE) {
                              echo "Usuario registrado con éxito.";
                          } else {
                              echo "Error al registrar el usuario: " . $db->error;
                          }

                          // Cerrar la conexión a la base de datos
                          $db->close();
                      }
                      ?>

                      <form method="post">
                          <label for="dni">DNI:</label>
                          <input type="text" name="dni" required><br>

                          <label for="nombre">Nombre:</label>
                          <input type="text" name="nombre" required><br>

                          <label for "correo">Correo:</label>
                          <input type="email" name="correo" required><br>

                          <label for="contraseña">Contraseña:</label>
                          <input type="password" name="contraseña" required><br>

                          <input type="submit" value="Registrar">
                      </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
          
   
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>