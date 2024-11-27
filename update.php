<?php
include("connection.php");
$con = connection();

// Consulta para obtener hábitos agrupados por fechas
$sql = "SELECT r.date, h.title, r.completed
        FROM records r
        JOIN habits h ON r.habit_id = h.id
        ORDER BY r.date DESC";
$query = mysqli_query($con, $sql);

// Agrupar los datos por fecha
$groupedData = [];
while ($row = mysqli_fetch_assoc($query)) {
    $date = $row['date'];
    $groupedData[$date][] = [
        'title' => $row['title'],
        'completed' => $row['completed']
    ];
}
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
        <section id="page2" class="section">
            <h3>All Habits</h3>
            <?php foreach ($groupedData as $date => $habits): ?>
                <h4><?php echo date("d/m/Y", strtotime($date)); ?></h4>
                <?php foreach ($habits as $habit): ?>
                    <p>
                        <?php echo $habit['completed'] ? '✔️' : '❌'; ?>
                        <?php echo $habit['title']; ?>
                    </p>
                <?php endforeach; ?>
            <?php endforeach; ?>
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

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>