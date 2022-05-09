
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
<h1>questions of <?= $user["nom"]." ".$user["prenom"] ?>
</h1>
<table id="da">
    <thead>
    <tr>
        <th scope="col">Title</th>
        <th scope="col">Question </th>
        <th scope="col">Resolved?</th>
        <th scope="col">date</th>
        <th scope="col">Action</th>
        <th>&nbsp;</th>
    </tr>
    </thead>
    <tbody>

    <?php 
    
    if($questions!=null){ 
    foreach($questions as $q) : ?>
        <tr>
          <th><?= $q["title"] ?></th>
          <td><?= $q["question"] ?></td>
          <td><?php echo $q["isresolved"] ? 'true' : 'false'; ?></td>
          <td><?= $q["date"] ?></td>
          <td> <a href="getQuestion.php?id=<?=$q["id"]?>" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
          <a href="../archive.php?id=<?=$q["id"]?>" class="trash" title="Archive" data-toggle="tooltip"><i style="font-size:20px" class="fa">&#xf0ab;</i></a></td>

        </tr>
        <?php endforeach ; }  ?>



    </tbody>
</table>
<script>  
 $(document).ready(function(){  
      $('#da').DataTable();  
 });  
 </script>
 <?php
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/headerfooter/footer.php";
?>

