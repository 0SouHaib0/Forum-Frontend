
<?php 
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/headerfooter/header.php";
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/navbar/usernav.php";
?>
<h1>My questions</h1>
<table id="data" class="table">
    <thead>
    <tr>
        <th scope="col">Title</th>
        <th scope="col">Question </th>
        <th scope="col">Resolved?</th>
        <th scope="col">date</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>

    <?php 
    
    if($questions!=null)
    {
    foreach($questions as $q) {
        if(!$q["isarchived"]) : ?>
        <tr>
          <th><?= $q["title"] ?></th>
          <td><?= $q["question"] ?></td>
          <td><?php echo $q["isresolved"] ? 'true' : 'false'; ?></td>
          <td><?= $q["date"] ?></td>
            <td> <a href="archive.php?id=<?=$q["id"]?>"><i style="font-size:20px" class="fa">&#xf0ab;</i></a>   </td>

        </tr>
        <?php endif ; } }  ?>



    </tbody>
</table>
<script>  
 $(document).ready(function(){  
      $('#data').DataTable();  
 });  
 </script>
 <?php
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/headerfooter/footer.php";
?>

