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
    <div>Vous etes sur de supprimmer la question <?php
        $title ?> ?!</div>
    <form action="" method="post">
        <input type="submit" name="oui" value="Oui">
        <input type="submit" name="non" value="Non">
    </form>
<?php endif; ?>
</body>
</html>