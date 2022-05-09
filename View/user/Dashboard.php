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
  </style>
 <style>
        /* Three image containers (use 25% for four, and 50% for two, etc) */
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

    <title>DashboardView</title>
</head>
<body>
    
    <div class="row">
        <div class="column">
            <img src="http://localhost/forum/View/partials/logo/users.png" alt="Snow" style="width:60%;padding:10%;margin:10%">
            <p style="text-align:center;color:mediumpurple;font-size:x-large"><?php  echo $s; ?> Users </p>
            <p style="text-align:center"> <a href= "http://localhost/forum/Controller/user/list.php" style="text-align:center;color:mediumpurple;font-size:x-large">View users</a></p>
        </div>
        <div class="column">
            <img src="http://localhost/forum/View/partials/logo/topic.png" alt="Mountains" style="width:60%;padding:10%;margin:10%">
            <p style="text-align:center;color:lawngreen;font-size:x-large">
                <?php echo $t ; ?> topics </p>
            <p style="text-align:center">  <a href='http://localhost/forum/Controller/topic/listTopic.php' style="text-align:center;color:lawngreen;font-size:x-large">View topics</a></p>
</div>
        <div class="column">
            <img src="http://localhost/forum/View/partials/logo/question.jpg" alt="Mountains" style="width:60%;padding:10%;margin:10%">
            <p style="text-align:center;color:red;font-size:x-large"> <?php echo $q ?>  Questions </p>
         <p style="text-align:center">   <a href='http://localhost/forum/Controller/Question/listQuestions.php' style="text-align:center;color:red;font-size:x-large">View questions</a>
      </p>
            </div>
    </div>

       
</body>
</html>