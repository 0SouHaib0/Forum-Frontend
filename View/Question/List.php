

<style>

 table{
    font-size: 14px;
  }
  table.table td a.delete {
        color: black;
    }
    table.table td a.view {
        color: black;
    }
  </style>

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
<i class="bi bi-question-lg fa-7x"></i><h1>list of Questions</h1>
<br>
<div class="container" style=" display: block;margin-left: auto;margin-right: auto ">
<a href="http://localhost/forum/Controller/Question/addQuestion.php" >
        <div class="d-grid gap-2 d-md-flex justify-content-md-end" >
          <button type="button" class="btn btn-dark "><i class="bi bi-plus-square" style="color:white;"></i> Add a new question</button>   
        </div>
</a>
<br>

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
    
    if($questions!=null){
    foreach($questions as $q) : ?>
        <tr>
          <th><?= $q["title"] ?></th>
          <td><?= $q["question"] ?></td>
          <td><?php echo $q["isresolved"] ? 'true' : 'false'; ?></td>
          <td><?= $q["date"] ?></td>
            <td> <a href="getQuestion.php?id=<?=$q["id"]?>" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
            <a href="archive.php?id=<?=$q["id"]?>" class="delete" title="Archive" data-toggle="tooltip"><i style="font-size:20px" class="fa">&#xf0ab;</i></a>  </td>

        </tr>
        <?php endforeach;}   ?>
    </tbody>
</table>
    </div>
<script>  
 $(document).ready(function(){  
      $('#list').DataTable();  
 });  
 </script>