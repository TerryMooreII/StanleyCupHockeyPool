<?php
session_start();
  $page = $_SERVER['SCRIPT_NAME'];
  $page =  substr($page,strlen($page)-9,  strlen($page));

    if ( !(isset($_SESSION['userIdNumber']) ) ) {
      
      if ( $page !='login.php' ){

        header('Location: login.php');
      }
  }
  
?>
<!doctype html>  
<html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<!--[if !IE 7]>
  <style type="text/css">
    #wrap {display:table;height:100%}
  </style>
<![endif]-->

<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Moore Family Stanley Cup Pool</title>
  <meta name="description" content="A NHL playoff Hockey Pool">
  <meta name="author" content="Tery Moore">


  <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">


  <!-- CSS : implied media="all" -->
  <link rel="stylesheet" href="css/style.css?v=2">
  <link href='http://fonts.googleapis.com/css?family=Exo' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/cup.css">

  <!-- Uncomment if you are specifically targeting less enabled mobile browsers
  <link rel="stylesheet" media="handheld" href="css/handheld.css?v=2">  -->
 
  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="js/libs/modernizr-1.6.min.js"></script>
    
<?php
    include('inc/dbConnect.php');
?>
</head> 
<body>

<!-- <div id="wrap"> 
<div id="main">  --> 
 
 <header>
	 
  <div id="topMenu">

    <div id="welcome">
      
    <?php
      if ( isset($_SESSION['userName']) ) { ?>    
  	     Welcome <a href="#" class="editUser"  data-label="Update" data-edit="<?php echo $_SESSION['userIdNumber'] ?>"><?php echo $_SESSION['fullName'] ?></a> | <a href="_posts/logout.php">Logout</a>
      <?php }else{ ?>
         <a href="#" class="editUser" data-label="Register" data-edit="register">New User? Register!</a>
  	 <?php } ?>
    </div>
  <img class="logoImg" src="imgs/stanley-cup.gif" /> <h1>Stanley Cup Pool</h1>  
  <div id="userForm"></div>
  </div>
  
  <div id="mainMenu">
	
    <div id="navDiv">
    <?php  
    $page = $_SERVER['SCRIPT_NAME'];
    if ( substr($page,strlen($page)-9,  strlen($page)) != 'login.php') { ?>
      <ul id="nav">
          <li><a href="viewStandings.php">View Standings</a></li>
          <li><a href="viewAllUsersPicks.php">All Users Picks</a>
          <li><a href="viewBracket.php">View Bracket</a>
          <li><a href="#">Make Picks</a>
              <ul>
                  <li><a href="makePicksQuarterFinals.php">Quarter Finals</a></li>
                  <li><a href="makePicksSemiFinals.php">Semi Finals</a></li>
                  <li><a href="makePicksConferenceFinals.php">Conference Finals</a></li>
                  <li><a href="makePicksStanleyCup.php">Stanley Cup Finals</a></li>
              </ul>
              <div class="clear"></div>
          </li>
          <?php if ( isset( $_SESSION['isAdmin'] ) ) { ?>
              <li><a href="#">Set Brackets</a>
              <ul>
                  <li><a href="winnerOfQuarterFinals.php">Quarter Finals</a></li>
                  <li><a href="winnerOfSemiFinals.php">Semi Finals</a></li>
                  <li><a href="winnerOfConferenceFinals.php">Conference Finals</a></li>
                  <li><a href="winnerOfStanleyCup.php">Stanley Cup Finals</a></li>
              </ul>         
                  <div class="clear"></div>
              </li>
              <li><a href="#">Administration</a>
              <ul>
                  <li><a href="userAccounts.php">User Management</a></li>
                  <li><a href="setPointsPerRound.php">Set Points/Round</a></li>
                  <li><a href="manageTeams.php">Manage Teams</a></li>
              </ul>         
                  <div class="clear"></div>
              </li>    
            <?php } ?>
      </ul>
    <?php } ?>
  </div>
  </div>
</header>


<div id="container">

<div id="innerContainer">
