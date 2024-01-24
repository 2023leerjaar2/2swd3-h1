<?php
require_once 'dbconnect.php';
?>

<?php
$servername = "127.0.0.1";
$username = "your_username";
$password = "your_password";
$dbname = "kamadoing";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM recepten";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <title>Kamadoing - Recepten-Overzicht</title>
  <link rel="stylesheet" href="css/contactstyle.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>
<body>
 
<header class="black-header">
    <a class="Logo" href="index.php">
      <img src="images/logo.png" alt="Logo van Kamadoing" height="75">
    </a>
    <h1>Welkom bij Kamadoing!</h1>
    <nav>
    <ul class="nav-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="inloggen.php">Inloggen/Registreren</a></li>
          <li><a href="receptenoverzicht.php">Recepten-Overzicht</a></li>
          <li><a href="receptentoevoegen.php">Recepten Toevoegen</a></li>
          <li><a href="receptboeken.php">Receptboeken</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="admin.php">Administratie</a></li>
    </ul>
    </nav>
</header>
 
<main>
      <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='recipe'>
                          <h2>" . $row['Soort_gerecht'] . "</h2>
                          <p>Moeilijkheidsgraad: " . $row['Moeilijkheidsgraad'] . "</p>
                          <p>Vega: " . $row['Vega'] . "</p>
                          <p>Bereidingstijd: " . $row['Bereidingstijd'] . "</p>
                          <p>Ingrediënten: " . $row['Ingrediënten'] . "</p>
                          <p>Beschrijving: " . $row['Beschrijving'] . "</p>
                      </div>";
            }
        } else {
            echo "<p>No recipes found.</p>";
        }

        $conn->close();
      ?>
</main>
 
<footer class="black-footer">
<div class="container">
  <div class="row col-4"></div>
  <div class="row col-4">
    <p>&copy; Copyright 2023, KAMADOING - Alle rechten onder voorbehoud.</p>
  </div>
  <div class="row col-4"></div>
</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>