</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kamadoing";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["receptnaam"])) {
  $gebruikersnaam = $_POST["receptnaam"];

  $sql = "DELETE FROM recepten WHERE naam = '$gebruikersnaam'";

  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Gebruiker $gebruikersnaam is succesvol verwijderd');</script>";
} else {
    echo "<script>alert('Error: " . $sql . "\\n" . $conn->error . "');</script>";
}
}

$conn->close();
?>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('.delete-button').addEventListener('click', function (event) {
      var bevestigen = confirm('Weet je zeker dat je deze gebruiker wilt verwijderen?');
      if (!bevestigen) {
        event.preventDefault(); 
      }
    });
  });
</script>


<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <title>Kamadoing - Recept Verwijderen</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" href="images/Logo.png" type="image/icon">

</head>
<body>

<header class="black-header">
    <a class="Logo">
        <img src="images/Logo.png" height="70">
    </a>
    <h1>𝒲𝑒𝓁𝓀𝑜𝓂 𝒷𝒾𝒿 𝒦𝒶𝓂𝒶𝒹𝑜𝒾𝓃𝑔!</h1>
    <nav>
        <ul class="nav-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="#">Recepten-Overzicht</a></li>
          <li><a href="ReceptToevoegen.php">Recepten Toevoegen</a></li>
          <li><a href="#">Receptboeken</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="admin.php">Administratie</a></li>

        </ul>
      </nav>
</header>

<main>
    

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <title>Kamadoing - Recept Verwijderen</title>
</head>
<body>

<h1>Recept Verwijderen</h1>

<form method="post" action="ReceptVerwijderen.php">
  <label for="receptnaam">Receptnaam:</label>
  <input type="text" id="receptnaam" name="receptnaam" placeholder="Vul hier receptnaam in!" required>
  <br><br>
  <input type="submit" value="Verwijder Recept" class="delete-button">
</form>

</body>
</html>
</main>

<footer class="black-footer">
<p>&copy; Copyright 2023 KAMADOING - Alle rechten onder voorbehoud.</p>
</footer>
<style>
body {
  margin: 0;
  font-family: 'Times New Roman', Times, serif;
  background-color: #f0f0f0; 
  display: flex;
  flex-direction: column;
  min-height: 100vh; 
  background-color: rgb(233, 97, 18);
  background-image: url('./images/Background.jpeg');

}

main {
  flex: 1; 
  padding: 20px;
}

.black-header {
  background-color: black;
  color: white;
  padding: 20px;
  height: 100px;
  text-align: center;
  position: relative;
}


.Logo {
  position: absolute;
  top: 5px;
  left: 20px; 
}

.black-footer {
  background-color: black;
  color: white;
  padding: 10px;
  text-align: center;
  margin-top: auto; 
}

.delete-button {
  padding: 10px 20px;
  background-color: #ff3333;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s;
  font-size: 16px;
  text-transform: uppercase; 
}

.delete-button:hover {
  background-color: #cc0000;
}

.nav-links {
  list-style: none;
  padding: 0;
  display: flex;
  justify-content: center;
}

.nav-links li {
  margin: 0 10px;
}

.nav-links li a {
  text-decoration: none;
  color: white;
}

.nav-links li a {
  text-decoration: none;
  color: white;
  font-size: 16px; 
  transition: font-size 0.3s; 
}

.nav-links li a:hover {
  font-size: 20px; 
  color:red;

}
</style>
</body>
</html>
