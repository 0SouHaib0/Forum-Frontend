<?php 
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/headerfooter/header.php";
if($_SESSION["user"]["admin"])
    include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/navbar/admin.php";
else
    include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/navbar/usernav.php";
?>
<body style = "text-align:center">
<div style = "color:red;">
    <?= /** @var TYPE_NAME $msg */
    $msg ?>
</div><hr>
<?php if ($msg == '') : ?>
<div class="container d-flex justify-content-center">
    <div id="my-modal"  tabindex="-1" role="dialog">
        <div  role="document">
            <div>   
                <div class="modal-body p-0">
                    <div class="card border-0 p-sm-3 p-2 justify-content-center">
                        <p class="font-weight-bold mb-2"> Are you sure you wanna set this question as resolved ?</p><p class="text-muted "> After confirming you can not undo changes.</p>     </div>
                        <div class="card-body px-sm-4 mb-2 pt-1 pb-0"> 
                            <form action="" method="post">
                            <div class="row justify-content-end no-gutters"><div class="col-auto"><button type="submit" name="non" class="btn btn-light text-muted" data-dismiss="modal">Cancel</button></div><div class="col-auto"><button type="submit" name="oui" class="btn btn-danger px-4" data-dismiss="modal">Confirm</button></div></div>
                            </form>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/headerfooter/footer.php"; ?>
