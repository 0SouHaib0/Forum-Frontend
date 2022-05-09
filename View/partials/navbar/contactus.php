
<!---------------------------------------->
<?php 
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/headerfooter/header.php";
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/navbar/test2.php";
?>
<div class="container">
  <div class="left-section">
    <div class="header">
    <h2>Contact us:</h2><br><br>
      

        <!-- Add font awesome icons -->
        <!-- Google -->
            <a class="btn btn-primary" style="background-color: #dd4b39;" href="#!" role="button"
              ><i class="fab fa-google"></i>
            </a>

              <!-- Instagram -->
              <a class="btn btn-primary" style="background-color: #ac2bac;" href="#!" role="button"
                ><i class="fab fa-instagram"></i>
              </a>

              <!-- Linkedin -->
              <a class="btn btn-primary" style="background-color: #0082ca;" href="#!" role="button"
                ><i class="fab fa-linkedin-in"></i>
              </a>
                <!-- FACEBOOK -->
                  <a class="btn btn-primary" style="background-color: #3b5998;" href="#!" role="button"
                  ><i class="fab fa-facebook-f"></i>
                </a>

                <!-- Youtube -->
                <a class="btn btn-primary" style="background-color: #ed302f;" href="#!" role="button"
                  ><i class="fab fa-youtube"></i>
                </a>
                <!-- Github -->
                <a class="btn btn-primary" style="background-color: #333333;" href="#!" role="button"
                  ><i class="fab fa-github"></i>
                </a>
                  <!-- Whatsapp -->
                  <a class="btn btn-primary" style="background-color: #25d366;" href="#!" role="button"
                    ><i class="fab fa-whatsapp"></i>
                  </a>
    </div>
 
  </div>
  <div class="right-section"></div>
</div>



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
/* Social media*/
.fa {
  padding: 20px;
  font-size: 30px;
  width: 70px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}
.fa-skype {
  background: #00aff0;
  color: white;
}
.fa-yahoo {
  background: #430297;
  color: white;
}

</style>
<?php 
include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/headerfooter/footer.php";
?>