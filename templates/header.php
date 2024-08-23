<?php 
  include_once("helpers/url.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Codar</title>
  <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/css/styles.css">
<!-- GOOGLE FONTS -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <a href="<?= $BASE_URL ?>">
      <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Blog Codar">
    </a>
    <nav>
      <ul id="navbar">
        <li><a href="<?= $BASE_URL ?>">Home</a></li>
        <li><a href="#">Categorias</a></li>
        <li><a href="#">Sobre</a></li>
        <li><a href="<?= $BASE_URL ?>contato.php">Contato</a></li>
      </ul>
    </nav>
  </header>