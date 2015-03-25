<?php
session_start();
if($_SESSION['fname']=="nobody")
header("Location:../vocab.php");
$_SESSION['mcq_played']=0;
?>
<html>
<head>
 <style>
 /*div 
    {
      border: 2px solid;
      border-radius: 0px;
    }
  */</style>

    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
  <link href='http://fonts.googleapis.com/css?family=Puritan' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Candal' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="../nav_bar/css/style.css" />
  <link href='http://fonts.googleapis.com/css?family=Droid Sans' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
</head>
<body style="background:#33aa00;">
<div style="height:70px; width:100%; float:left;">
	<div style="width:30%; height:70px; float:left;">
		<img src="../images/logo.png" style="margin-top: -20px; margin-left: 65px;">
	</div>
	<div style="width:50%; height:70px; float:left;">
	</div>
	<div style="width:19%; height:70px; float:left; margin-top:15px; font-family:'Puritan'; text-align:center;font-size: 1.0em; color: #fefefe;">
		 <p style="font-family:'Fjalla One'"><?php echo "Welcome ".$_SESSION['fname']; ?>
		 <select onchange="javascript:location.href=this.value;">
		 <option style="display:none" value="Setting" selected="selected">Settings  </option>
		 <option value="../vocab.php" >Sign out </option>
		 <option value="account.php" >Account</option>
		 </select>
		 </p>
		 
	</div>
</div>
<div style="height:475px; width:5%; float:left;">
  <nav class="menu slide-menu-left">
    <ul>
        <li><a href="../homepage after login/home.php"><img src="../nav_bar/nav_home.png" style="margin-top:22px;"></a></li>
        <li><a href="../flashCards/flash_interface_look.php"><img src="../nav_bar/nav_flash.png" style="margin-top:22px;"></a></li>
        <li><a href="../games interface/games_interface.php"><img src="../nav_bar/nav_games.png" style="margin-top:22px;"></a></li>
        <li><a href="../graphs/graph_interface.php"><img src="../nav_bar/nav_performance.png" style="margin-top:22px;"></a></li>
        <li><a href="../review/review_interface.php"><img src="../nav_bar/nav_review.png" style="margin-top:22px;"></a></li>

    </ul>
</nav><!-- /slide menu left -->
    <input type="image" src="../nav_bar/arrow.png" class="nav-toggler toggle-slide-left" style="margin-top:225px;">
</div>
<div style="width:3%; height: 40px; float:left;  margin-top:225px; margin-right:-50px; margin-left:50px;">
<img src="../images/rev_arrow.png">
  </div>

<div class="container" style="height:475px; width:85%; float:left; font-family:'Puritan';">

   <!-- <div class="codrops-top clearfix">
        <a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/FullscreenOverlayStyles/"><span>Previous Demo</span></a>
        <span class="right"><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=18551"><span>Back to the Codrops Article</span></a></span>
      </div>-->
      <section class="demo-1">
        <div class="grid">
          <div class="box" style="margin-left:-50px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
              <line class="top" x1="0" y1="0" x2="750" y2="0"/>
              <line class="left" x1="0" y1="370" x2="0" y2="-740"/>
              <line class="bottom" x1="250" y1="370" x2="-500" y2="370"/>
              <line class="right" x1="250" y1="0" x2="250" y2="1110"/>
            </svg>
            <h3>1</h3>
          </div>
          <div class="box" style="margin-left:75px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
              <line class="top" x1="0" y1="0" x2="750" y2="0"/>
              <line class="left" x1="0" y1="370" x2="0" y2="-740"/>
              <line class="bottom" x1="250" y1="370" x2="-500" y2="370"/>
              <line class="right" x1="250" y1="0" x2="250" y2="1110"/>
            </svg>
            <h3>2</h3>
          </div>
          <div class="box" style="margin-left:75px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
              <line class="top" x1="0" y1="0" x2="750" y2="0"/>
              <line class="left" x1="0" y1="400" x2="0" y2="-740"/>
              <line class="bottom" x1="250" y1="370" x2="-500" y2="370"/>
              <line class="right" x1="250" y1="0" x2="250" y2="1110"/>
            </svg>
            <h3>3</h3>
          </div>
        </div><!-- /grid -->
      </section>

	</div>

  <div style="width:3%; height: 40px; margin-top:225px; float:left; margin-left:-100px;">
<img src="../images/rev_arr.png">
  </div>
  




<script src="../nav_bar/js/classie.js"></script>
<script src="../nav_bar/js/nav.js"></script>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34160351-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>	
</body>
</html>

