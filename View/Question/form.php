<?php 
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/headerfooter/header.php";
if($_SESSION["user"]["admin"])
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/navbar/admin.php";
else
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/navbar/usernav.php";
?>

<style>
 article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
    display: block;
  }
  
  ol, ul {
    list-style: none;
    margin: 0px;
    padding: 0px;
  }
  
  blockquote, q {
    quotes: none;
  }
  
  blockquote:before, blockquote:after, q:before, q:after {
    content: '';
    content: none;
  }
  
  table {
    border-collapse: collapse;
    border-spacing: 0;
  }
  
  /*-- start editing from here --*/
  a {
    text-decoration: none;
  }
  
  .txt-rt {
    text-align: right;
  }
  
  /* text align right */
  .txt-lt {
    text-align: left;
  }
  
  /* text align left */
  .txt-center {
    text-align: center;
  }
  
  /* text align center */
  .float-rt {
    float: right;
  }
  
  /* float right */
  .float-lt {
    float: left;
  }
  
  /* float left */
  .clear {
    clear: both;
  }
  
  /* clear float */
  .pos-relative {
    position: relative;
  }
  
  /* Position Relative */
  .pos-absolute {
    position: absolute;
  }
  
  /* Position Absolute */
  .vertical-base {
    vertical-align: baseline;
  }
  
  /* vertical align baseline */
  .vertical-top {
    vertical-align: top;
  }
  
  /* vertical align top */
  nav.vertical ul li {
    display: block;
  }
  
  /* vertical menu */
  nav.horizontal ul li {
    display: inline-block;
  }
  
  /* horizontal menu */
  img {
    max-width: 100%;
  }
  
  /*-- end reset --*/
  body {
    background: #525252;
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to top, #525252, #525252);
    background: -moz-linear-gradient(to top, #525252, #525252);
    background: -o-linear-gradient(to top, #525252, #525252);
    background: linear-gradient(to top, #525252, #525252);
    background-size: cover;
    background-attachment: fixed;
    font-family: 'Roboto', sans-serif;
  }
  
  h2 {
    font-size: 3em;
    text-align: center;
    color: #fff;
    font-weight: 100;
    text-transform: capitalize;
    letter-spacing: 4px;
    font-family: 'Roboto', sans-serif;
  }
  
  /*-- main --*/
  .main-w3layouts {
    padding: 3em 0 1em;
  }
  
  .main-agileinfo {
    width: 35%;
    margin: 3em auto;
    background: rgba(0, 0, 0, 0.18);
    background-size: cover;
  }
  
  .agileits-top {
    padding: 3em;
  }
  
  textarea.input100 {
    min-height: 162px;
    color: white;
    padding-top: 19px;
    padding-bottom: 15px;
}
.input100 {
    display: block;
    width: 100%;
    background: transparent;
    font-family: Raleway-SemiBold;
    font-size: 18px;
    color: #333333;
    line-height: 1.2;
    padding: 0 25px;
}
textarea {
    outline: none;
    border: 200px;
    overflow: auto;
    resize: vertical;
}
  input[type="text"],select {
    font-size: 0.9em;
    color: #fff;
    font-weight: 100;
    width: 94.5%;
    display: block;
    border: none;
    padding: 0.8em;
    border: solid 1px rgba(255, 255, 255, 0.37);
    -webkit-transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
    transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
    background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #fff 4%);
    background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #fff 4%);
    background-position: -800px 0;
    background-size: 100%;
    background-repeat: no-repeat;
    color: #fff;
    font-family: 'Roboto', sans-serif;
  }
  option{
    color:black;
  }
  input.email, input.text.w3lpass {
    margin: 2em 0;
  }
  
  .text:focus, .text:valid {
    box-shadow: none;
    outline: none;
    background-position: 0 0;
  }
  
  .text:focus::-webkit-input-placeholder, .text:valid::-webkit-input-placeholder {
    color: rgba(255, 255, 255, 0.7);
    font-size: .9em;
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    transform: translateY(-30px);
    visibility: visible !important;
  }
  
  ::-webkit-input-placeholder {
    color: #fff;
    font-weight: 100;
  }
  
  :-moz-placeholder {
    /* Firefox 18- */
    color: #fff;
  }
  
  ::-moz-placeholder {
    /* Firefox 19+ */
    color: #fff;
  }
  
  :-ms-input-placeholder {
    color: #fff;
  }
  
  input[type="submit"] {
    font-size: .9em;
    color: #fff;
    background: #525252;
    outline: none;
    border: 1px solid white;
    cursor: pointer;
    padding: 0.9em;
    -webkit-appearance: none;
    width: 100%;
    margin: 2em 0;
    letter-spacing: 4px;
  }
  
  input[type="submit"]:hover {
    -webkit-transition: .5s all;
    -moz-transition: .5s all;
    -o-transition: .5s all;
    -ms-transition: .5s all;
    transition: .5s all;
    background: black;
  }
  
  .agileits-top p {
    font-size: 1em;
    color: #fff;
    text-align: center;
    letter-spacing: 1px;
    font-weight: 300;
  }
  
  .agileits-top p a {
    color: #fff;
    -webkit-transition: .5s all;
    -moz-transition: .5s all;
    transition: .5s all;
    font-weight: 400;
  }
  
  .agileits-top p a:hover {
    color: #525252;
  }
  
  

  /*-- responsive-design --*/
  @media(max-width:1440px) {
    input[type="text"] {
      width: 94%;
    }
  }
  
  @media(max-width:1366px) {
    h1 {
      font-size: 2.6em;
    }
  
    .agileits-top {
      padding: 2.5em;
    }
  
    .main-agileinfo {
      margin: 2em auto;
    }
  
    .main-agileinfo {
      width: 36%;
    }
  }
  
  @media(max-width:1280px) {
    .main-agileinfo {
      width: 40%;
    }
  }
  
  @media(max-width:1080px) {
    .main-agileinfo {
      width: 46%;
    }
  }
  
  @media(max-width:1024px) {
    .main-agileinfo {
      width: 49%;
    }
  }
  
  @media(max-width:991px) {
    h1 {
      font-size: 2.4em;
    }
  
    .main-w3layouts {
      padding: 2em 0 1em;
    }
  }
  
  @media(max-width:900px) {
    .main-agileinfo {
      width: 58%;
    }
  
    input[type="text"] {
      width: 93%;
    }
  }
  
  @media(max-width:800px) {
    h1 {
      font-size: 2.2em;
    }
  }
  
  @media(max-width:736px) {
    .main-agileinfo {
      width: 62%;
    }
  }
  
  @media(max-width:667px) {
    .main-agileinfo {
      width: 67%;
    }
  }
  
  @media(max-width:600px) {
    .agileits-top {
      padding: 2.2em;
    }
  
    input.email, input.text.w3lpass {
      margin: 1.5em 0;
    }
  
    input[type="submit"] {
      margin: 2em 0;
    }
  
    h1 {
      font-size: 2em;
      letter-spacing: 3px;
    }
  }
  
  @media(max-width:568px) {
    .main-agileinfo {
      width: 75%;
    }
  
    .colorlibcopy-agile p {
      padding: 0 2em;
    }
  }
  
  @media(max-width:480px) {
    h1 {
      font-size: 1.8em;
      letter-spacing: 3px;
    }
  
    .agileits-top {
      padding: 1.8em;
    }
  
    input[type="text"] {
      width: 91%;
    }
  
    .agileits-top p {
      font-size: 0.9em;
    }
  }
  
  @media(max-width:414px) {
    h1 {
      font-size: 1.8em;
      letter-spacing: 2px;
    }
  
    .main-agileinfo {
      width: 85%;
      margin: 1.5em auto;
    }
  
    .text:focus, .text:valid {
      background-position: 0 0px;
    }
  
    .wthree-text ul li, .wthree-text ul li:nth-child(2) {
      display: block;
      float: none;
    }
  
    .wthree-text ul li:nth-child(2) {
      margin-top: 1.5em;
    }
  
    input[type="submit"] {
      margin: 2em 0 1.5em;
      letter-spacing: 3px;
    }
  
    input[type="submit"] {
      margin: 2em 0 1.5em;
    }
  
   
  
  @media(max-width:384px) {
    .main-agileinfo {
      width: 88%;
    }
  
  
  @media(max-width:375px) {
    .agileits-top p {
      letter-spacing: 0px;
    }
  }
  
  @media(max-width:320px) {
    .main-w3layouts {
      padding: 1.5em 0 0;
    }
  
    .agileits-top {
      padding: 1.2em;
    }
  

  
    input[type="text"]{
      width: 89.5%;
      font-size: 0.85em;
    }
  
    h1 {
      font-size: 1.7em;
      letter-spacing: 0px;
    }
  
    .main-agileinfo {
      width: 92%;
      margin: 1em auto;
    }
  
    .text:focus, .text:valid {
      background-position: 0 0px;
    }
  
    input[type="submit"] {
      margin: 1.5em 0;
      padding: 0.8em;
      font-size: .85em;
    }
  
  
    .main-w3layouts {
      padding: 1em 0 0;
    }
  </style>    
    <title>Document</title>
</head>
<form action="" method="post">
<div class="main-w3layouts wrapper">
<h2>Ajouter une nouvelle question </h2>
<div class="main-agileinfo">
  <div class="agileits-top">
    
  <input class="text" type="text" name="title" placeholder="Titre de votre question..." required=""><br>

  <textarea id="message" class="input100" name="question" placeholder="Ecrire votre question..." required=""></textarea>
    <br><br>
    
    <select name="topic" class="text" required="">
    <option>Choisir un topic</option>
    <?php foreach($topics as $topic) : ?>
            <option value="<?= $topic['id'] ?>"><?= $topic["topic"] ?></option>
        <?php endforeach; ?>
    </select>

    <input type="submit" value="Ajouter">
</form>
</body>
</html>
