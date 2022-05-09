<?php 
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/headerfooter/header.php";
if($_SESSION["user"]["admin"])
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/navbar/admin.php";
else
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/navbar/usernav.php";
?>

<div class="container">
  <div class="left-section">
    <div class="header">
      <h1 class="animation a1">Update Password</h1>
    </div>
    <form action="" method="POST">
<div class="mb-3">
    <label for="password" class="form-label">Old Password</label>
    <input type="password" class="form-control" name="oldpassword" required="" >
  </div>
<div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" required="" >
  </div>
  <div class="mb-3">
    <label for="repassword" class="form-label">Re-password</label>
    <input type="password" class="form-control" name="repassword" required="" >
  </div>
  <input type="submit" class="btn btn-dark" value="update" name="submit">
</form>
<?php
    if ($msg != null) {
      ?>
      <p style="color:red;"><?=$msg?></p>
      <?php
       echo "<p>$msg</p>";
    }
?>
  </div>
</div>

<?php 
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/headerfooter/footer.php";
?>