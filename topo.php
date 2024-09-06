<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vet</title>
  <link rel="stylesheet" href="assets/styles/style.css">

 
  <script defer src="assets/js/navbar.js"></script>
  <script defer src="assets/js/number.js"></script>

  <!-- Incluindo jQuery e jQuery UI -->
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

</head>

<body>
  <header class="header">
    <nav class="nav">
      <div class="logo">
        <img src="assets/img/logo.png" alt="logo-unimar" />
        <div class="logo-line"></div>
        <img style="max-width: 30px !important;" src="assets/img/pata.png" alt="">
      </div>
      <button class="hamburger"></button>
      <ul class="nav-list">
        <li><a href="index.php?p=1">Agende uma Consulta</a></li>
        <!-- saber o que eu estou fazendo de errado aqui -->
        <li><a href="#ouvidoria">Ouvidoria</a></li>
        <li><a href="index.php?p=2">Dicas e Curiosidades</a></li>
        <li><a href="index.php?p=3">Nossa Veterinária</a></li>
        <li><a href="index.php?p=5">Nossa Loja</a></li>
        <li><a href="index.php?p=4" class="btn">login</a></li>
      </ul>
    </nav>
  </header>