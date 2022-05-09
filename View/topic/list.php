
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
<br>
<i class="bi bi-journals fa-7x"></i><h1>𝐋𝐢𝐬𝐭 𝐨𝐟 𝐓𝐨𝐩𝐢𝐜𝐬:</h1>
    <a href="http://localhost/forum/Controller/topic/add.php" style="color:black">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button type="button" class="btn btn-dark"><i class="bi bi-plus-square" style="color:white"></i> Add Topic</button>   
        </div>
</a>
      <br>
    <table class="table table-striped table-bordered" id="list">
  <thead>
    <tr>
      <th scope="col">topic</th>
      <th scope="col">subtopic</th>
      <th scope="col">list of questions</th>
      <th>&nbsp;</th>
    </tr>
  </thead>
  <tbody>
      <?php
    if($topics!=null){
      foreach ($topics as $tp) {
        
      ?>
    <tr>
      <th><?= $tp["topic"] ?></th>
      <?php 
      if(empty($tp["sub_topic_id"]))
        {
        ?>
        <th>there's no sub topic for this topic</th>
        <?php
        }else{          
     ?>
      <th><?php foreach($tp["sub_topic_id"] as $st) echo $topic->getTopic($st)["topic"]." "; ?> </th>
      <?php }
  
      
  ?>
      
    
    <th><a href="../Question/questiontopic.php/?id=<?=$tp["id"]?>" style="color:black" >list of questions</a>   </th>
    <td><a href="delete.php/?id=<?=$tp["id"]?>"><i class="bi bi-trash-fill" style="color:black"></i></a>   </td>
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