
<?php 
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/headerfooter/header.php";
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/navbar/admin.php";
?>
<h1>questions of <?= $topics["topic"]?>
</h1>
<table id="list" class="table table-striped table-bordered">
    <thead>
    <tr>
        <th scope="col">Title</th>
        <th scope="col">Question </th>
        <th scope="col">Resolved?</th>
        <th scope="col">date</th>
        
        <th>&nbsp;</th>
    </tr>
    </thead>
    <tbody>

    <?php 
    
    if($questions==null){echo "no questions yet" ; }
    else{ 
    foreach($questions as $q) : ?>
        <tr>
          <th><?= $q["title"] ?></th>
          <td><?= $q["question"] ?></td>
          <td><?php echo $q["isresolved"] ? 'true' : 'false'; ?></td>
          <td><?= $q["date"] ?></td>
            
        </tr>
        <?php endforeach ; }  ?>



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

