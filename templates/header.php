<?php
require_once("globals.php");
require_once("db.php");
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MovieStar</title>
  <link rel="short icon" href="<?= $BASE_URL ?>img/moviestar.ico" />
  <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.css" integrity="sha512-drnvWxqfgcU6sLzAJttJv7LKdjWn0nxWCSbEAtxJ/YYaZMyoNLovG7lPqZRdhgL1gAUfa+V7tbin8y+2llC1cw==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

</head>

<body>
  <header>
    <nav id="main-navbar" class="navbar navbar-expand-lg">
      <a href="<?= $BASE_URL ?>" class="navbar-brand">
        <img src="<?= $BASE_URL ?>img/logo.svg" alt="MovieStar" class="logo">
        <span class="moviestar-title">MovieStar</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>
      <form action="" id="search-form" class="form-inline my-2 my-lg-0" method="GET">
        <input type="search" name="q" id="search" class="form-control mr-sm-2" placeholder="Buscar filmes" aria-label="Search">
        <button class="btn my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
      </form>
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav">
          <li class="nav-item">Teste1</li>
          <li class="nav-item">Teste2</li>
          <li class="nav-item">Teste3</li>
        </ul>
      </div>
    </nav>
  </header>