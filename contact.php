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
<form method="post">
<h2>Wat is uw Klacht?</h2>

    Naam:
    <input type="text" name="naam" placeholder="Zet hier uw naam!"><br><br>
    
    Klacht:
    <input type="text" name="klacht" placeholder="Zet hier uw klacht in!"><br><br>

  
    
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
    $klacht = $_POST['klacht'] ?? '';

    $sql = "INSERT INTO contact (naam, klacht) 
            VALUES ('$naam', '$klacht')";

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
  background-color: #d96707; 
  display: flex;
  flex-direction: column;
  min-height: 100vh; 
  background-color:#d96707;
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
background-color: #d96707;
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
      background-color: red;
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