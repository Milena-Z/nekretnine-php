<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realestater</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/flatly/bootstrap.min.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/jumbotron-narrow/">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
    <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Početna</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create.php">Kreiraj oglas</a>
            </li>
          </ul>
        </nav>
        <h3 class="text-muted"><?php echo SITE_TITLE; ?></h3>
      </div>
      <?php displayMessage();?>