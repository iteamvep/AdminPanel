<?php
session_start();
ob_start();

if (!isset($_SESSION['logged'])) {
    header('Location: index.php');
}

$user = $_SESSION['user'];
?>

    <title> Admin Panel - Level Error </title>

    <link href="dist/css/bootstrap.css" rel="stylesheet">
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
          <h1 style = "margin-top: 70px">Unauthorised</h1>
		  <p class="page-header">You do not have permission to view this.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src = "../../assets/js/vendor/jquery.min.js" > <\/script > ')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line!-- >
    <script src = "../../assets/js/vendor/holder.min.js" > </script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
