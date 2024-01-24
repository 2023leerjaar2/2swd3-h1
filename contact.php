<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <title>Kamadoing - Contact</title>
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
<form action="contactformulier.php" method="POST">
        <label for="naam">Naam:</label><br>
        <input type="text" id="naam" name="naam" required><br>

        <label for="email">E-Mail:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="onderwerp">Onderwerp:</label><br>
        <select id="onderwerp" name="onderwerp"><br>
            <option value="algemene_vraag">Algemene Vraag</option>
            <option value="recept_vraag">Vraag over Recept</option>
            <option value="partnerschap">Partnerschap</option>
        </select><br>

        <label for="bericht">Bericht:</label><br>
        <textarea id="bericht" name="bericht" required></textarea><br>

        <input type="submit" value="Verzenden"><br>
</form>
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