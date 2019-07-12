<?php require_once('init.inc.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bibliotheque</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- css boostrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <a class="navbar-brand" href="<?= URL ?>accueil.php">Bibliotheque</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= URL ?>accueil.php">Acceuil <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= URL ?>abonne.php">Abonne</a>
      </li>
       
       <li class="nav-item">
        <a class="nav-link" href="<?= URL ?>emprunt.php">Emprunt</a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="<?= URL ?>livre.php">Livre</a>
      </li>


    </ul>
  </div>
</nav>

<div class="container">

