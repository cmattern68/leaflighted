<?php
    require_once("functions/functions.func.php");
    if (isset($_GET['lang']))
        setLangCookie($_GET['lang']);
    if (isset($_GET['mode']))
        setModeCookie($_GET['mode']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Leaflighted</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/logo.png" type="image/png" />
    <link rel="apple-touch-icon" href="assets/logo.png"/>
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="scripts/scroll.js"></script>
</head>
<body>
    <!-- Page Content -->
    <?php include("pages/header.php"); ?>
    <?php include("pages/games.php"); ?>
    <?php include("pages/staff.php"); ?>
    <?php include("pages/footer.php"); ?>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
</body>
</html>
