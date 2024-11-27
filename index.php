<?php
date_default_timezone_set('America/Caracas');

include("connection.php");
$con = connection();

$today = date('Y-m-d');

$sql = "SELECT r.id AS record_id, h.title AS habit_name, r.date, r.completed 
FROM records r
INNER JOIN habits h ON r.habit_id = h.id
WHERE r.date = CURDATE();
";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./CSS/style.css">
  <title>My Habits</title>
</head>

<body>
  <header>
    <h1>Habit Tracker</h1>
  </header>
  <main>
    <section id="page1" class="section active">
      <h3>Today</h3>
      <div class="checkbox-list">
        <?php while ($row = mysqli_fetch_array($query)): ?>
          <div class="checkbox-item">
            <input type="checkbox" id="<?= $row['record_id'] ?>">
            <label for="<?= $row['record_id'] ?>"><?= $row['habit_name'] ?></label>
          </div>
        <?php endwhile; ?>
      </div>
    </section>
  </main>
  <nav>
    <section>
      <ul>
        <li>
          <a href="index.php">
            <span class="icon">
              <ion-icon name="home-outline"></ion-icon>
            </span>
            <span class="text">Today</span>
          </a>
        </li>
        <li>
          <a href="">
            <span class="icon">
              <div class="circle">
                <ion-icon name="add-outline"></ion-icon>
              </div>
            </span>
            <span class="text">Add</span>
          </a>
        </li>
        <li>
          <a href="update.php">
            <span class="icon">
              <ion-icon name="time-outline"></ion-icon>
            </span>
            <span class="text">All</span>
          </a>
        </li>
      </ul>
    </section>
  </nav>
</body>

<!-- <script src="script.js"></script> -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>