<?php 
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/headerfooter/header.php";
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/navbar/admin.php";
?>
<style>
    body {
        color: #404E67;
        background: #F5F7FA;
		font-family: 'Open Sans', sans-serif;
    margin: 0px auto;
   
	}
  </style>
    
    <div class="container">
  <div class="left-section">
    <div class="header">
      <h1 class="animation a1">Add Topic:</h1>
    </div>
    <br>
<form action="" method="POST">
<div class="mb-3">
    <label for="topic" class="form-label">topic</label>
    <input type="text" class="form-control" name="topic" required="">
</div>
<select name="sub" class="form-select" aria-label="Default select example">
<option value="null">none</option>
 <?php foreach ($topics as $tp)
{ ?>
  <option value="<?= $tp["id"]?>"><?= $tp["topic"]?></option>
<?php
}
  ?>
</select>
  <br><br>
  <input type="submit" class="btn btn-dark" value="Add" name="submit">
  
</form>
<a href="http://localhost/forum/Controller/topic/listTopic.php" style="color:black">
  <input type="submit" class="btn btn-dark" value="Back to previous page">
  </a>
</div>
</div>
<?php 
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/headerfooter/footer.php";
?>