<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <title>Kamadoing - Recept Toevoegen</title>
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
          <li><a href="receptenoverzicht.php">Recepten-Overzicht</a></li>
          <li><a href="ReceptToevoegen.php">Recepten Toevoegen</a></li>
          <li><a href="receptboeken.php">Receptboeken</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="inloggen.php">Inloggen/Registreren</a></li>
          <li><a href="admin.php">Administratie</a></li>
          <li><a href="ReceptBoekenToevoegen.php">Recept Boeken Toevoegen</a></li>
        </ul>
      </nav>
</header>
<section><a href="ReceptVerwijderen.php" class="delete-link">Verwijder Recept</a></section>
<form method="post">
<h2>Voeg een nieuw recept toe!!</h2>

    Naam:
    <input type="text" name="naam" placeholder="Voeg de naam van het recept toe!"><br><br>
    
    Moeilijkheidsgraad:
    <select name="moeilijkheidsgraad">
        <option value="Makkelijk">Makkelijk</option>
        <option value="Gemiddeld">Gemiddeld</option>
        <option value="Moeilijk">Moeilijk</option>
    </select><br><br>
    
    Vega:
    <select name="Vega">
        <option value="Ja">Ja</option>
        <option value="Nee">Nee</option>
    </select><br><br>
    
    Bereidingstijd:
    <select name="bereidingstijd">
        <option value="5 Minuten">5 Minuten</option>
        <option value="10 Minuten">10 Minuten</option>
        <option value="15 Minuten">15 Minuten</option>
        <option value="20 Minuten">20 Minuten</option>
        <option value="25 Minuten">25 Minuten</option>
        <option value="30 Minuten">30 Minuten</option>
        <option value="35 Minuten">35 Minuten</option>
        <option value="40 Minuten">40 Minuten</option>
        <option value="45 Minuten">45 Minuten</option>
        <option value="50 Minuten">50 Minuten</option>
        <option value="55 Minuten">55 Minuten</option>
        <option value="60 Minuten">60 Minuten</option>
    </select><br><br>
    Soort gerecht:
    <select name="soort_gerecht">
        <option value="Ontbijt">Ontbijt</option>
        <option value="Lunch">Lunch</option>
        <option value="Avondeten">Avondeten</option>

    </select><br><br>    
    Beschrijving:
    <textarea name="beschrijving" placeholder="Geef hier een beschrijving van het recept!"></textarea><br><br>
    
    <input type="submit" value="Opslaan"> 
</form>
<footer class="black-footer">
<p>&copy; Copyright 2023 KAMADOING - Alle rechten onder voorbehoud.</p>
</footer>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kamadoing";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $naam = $_POST['naam'] ?? '';
    $moeilijkheidsgraad = $_POST['moeilijkheidsgraad'] ?? '';
    $vega = $_POST['Vega'] ?? '';
    $bereidingstijd = $_POST['bereidingstijd'] ?? '';
    $soort_gerecht = $_POST['soort_gerecht'] ?? '';
    $beschrijving = $_POST['beschrijving'] ?? '';

    $sql = "INSERT INTO recepten (naam, Moeilijkheidsgraad, Vega, bereidingstijd, soort_gerecht, beschrijving) 
            VALUES ('$naam', '$moeilijkheidsgraad', '$vega', '$bereidingstijd', '$soort_gerecht', '$beschrijving')";

    if ($conn->query($sql) === TRUE) {
        $message = "Recept succesvol toegevoegd!";
    } else {
        $message = "Error: " . $sql . "\\n" . $conn->error;
    }

    $conn->close();
}
?>
<script>
    <?php if (isset($message)): ?>
        alert("<?php echo $message; ?>");
    <?php endif; ?>
</script>

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
.delete-link {
  display: inline-block;
  padding: 10px 20px;
  height: 18px;
  margin-top: 20px;
  background-color: red; /* Je kunt de gewenste achtergrondkleur kiezen */
  color: white;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.delete-link:hover {
  background-color: darkred; /* Kleurverandering bij hover */
}
form {
  max-width: 600px;
  margin: 20px auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  background-color: blue;
}

form input[type="text"],
form textarea {
  width: calc(100% - 20px);
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
}

form input[type="submit"] {
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s;
}

form input[type="submit"]:hover {
  background-color: #45a049;
}

</style>

