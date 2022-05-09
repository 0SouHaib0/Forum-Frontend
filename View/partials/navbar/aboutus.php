<!---------------------------------------->
<?php 
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/headerfooter/header.php";
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/navbar/test2.php";
?>

<div class="container">
  <div class="left-section">
    <div class="header">
      <h1>About us:</h1>
      <p>Empowering the world to develop techonology through collective knowledge.</p>
      <p> Our public platform serves 10000 people every month, making it one of the most popular websites in the world.</p>
    </div>
    
  </div>
  <div class="right-section"></div>
</div>
  
</body>
</html>

<!---------------------------------------->
<style>
/* Navbar container */
.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Verdana;
  height: 80px;
  width: 100%; 
}

img {
  height:90px;
  width: 90px;
  float: left;
  margin-left: 3px;
  margin-top: -7px;
  position: relative;
}
/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 30px 17px;
  text-decoration: none;
}

/* The dropdown container */
.dropdown {
  float: right;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: grey;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
</style>

<?php 
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/headerfooter/footer.php";
?>