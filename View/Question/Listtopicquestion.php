<?php 
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/headerfooter/header.php";
if($_SESSION["user"]["admin"])
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/navbar/admin.php";
else
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/navbar/usernav.php";
?>


<style>
    body {
        color: #404E67;
        background: #F5F7FA;
		font-family: 'Open Sans', sans-serif;
    margin: 0px auto;
   
	}
  </style>


<h1>list of Questions</h1>

<table id="equipe_data" class="table table-striped table-bordered">
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
    foreach($topicquestions as $q) : ?>
        <tr>
          <th><?= $q["title"] ?></th>
          <td><?= $q["question"] ?></td>
          <td><?php echo $q["isresolved"] ? 'true' : 'false'; ?></td>
          <td><?= $q["date"] ?></td>
            <td> <a href="getQuestion.php?id=<?=$q["id"]?>">details</a>   </td>

        </tr>
        <?php endforeach;}   ?>

<!--    <script>-->
<!--        $(document).ready(function () {-->
<!--            $('#Cli').DataTable({-->
<!--                // "ajax": {-->
<!--                //     "url": "http://localhost:8080/questions",-->
<!--                //     "datatype": "json"-->
<!--                // },-->
<!--                data:data,-->
<!--                "columns": [-->
<!--                    { "data": "title" },-->
<!--                    { "data": "question" },-->
<!--                    { "data": "date" },-->
<!--                    { "data": "resolved" },-->
<!--                    {-->
<!--                        "data": "id", "render": function (data) {-->
<!--                            return "<a class='btn btn-default btn-sm' href='archive.php?id="+ data +"'><i class='fa fa-pencil'></i> Edit</a>";-->
<!--                        },-->
<!--                        "orderable": false,-->
<!--                        "searchable":false,-->
<!--                        "width":"150px"-->
<!--                    }-->
<!--                ]-->
<!--            });-->
<!--        });-->
<!--    </script>-->
    </tbody>
</table>
<script>  
 $(document).ready(function(){  
      $('#equipe_data').DataTable();  
 });  
 </script>

