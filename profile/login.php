<?php require('../config/head.php');
if (isset($_SESSION['username'])) {
  header('Location: /home');
  exit;
} ?>


<div id="preloader">
  <div id="loader"></div>
</div>

<div class="wrapper">

  <div class="login">



    <div class="login-img">
      <div style="display: flex; align-items: center; justify-content: center;">
        <img src="../assets/images/girl-with-laptop-light.png" alt="" width="700">
      </div>
    </div>

    <div class="login-form">1</div>


  </div>


</div>






<?php require('../config/end.php'); ?>