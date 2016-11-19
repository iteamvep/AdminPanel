<?php
session_start();
ob_start();

if (!isset($_SESSION['logged'])) {
    header('Location: index.php');
}
$user = $_SESSION['user'];
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Admin Panel - Help</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="styles/dashboard.css" rel="stylesheet">
    <script>if (typeof module === 'object') {window.module = module; module = undefined;}</script>
    <!-- normal script imports etc  -->
    <script src="scripts/jquery-1.12.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="scripts/jquery.backstretch.js"></script>
    <!-- Insert this line after script imports -->
    <script>if (window.module) module = window.module;</script>
  </head>

  <body>

<?php

include 'header/header.php';

?>


<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 style = "margin-top: 70px">Panel Help</h1>
    <p class="page-header">Help for the panel.</p>

<div class='panel panel-info'>
    <div class='panel-heading'>
        <h3 class='panel-title'>Players</h3>
    </div>
    <div class='panel-body'>
        <p>The players tab has a filter bar, exactly the same as a search bar, this allows you to seach for a players name or UID.</p>
    </div>
</div>

<div class='panel panel-info'>
    <div class='panel-heading'>
        <h3 class='panel-title'>Ban Menu</h3>
    </div>
    <div class='panel-body'>
        <p>Ban menu, this allows you to ban players who are in/out of game, with a reason and a time. The time is scaled in minutes, 60 = 1 hour. Note - When a player is banned they will remain in the server so please kick them straight after!</p>
    </div>
</div>

<div class='panel panel-info'>
    <div class='panel-heading'>
        <h3 class='panel-title'>Kick Menu</h3>
    </div>
        <div class='panel-body'>
        <p>Kick player, this has two options, RCON kick and Server kick. Server kick comes up with every single player who is in your database and all you need to do it hit kick, obviously they have to be on the server for it to kick them.</p>
        <p>RCON kick is a little more complicated however it does have the ability to give a reason for your kick. To kick someone you need the Battleye id for the player, this is found by clicking the battleye list button. This is the number you need to use to kick people from your server - Not their UID or thier GUID.</p>
    </div>
</div>

<div class='panel panel-info'>
    <div class='panel-heading'>
        <h3 class='panel-title'>Log Menu</h3>
    </div>
    <div class='panel-body'>
        <p>The logs tab shows you exactly which admin has done what at the exact time. Note - The timing will depend on where your database is situated!</p>
    </div>
</div>

<div class='panel panel-info'>
    <div class='panel-heading'>
        <h3 class='panel-title'>Thanks!</h3>
    </div>
    <div class='panel-body'>
        <p>The rest of the panel should hopefully be pretty self exploratory, however if you need any help then let me know! jasonhall96686@yahoo.com</p>
    </div>
</div>


          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
