<nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img src="http://localhost/forum/View/partials/logo/logo1.png" alt="" width="70" height="70">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/forum/Controller/user/adminDashboard.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/forum/Controller/topic/listTopic.php">Topics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/forum/Controller/user/list.php">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/forum/Controller/user/listbloquer.php">Blocked users </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/forum/Controller/Question/listQuestions.php">Questions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/forum/Controller/Question/ArchivedQuestions.php"> Archived question</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active"aria-current="page" href="http://localhost/forum/Controller/RepQuestion/list.php"><i class="bi bi-bell-fill" style="color:white"></i>Notification</a>
        </li>
        
      </ul>
      <div class="d-flex">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-fill" style="color:white"></i>
          <?=$_SESSION["user"]["nom"]." ".$_SESSION["user"]["prenom"]?>
          </a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
            <li><a class="dropdown-item" href="http://localhost/forum/Controller/user/update.php"><i class="bi bi-pencil-fill"></i>Update Profile</a></li>
            <li><a class="dropdown-item" href="http://localhost/forum/Controller/user/updatepassword.php"><i class="bi bi-pencil-square"></i>Update Password</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="http://localhost/forum/Controller/user/logout.php"><i class="bi bi-box-arrow-left"></i>Logout</a></li>
          </ul>
        </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
