<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM mat1";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="./css/style.css">
  <title>Cronogra - Redes</title>
</head>

<body>

  <nav class="mat1">
    <h2>Redes</h2>
    <div>
      <img src="img/logo.png" alt="">
      <h1>Cronograma<br>Informática 2024-III</h1>
    </div>
  </nav>
  <div class="container">
    <aside>
      <h2>Materias</h2>
      <ul>
        <a href="#">
          <li class="btn">Inicio</li>
        </a>
        <a href="#">
          <li class="btn1">Redes</li>
        </a>
        <a href="#">
          <li class="btn2">Proyecto Especial de Grado</li>
        </a>
        <a href="#">
          <li class="btn3">Electiva</li>
        </a>
        <a href="#">
          <li class="btn4">Auditoria de Sistemas</li>
        </a>
        <a href="#">
          <li class="btn5">Teoría del Desarrollo Social y Económico</li>
        </a>
      </ul>
    </aside>
    <main>
      <div class="flex">
        <h2>Redes</h2>
        <a class="btn-add" id="myLink">Agregar Evento</a>
      </div>
      <?php while ($row = mysqli_fetch_array($query)): ?>
        <div class="card" id="card-<?= $row['id'] ?>" data-id="<?= $row['id'] ?>">
          <h3><?= $row['title'] ?></h3>
          <p><?= $row['description'] ?></p>
          <div>
            <h4><?= date("d-m-Y", strtotime($row['date'])); ?></h4>
            <div>
              <a class="edit" href="" data-id="<?= $row['id'] ?>"><ion-icon name="pencil"></ion-icon></a>
              <a class="delete" href="delete_event.php?id=<?= $row['id'] ?>"><ion-icon name="trash"></ion-icon></a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </main>
  </div>
  <blockquote class="cita">
    <p>"La simplicidad es la máxima sofisticación."</p>
    <cite>— Leonardo da Vinci</cite>
  </blockquote>
  <div class="background hidden" id="background">
    <div class="card">
      <div class="close"></div>
      <h2 id="h2-form">Agregar elemento</h2>
      <form action="insert_event.php" id="form-event" method="POST">
        <input id="id-input" type="hidden" name="id">
        <input id="title-input" type="text" name="title" placeholder="Titulo">
        <input id="description-input" type="text" name="description" placeholder="Descripción">
        <input id="date-input" type="date" name="date" placeholder="Fecha">
        <a class="btn-add" id="save" type="submit">Guardar<ion-icon name="save"></ion-icon></a>
        <a class="btn-update hidden-btn" id="update" type="submit">Actualizar<ion-icon name="save"></ion-icon></a>
      </form>
    </div>
  </div>

  <script src="./js/app.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>