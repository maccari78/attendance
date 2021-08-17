<?php
  // This includes the session file. This file contains code that start/resumes a session
  // by having it in the hearder file it will be included on every page allowing session capability to be used on every page across the website
  include_once 'includes/session.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/site.css" />

    <title>Attendance - <?php echo $title ?></title>
  </head>
  <body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">IT Conference</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav me-auto">
          <a class="nav-link active" aria-current="page" href="index.php">Home <span class="sr-only"></span></a>
          <a class="nav-link" href="viewrecords.php">View attendees</a>
        </div>
        <div class="navbar-nav ms-auto">
          <?php 
            if(!isset($_SESSION['userid'])) {
          ?>
            <a class="nav-item nav-link" aria-current="page" href="login.php">Login <span class="sr-only"></span></a>
          <?php } else { ?>
            <a class="nav-item nav-link" aria-current="page">Hello <?php echo $_SESSION['username']; ?>!<span class="sr-only"></span></a>
            <a class="nav-item nav-link" aria-current="page" href="logout.php">Logout <span class="sr-only"></span></a>
          <?php } ?>
        </div>
      </div>
    </div>
  </nav>
  <br/>