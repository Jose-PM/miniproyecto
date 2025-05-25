<?php
$host = "sql211.infinityfree.com"; 
$user = "if0_39000880";     
$pass = "4fmKXXf2C9cqaou";         
$db   = "if0_39000880_miniweb_db"; 

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$sql = "SELECT * FROM Catalogo_Peliculas";
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>SeriesView</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <style>
    body {
      background-color: #121212;
      color: #ffffff;
    }
    .card {
      background-color: #1e1e1e;
      border: none;
      transition: transform 0.3s, box-shadow 0.3s;
      cursor: pointer;
    }
    .card:hover {
      transform: scale(1.03);
      box-shadow: 0 0 10px 3px #e50914; /* LED rojo */
    }
    .card-img-top {
      height: 300px;
      object-fit: cover;
    }
    .info-adicional {
      display: none;
      font-size: 0.9em;
      color: #cccccc;
    }
    .toggle-info {
      background-color: #e50914;
      border: none;
      color: white;
    }
    .toggle-info:hover {
      background-color: #b00610;
    }
    .search-box {
      max-width: 500px;
      margin: 0 auto 30px;
    }
    .card-title {
      color: #fff;
      font-size: 1.4em;
      font-weight: bold;
      margin-bottom: 10px;
    }
    .card-text {
      color: #ccc;
    }
    .extra-info {
      color: #aaa;
      font-size: 0.85em;
    }
    /* Estilos para los recuadros de edad */
    .edad-box {
      padding: 4px 10px;
      border-radius: 8px;
      color: white;
      font-weight: bold;
      font-size: 0.8em;
      display: inline-block;
      min-width: 45px;
      text-align: center;
    }
    .edad-7 {
      background-color: #28a745; /* verde */
    }
    .edad-12 {
      background-color: #fd7e14; /* naranja */
    }
    .edad-16 {
      background-color: #dc3545; /* rojo */
    }
    /* Estilo neón rojo para el título */
    .neon-red {
      color: #ff073a;
      text-align: center;
      font-weight: bold;
      font-size: 3rem;
      text-shadow:
        0 0 5px #ff073a,
        0 0 10px #ff073a,
        0 0 20px #ff073a,
        0 0 40px #ff073a,
        0 0 80px #ff073a;
    }
    footer {
      margin-top: 40px;
      padding: 20px 0;
      color: #888;
      text-align: center;
    }
    footer hr {
      border-color: #555;
      margin-bottom: 15px;
    }
  </style>
</head>
<body>
  <div class="container py-5">
    <h1 class="neon-red mb-4">SeriesView</h1>

    <div class="search-box text-center">
      <input type="text" id="buscador" class="form-control" placeholder="Buscar series...">
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4" id="contenedor-series">
      <?php while($row = $resultado->fetch_assoc()): ?>
        <?php 
          $tituloSerie = htmlspecialchars($row['titulo']);
          $categorias = htmlspecialchars($row['categorias']);
          $imagen = htmlspecialchars($row['imagen']);
          $descripcion = htmlspecialchars($row['descripcion']);
          $edad = htmlspecialchars($row['edad']);
          $temporadas = htmlspecialchars($row['temporadas']);

          $edadNum = intval($edad);
          $edadClass = "edad-7"; // por defecto verde
          if ($edadNum >= 16) {
            $edadClass = "edad-16";
          } elseif ($edadNum >= 12) {
            $edadClass = "edad-12";
          }
          $edadHtml = "<span class='edad-box $edadClass'>{$edad}</span>";
        ?>
        <div class="col serie" data-nombre="<?= strtolower($tituloSerie) ?>">
          <div class="card h-100">
            <img src="<?= $imagen ?>" class="card-img-top" alt="<?= $tituloSerie ?>">
            <div class="card-body">
              <h4 class="card-title"><?= $tituloSerie ?></h4>
              <p class="card-text"><?= $categorias ?></p>
              <div class="d-flex justify-content-between align-items-center mb-2">
                <button class="btn btn-sm toggle-info">+ Info</button>
                <span class="extra-info"><?= $edadHtml ?> &nbsp; <?= $temporadas ?> Temporadas</span>
              </div>
              <div class="info-adicional mt-2">
                <p><?= $descripcion ?></p>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>

<footer style="background-color: #1e1e1e; color: #bbb; padding: 30px 20px; margin-top: 40px; text-align: center; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
  <hr style="border-color: #333; margin-bottom: 20px; max-width: 600px; margin-left: auto; margin-right: auto;">
  <p style="margin: 0 0 10px; font-size: 1.1rem;">
    Hecho<span style="color: #e50914;"></span> por <strong>Jose Padilla Mendez</strong>
  </p>
  <p style="margin: 0; font-size: 0.9rem; color: #777;">
    © <?= date('Y') ?> SeriesView. Todos los derechos reservados.
  </p>
  <div style="margin-top: 15px;">
    <a href="https://mail.google.com/mail/u/0/?pli=1#inbox?compose=new" style="color: #bbb; text-decoration: none; margin: 0 10px; transition: color 0.3s;">Gmail</a> |
    <a href="https://github.com/Jose-PM" target="_blank" rel="noopener" style="color: #bbb; text-decoration: none; margin: 0 10px; transition: color 0.3s;">GitHub</a>
  </div>
  <style>
    footer a:hover {
      color: #e50914;
      text-decoration: underline;
    }
  </style>
</footer>


  <script>
    $(document).ready(function(){
      $(".toggle-info").click(function(){
        $(this).closest(".card-body").find(".info-adicional").slideToggle();
      });

      $("#buscador").on("keyup", function(){
        var valor = $(this).val().toLowerCase();
        $(".serie").each(function(){
          var nombre = $(this).data("nombre");
          $(this).toggle(nombre.includes(valor));
        });
      });
    });
  </script>
</body>
</html>
