<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <title>Kamadoing</title>
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
          <li><a href="ReceptBoekenToevoegen.php">Recept Boeken Toevoegen</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="admin.php">Administratie</a></li>
          <li><a href="ContactShow.php">Contactlijst</a></li>

        </ul>
      </nav>
</header>

<ul class="user-list">
  <?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "kamadoing";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM receptboeken";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["Titel"] . '<br>' . $row["Auteurnaam"] . '<br>' . $row["prijs"] . '<br>' .  $row["link"] . '</li>';
    }    }
   else {
    echo "Geen gebruikers gevonden";
  }

  $conn->close();
  ?>
</ul>

<script>
  function verwijderGebruiker(gebruikersnaam) {
    if (confirm("Weet je zeker dat je deze gebruiker wilt verwijderen?")) {
    
      alert("Gebruiker " + gebruikersnaam + " is verwijderd!"); 
    }
  }
</script>
</main>

<footer class="black-footer">
<p>&copy; Copyright 2023 KAMADOING - Alle rechten onder voorbehoud.</p>
</footer>

  </div>
<style>
    body {
      font-family: Arial, sans-serif;
      background-color: #d96707;
      margin: 0;
      padding: 0;
      background-image: url('./images/Background.jpeg');

    }

.admin-links {
  width: 200px; 
  background-color: #d96707; 
  text-decoration: none; 
  padding-left: 10px; 
}

.admin-links a {
  display: block;
  padding: 8px 16px;
  color: white;
  transition: background-color 0.3s, color 0.3s;
}

.admin-links a:hover {
  background-color: #d96707;
  color: red;
}

    main {
      max-width: 600px;
      margin: 20px auto;
      background-color: red;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      color: #333;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin-bottom: 8px;
      color: #333;
    }

    .user-list {
  max-width: 400px;
  margin: 20px auto;
}
    
    .user-list {
      background-color: #d96707;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
    }
    input[type="text"],
    input[type="file"],
    textarea {
      padding: 8px;
      margin-bottom: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
    }

    input[type="submit"] {
      padding: 10px 20px;
      background-color: #d96707;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
      background-color: #d96707;
    }

  </style>
<style>

main {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    h2 {
      text-align: center;
      color: #333;
    }

    .user-list {
      list-style: none;
      padding: 0;
    }

    .user-list li {
      margin-bottom: 8px;
      font-size: 18px;
      background-color: ;
      padding: 8px 12px;
      border-radius: 6px;
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out;
    }

    .user-list li:hover {
      transform: translateY(-3px);
      background-color: #d96707;
    }
body {
  margin: 0;
  font-family: 'Times New Roman', Times, serif;
  background-color: #f0f0f0; 
  display: flex;
  flex-direction: column;
  min-height: 100vh; 
  background-color: rgb(233, 97, 18);
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
  color: #d96707;

}
</style>
</body>
</html>
