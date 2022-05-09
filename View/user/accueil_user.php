<?php 
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/headerfooter/header.php";
if($_SESSION==null){
  include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/navbar/test2.php";}
  else{
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/navbar/usernav.php";
  }?>
<style>
        #circle {
            
        display: inline-block;
        line-height:100px;
        text-align:center;
      width: 250px;
      height: 200px;
      -webkit-border-radius: 100px;
      -moz-border-radius: 100px;
      border-radius: 100px;
      background: black;
      color: white;
      justify-content: center;
      
      font-size: 37px;
      
     
      width:60%;
      padding:10%;
      margin:10%
    }
    #pp{
        display:block;
       
        margin-left: 150px;
        margin-top: 50px;
    }
    #c{
       
  margin-top: 180px;
  margin-bottom: 100px;
  margin-right: 150px;
  margin-left: 180px;
        
    }
    #vp{ background-color:black;
            color: white;
            border:#000000;
          outline: none; }
   
</style>


<style>
    body {
        color: #404E67;
        background: #F5F7FA;
		font-family: 'Open Sans', sans-serif;
    margin: 0px auto;
   
	}

  .column {
            float: left;
            width: 33.33%;
            padding: 5px;
        }

        /* Clear floats after image containers */
        .row::after {
            content: "";
            clear: both;
            display: table;

        }
        .row {
            display: flex;
        }

        .column {
            flex: 33.33%;
            padding: 5px;
        }

  </style>


<div id="pp">
    <table>
        <tr>
            <td>
<label for="data" style="padding-right: 50px;"><h5>Topics: </h5></label>
</td>
<td>
<select name="data" id="data" >
    <option value=""><?=$t?></option>
    <option value="All">All</option>
    <?php foreach($topics as $tp){
        if($tp["topic"]!=$t) : ?>
        <option value="<?=$tp['id'] ?>"><?= $tp["topic"] ?></option>
        <?php endif; }  ?>
</select>
        </td>
        <td style="padding-left: 550px;">
<form action="../Question/getQuestion.php" method="post">
   <input list="datalist" name="title" placeholder="Saisir la question" required="">
    <datalist id="datalist">
       <?php
       if($questions!=null){
       
       foreach($questions as $q) {
         if(!$q["isarchived"]) : ?>
        <option value="<?=$q['title'] ?>" />
        <?php endif ; } } ?>
       </datalist>
    <input id="vp" type="submit" value="chercher"> 

   </form>
       </td>
       </tr>
       </table>
       </div>
       <div id="c">
       <div class="row">
<?php
if($topics!=null){
$cpt=0;
   foreach ($topics as $tp) {
     if($cpt<3) : ?>
     <div class="column">
      <div style="" id="circle"><?= $tp["topic"] ?></div>
      
        
        </div>
     
<?php endif; 
$cpt=$cpt+1; } }  ?>
</div>
   </div>
   <script>
       document.getElementById('data').addEventListener('change', function() {
  console.log('You selected: ', this.value);
  var url="accueil.php?id=" + this.value;
  console.log(url);
  window.location.replace(url);
});
</script>
   