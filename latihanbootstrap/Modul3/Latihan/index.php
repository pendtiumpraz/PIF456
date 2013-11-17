<html>
<head>
<title>Set Session</title>
 <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="../../css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
  <link href="../../css/docs.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="../../js/jquery.js" ></script>
  <script type="text/javascript" src="../../js/bootstrap.min.js" ></script>
  <script type="text/javascript" src="../../js/bootstrap-tooltip.js"></script>
  <script type="text/javascript" src="../../js/bootstrap-dropdown.js"></script>
  <style type="text/css">
.form-signin {
        max-width: 320px;
        padding: 20px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>

<head>

<body>

<?php
ini_set('display errors', 1);
define('VALID', 1);

//include file eksternal
require_once('./auth.php');

init_login();
validate();
?>
<h3>Simulasi Halaman Admin</h3>

<p>
<a href="?m=logout">Logout</a>

<p>
Menu-menu admin ada di sini
</body>
</html>