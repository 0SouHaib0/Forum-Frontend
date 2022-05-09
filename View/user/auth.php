<?php 
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/headerfooter/header.php";
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/navbar/login.php";
?>



<div class="container">
  <div class="left-section">
    <div class="header">
      <h1 class="animation a1">Login</h1>
      <h4 class="animation a2">Log in for entering your membership dashboard.</h4>
    </div>
    <form action="../../Controller/user/auth.php" method="POST">
      <div class="mb-3">
        <label for="Email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" required="">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" required="">
      </div>
        <input type="submit" class="btn btn-dark" value="login" name="submit">
        <br>
        <a href="http://localhost/forum/Controller/user/registre.php" style="color:black">Sign up</a>
        <?php
    if ($msg != null) {
      ?>
      <p style="color:red;"><?=$msg?></p>
      <?php
       
    }
        ?>
    </form>
  </div>
  <div class="right-section"></div>
</div>

<?php 


include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/headerfooter/footer.php";
?>