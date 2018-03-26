<?php require_once 'connection.php'; ?>
<?php require_once 'functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $title ?></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <a href="index.php" class="navbar-brand">Halooo Oglasi</a>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="">Login</a></li>
        <li><a href="">Register</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
        <h2 class="page-header"><?php echo $header ?></h2>
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1">
