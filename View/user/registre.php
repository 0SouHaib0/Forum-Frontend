<?php 
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/headerfooter/header.php";
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/navbar/login.php";
?>

<div class="container">
  <div class="left-section">
    <div class="header">
      <h1 class="animation a1">Sign up</h1>
      <h4 class="animation a2">Join us</h4>
    </div>

    <form action="" method="POST">
<div class="mb-3">
    <label for="nom" class="form-label">Nom</label>
    <input type="text" class="form-control" name="nom" required="">
  </div>
  <div class="mb-3">
    <label for="prenom" class="form-label">Prenom</label>
    <input type="text" class="form-control" name="prenom" required="">
  </div>
  <div class="mb-3">
    <label for="Email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" required="">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required="">
  </div>
  <input type="submit" class="btn btn-dark" value="Register" name="submit">
</form>
  <?php
      if ($msg != null) {
        echo "<p>$msg</p>";
     }
  ?>
  </div>
  <div class="right-section"></div>
</div>




<?php
  
 
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/headerfooter/footer.php";
?>