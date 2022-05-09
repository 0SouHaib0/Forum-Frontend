
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
	}
    a{
        font-size:16px;
    }
	.table-wrapper {
		width: 900px;
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
</style>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Archived <b>Questions</b></h2></div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Question</th>
                        <th>Resolved</th>
                        <th>date</th>
                        <th>action</th>
                    </tr>
                </thead>

    <tbody>
    <?php  
    
    if($questions!=null){
    foreach($questions as $q) : ?>
        <tr>
          <th><?= $q["title"] ?></th>
          <td class="text-truncate"><?= $q["question"] ?></td>
          <td><?php echo $q["isresolved"] ? 'true' : 'false'; ?></td>
          <td><?= $q["date"] ?></td>
            <td><a href="getQuestion.php?id=<?=$q["id"]?>" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
            <a href="delete.php?id=<?=$q["id"]?>" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>  </td>

        </tr>
    <?php endforeach ;} ?>

    </tbody>
</table>


