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
<br>
    <h1>list of users blocked</h1>
    
    <table id="list" class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">email</th>
      <th scope="col">unblock</th>
    </tr>
  </thead>
  <tbody>
      <?php
      if($users!=null){
      foreach ($users as $user) {
      ?>
    <tr>
      <th><?= $user["nom"] ?></th>
      <td><?= $user["prenom"] ?></td>
      <td><?= $user["email"] ?></td>
      <td> <a href="debloquer.php/?id=<?=$user["id"]?>">unblock</a></td>
    </tr>
    <?php
      }
      }
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