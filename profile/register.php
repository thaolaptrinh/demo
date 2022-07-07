<?php require('../config/head.php');
if (isset($_SESSION['username'])) {
  header('Location: /home');
  exit;
} ?>








<?php require('../config/end.php'); ?>