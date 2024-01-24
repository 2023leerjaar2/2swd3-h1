<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <title>Kamadoing - Home</title>
  <link rel="stylesheet" href="css/indexstyle.css">
  <link rel="icon" href="images/Logo.png" type="image/icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
          <li><a href="receptboeken.php">Receptboeken</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <section class="banner">
  <div class="banner">
    <img src="images/banner.jpg" alt="Banner van Kamadoing" height="270">
  </div>
  </section>
</header>
 
<main>
  <section class="introductie">
        <h2>Ontdek de Wereld van Kamadoing!</h2>
        <p>
            Welkom op Kamadoing, het BBQ-blog van de bekende auteur S. Pek. Hier deelt hij wekelijks heerlijke
            kamado-gerechten en neemt hij je mee in de kunst van het barbecueën op kamado's. Ontdek nieuwe smaken,
            leer handige BBQ-tips en laat je inspireren voor je volgende culinaire avontuur!
        </p>
        <p>
            Naast gratis recepten vind je hier ook informatie over de kookboeken van S. Pek. Laat je verleiden door
            zijn passie voor koken en ontdek de geheimen van de kamado-keuken.
        </p>
        <p>
            Begin vandaag nog jouw smakelijke reis!
        </p>
  </section>
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
 
.banner .banner {
    width: 100%;
    position: relative;
    overflow: hidden;
    top: 5px; 
}
 
.banner img {
    width: 100%;
    display: block;
}
 
.banner .banner:before {
    content: "";
    display: block;
    padding-top: 10%;
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
</body>
</html>