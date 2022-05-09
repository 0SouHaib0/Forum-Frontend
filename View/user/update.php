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
      <h1 class="animation a1">Update</h1>
    </div>
    <form action="" method="POST">
<div class="mb-3">
    <label for="nom" class="form-label">Nom</label>
    <input type="text" class="form-control" name="nom" required=""  value="<?=$user["nom"]?>">
  </div>
  <div class="mb-3">
    <label for="prenom" class="form-label">Prenom</label>
    <input type="text" class="form-control" name="prenom" required="" value="<?=$user["prenom"]?>" >
  </div>
  <div class="mb-3">
    <label for="Email" class="form-label">Email</label>
    <input type="email"  class="form-control" name="email" required="" value="<?=$user["email"]?>">
  </div>
  <input type="submit" class="btn btn-dark" value="update" name="submit">
</form>

  </div>
</div>



<?php
    if ($msg != null) {
      ?>
      <p style="color:red;"><?=$msg?></p>
      <?php
       echo "<p>$msg</p>";
    }
 
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/headerfooter/footer.php";
?>