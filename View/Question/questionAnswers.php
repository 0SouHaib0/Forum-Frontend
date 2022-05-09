<?php 
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/headerfooter/header.php";
if($_SESSION==null){
  include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/navbar/test2.php";}
  if($_SESSION != null){
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/headerfooter/header.php";
if($_SESSION["user"]["admin"])
    include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/navbar/admin.php";
else
    include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/navbar/usernav.php";
  }
?>

<style>
    body {
        background-color: #eee; 
    }
    
    .bdge {
        height: 21px;
        background-color: orange;
        color: #fff;
        font-size: 11px;
        padding: 8px;
        border-radius: 4px;
        line-height: 3px;
    }
    
    .comments {
        text-decoration: underline;
        text-underline-position: under;
        cursor: pointer;
        }
    
    .dot {
        height: 7px;
        width: 7px;
        margin-top: 3px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
    }
    
    .hit-voting:hover {
        color: blue;
    }
    
    .hit-voting {
        cursor: pointer;
    }
</style>

<div class="container mt-5 mb-5">
        <div class="d-flex justify-content-center row">
            <div class="d-flex flex-column col-md-815">
                <div class="d-flex flex-row align-items-center text-left comment-top p-2 bg-white border-bottom px-4">
                    <div class="d-flex flex-column-reverse flex-grow-0 align-items-center votings ml-1"><i class="fa fa-sort-up fa-2x hit-voting"></i><i class="fa fa-sort-down fa-2x hit-voting"></i></div>
                    <div class="d-flex flex-column ml-3">
                        <div class="d-flex flex-row post-title">
                            <h3 style="font-size: 40px;"><?= $qst["title"] ?></h3><span class="ml-2">(<?= $usr["nom"] . " " . $usr["prenom"] ?>)</span></div>
                            <h5><?= $qst["question"] ?>
                            <div class="d-flex flex-row align-items-center align-content-center post-title"><span class="mr-2 comments"><?php if($answers!=null){ echo sizeof($answers); }else{ echo 0;}?> comments&nbsp;</span><span class="mr-2 dot"></span><span><?= substr($qst["date"],0,10) . "/" . substr($qst["date"],11,5) ?></span>
                           <?php
                           //var_dump($usr);
                           if(isset($_SESSION["user"]) && $_SESSION["user"]["id"]==$usr["id"])
                           {
                           ?>
                            <h6 class="ml-2 mt-1">&nbsp;<a href="setAsResolved.php?id=<?= $qst['id'] ?>">Resolved<i class="bi bi-check-square-fill"></i></a></h6>
                            <h6 class="ml-2 mt-1">&nbsp;</h6>
                            <?php
                          }
                           ?>
                            <h6 class="ml-2 mt-1">&nbsp;<a href="../RepQuestion/add.php?questionId=<?= $qst['id'] ?>">Report<i class="bi bi-flag-fill"></i></a></h6>
                        </div>
                    </div>
                </div>
                <?php if(!$qst["isresolved"]): ?>
                <div class="coment-bottom bg-white p-2 px-4">
                    <form action="getQuestion.php?id=<?=$qst['id']?>" method="post">
                    <div class="d-flex flex-row add-comment-section mt-4 mb-4"><input type="text" name="answer" class="form-control mr-3" placeholder="Add comment" required><button class="btn btn-primary" type="submit">Comment</button></div>
                    </form>
                    <?php else: ?>
                <h6 class="ml-2 mt-1" style="color:green;">This question is already resolved!</h6>
            <?php endif; ?>
                    <?php if($answers!=null){foreach ($answers as $a): $user1 = new User();$usr1=$user1->getUser($a["userId"]);?>
                    <div
                        class="commented-section mt-2">
                        <div class="d-flex flex-row align-items-center commented-user">
                            <h5 class="mr-2"><?= $usr1["nom"] . " " . $usr1["prenom"] ?></h5><span class="dot mb-1"></span><span class="mb-1 ml-2"><?= substr($a["date"],0,10) . "/" . substr($a["date"],11,5) ?></span></div>
                        <div class="comment-text-sm"><span><?= $a["answer"] ?></span></div>
                        <div
                            class="reply-section">
                            <div class="d-flex flex-row align-items-center voting-icons"><i class="fa fa-sort-up fa-2x mt-3 hit-voting"></i><i class="fa fa-sort-down fa-2x mb-3 hit-voting"></i><span class="dot ml-2"></span>
                                <h6 class="ml-2 mt-1"><a href="../RepAnswer/add.php?answerId=<?= $a['id'] ?>">Report<i class="bi bi-flag-fill"></i></a></a></h6>
                            </div>
                            <?php endforeach;} ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

<?php include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/headerfooter/footer.php";?>