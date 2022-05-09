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
<br><br>
<i class="bi bi-people-fill fa-7x"></i><h1>𝐋𝐢𝐬𝐭 𝐨𝐟 𝐮𝐬𝐞𝐫𝐬:</h1>
    <br><br>
    <table id="list" class="table table-striped table-bordered" >
  <thead>
    <tr>
      <th scope="col">Lastname</th>
      <th scope="col">Firstname</th>
      <th scope="col">Email</th>
      <th scope="col">Questions</th>
      <th scope="col">Block</th>
    </tr>
  </thead>
  <tbody>
      <?php
      if($users!=null){
      foreach ($users as $user) {
        if($user["id"]==$_SESSION["user"]["id"]){
          continue;
        }
      ?>
    <tr>
      <th><?=$user["nom"] ?></th>
      <td><?=$user["prenom"] ?></td>
      <td><?=$user["email"] ?></td>
      <td><a href="../Question/questionUser.php/?id=<?=$user["id"]?>" style="color:black">list of questions</a></td>
      <td><a href="bloque.php/?id=<?=$user["id"]?>"><i class="fa fa-ban" aria-hidden="true" style="color:red"></i></a></td>      
    </tr>
    <?php
      }}
    ?>
  </tbody>
</table>
<script>  
 $(document).ready(function(){  
      $('#list').DataTable();  
 });  
 </script>
<?php
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/headerfooter/footer.php";
?>