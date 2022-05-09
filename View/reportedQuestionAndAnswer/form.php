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
      <h1 class="animation a1">Report post</h1>
      <br>
    </div>
    <form action="" method="POST">
      <div class="mb-3">
        <label for="cause" class="form-label">Thank you for helping us maintain the platform rules.</label>
        <input type="text" class="form-control" name="cause" placeholder="help us to understand the probleme..." required="">
      </div>
      <input type="submit" class="btn btn-dark" value="Send report" name="submit">
      <input type="reset" class="btn btn-dark" value="Reset" name="submit">
    </form>
  </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/headerfooter/footer.php";?>