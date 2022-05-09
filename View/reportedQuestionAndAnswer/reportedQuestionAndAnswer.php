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
	.table-wrapper {
		width: 1000px;
		margin: 30px auto;
        background: #fff;
        padding: 20px;	
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 6px 0 0;
        font-size: 22px;
    }
    .table-title .add-new {
        float: right;
		height: 30px;
		font-weight: bold;
		font-size: 12px;
		text-shadow: none;
		min-width: 100px;
		border-radius: 50px;
		line-height: 13px;
    }
	.table-title .add-new i {
		margin-right: 4px;
	}
    table.table {
        table-layout: fixed;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table th:last-child {
        width: 100px;
    }
    table.table td a {
		cursor: pointer;
        display: inline-block;
        margin: 0 5px;
		min-width: 24px;
    }    
	table.table td a.add {
        color: black;
    }
    table.table td a.edit {
        color: orange;
    }
    table.table td a.delete {
        color: black;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table td a.add i {
        font-size: 24px;
    	margin-right: -1px;
        position: relative;
        top: 3px;
    }    
    table.table .form-control {
        height: 32px;
        line-height: 32px;
        box-shadow: none;
        border-radius: 2px;
    }
	table.table .form-control.error {
		border-color: #f50000;
	}
	table.table td .add {
		display: none;
	}
    .dec{
        display:inline-block;
    padding-left:30px;
}
</style>


<i class="bi bi-bell-fill fa-7x dec" style="color:black; "></i><b><h1 class="dec" style="margin-left:20px; color:black;">Notification</h1></b>
  <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Questions/Answers</th>
                        <th>Cause</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>

      <?php
      if($repQ!=null){
        foreach ($repQ as $r) {  
      ?>
        <tr>
          <td><?= $r["nom"] ?></td>
          <td class="text-truncate"><?= $r["title"] ?></td>
          <td><?= $r["cause"] ?></td>
          <td><a href="../RepQuestion/ignore.php?id=<?= $r['id'] ?>"> ignorer</a></td>
          <td><a href="../RepQuestion/delete.php?id=<?= $r['id'] ?>"><i class="material-icons">&#xE872;</i></a></td>
          <td><a href="../Question/getQuestion.php?id=<?= $r['questionId'] ?>"><i class="material-icons">&#xE417;</i></a></td>
        </tr>
      <?php
        }
      }

      if($repA!=null){
        foreach ($repA as $a) {
      ?>
        <tr>
          <td><?= $a["nom"] ?></td>
          <td class="text-truncate"><?= $a["answer"] ?> / Answered Question : <?= $a["answeredQuestion"] ?></td>
          <td><?= $a["cause"] ?></td>
          <td><a href="../RepAnswer/ignore.php?id=<?= $a['id'] ?>"> ingore</a></td>
          <td><a href="../RepAnswer/delete.php?id=<?= $a['id'] ?>"><i class="material-icons">&#xE872;</i></a></td>
          <td><a href="../Question/getQuestion.php?id=<?= $a['questionId'] ?>"><i class="material-icons">&#xE417;</i></a></td>
        </tr>
      <?php
        }
      }
      ?>
  </tbody>
</table>

<?php
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/headerfooter/footer.php";
?>