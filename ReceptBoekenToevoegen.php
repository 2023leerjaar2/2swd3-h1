<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <title>Kamadoing - Home</title>
  <link rel="stylesheet" href="css/indexstyle.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="icon" href="images/Logo.png" type="image/icon">

</head>
<body>
 
<header class="black-header">
    <a class="Logo" href="index.php">
      <img src="images/logo.png" alt="Logo van Kamadoing" height="75">
    </a>
    <h1>𝒲𝑒𝓁𝓀𝑜𝓂 𝒷𝒾𝒿 𝒦𝒶𝓂𝒶𝒹𝑜𝒾𝓃𝑔!</h1>
    <nav>
        <ul class="nav-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="receptenoverzicht.php">Recepten-Overzicht</a></li>
          <li><a href="ReceptToevoegen.php">Recepten Toevoegen</a></li>
          <li><a href="receptboeken.php">Receptboeken</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="admin.php">Administratie</a></li>
          <li><a href="ReceptBoekenToevoegen.php">Recept Boeken Toevoegen</a></li>

        </ul>
    </nav>
  
</header>
 
<main>

</head>
<body>
<a href="ReceptBoekenVerwijderen.php" class="delete-button">Verwijder Receptboeken</a>

<form method="post">
    <label for="boektitel">Boektitel:</label><br>
    <input type="text" id="boektitel" name="boektitel" placeholder="Voeg hier de titel van het boek toe!"><br><br>
    
    <label for="auteur">Auteurnaam:</label><br>
    <input type="text" id="auteur" name="auteur" placeholder="Voeg hier de naam van de auteur toe!"><br><br>
  
    <label for="prijs">Prijs:</label><br>
    <input type="text" id="prijs" name="prijs" placeholder="Voeg hier de prijs toe!"><br><br>
    
    <input type="submit" value="Opslaan"> 

</form>

</body>
</html>

</main>
 
<footer class="black-footer">
<div class="container">
  <div class="row"></div>
  <div class="row">
    <p>&copy; Copyright 2023 KAMADOING - Alle rechten onder voorbehoud.</p>
  </div>
  <div class="row"></div>
</div>
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
.delete-button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #ff3333;
  color: white;
  text-decoration: none;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s;
  font-size: 16px;
}

.delete-button:hover {
  background-color: #cc0000;
}

form {
      max-width: 400px;
      margin: 0 auto;
      background-color: white;
      padding: 18px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
background-color: blue;
    }
    
    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
 

    input[type="text"] {
      width: calc(100% - 12px);
      padding: 6px;
      margin-bottom: 10px;
      border: 2px solid black;
      border-radius: 4px;
    }
    
    input[type="submit"] {
      padding: 8px 16px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      
    }
    
    input[type="submit"]:hover {
      background-color: #45a049;

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
</style>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['boektitel'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kamadoing";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $boektitel = $_POST['boektitel'] ?? '';
    $auteur = $_POST['auteur'] ?? '';
    $prijs = $_POST['prijs'] ?? '';

    $sql = "INSERT INTO receptboeken (Titel, Auteurnaam, Prijs) VALUES ('$boektitel', '$auteur', '$prijs')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Receptboek succesvol toegevoegd!');</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
    }

    $conn->close();
}
?>


</body>
</html>