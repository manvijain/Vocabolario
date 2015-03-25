<html>
<?php
session_start();

include 'beg_dec.php';
echo "getting executed";
?>
<head>
   <style>
    /*div 
    {
      border: 2px solid;
      border-radius: 0px;
    }*/
  
  input[type="submit"] 
{
  background: #e3e3e3;
  border: 1px solid #ccc;
  color: #333;
  
  font-size: 10px;
  font-weight: bold;
  padding: 8px 0 9px;
  text-align: center;
  width: 80px;
  cursor:pointer;
  
  text-shadow: 0px 1px 0px #fff;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  border-radius: 4px;
  -moz-box-shadow: 0px 0px 2px #fff inset;
  -webkit-box-shadow: 0px 0px 2px #fff inset;
  box-shadow: 0px 0px 2px #fff inset;
}
    </style>
   <link rel="stylesheet" type="text/css" href="flash.css" media="screen" />
    <link rel="stylesheet" href="../nav_bar/css/style.css" />
   <link href='http://fonts.googleapis.com/css?family=Puritan' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Cabin Condensed' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>

   </head>

<body style="background:url(../images/4.png);">
  
    <div style="height:70px; width:100%; float:left;">
      <div style="width:30%; height:70px; float:left;">
        <img src="../images/logo.png" style="margin-top: -20px; margin-left: 65px;">
      </div>
      <div style="width:50%; height:70px; float:left;">
      </div>
        <div style="width:19%; height:70px; float:left; margin-top:15px; font-family:'Puritan'; text-align:center;font-size: 1.0em; color: #fefefe;">
     <p style="font-family:'Fjalla One'"><?php echo "Welcome " ?>
     <select onchange="javascript:location.href=this.value;">
     <option style="display:none" value="Setting" selected="selected">Settings  </option>
     <option value="../vocab.php" >Sign out </option>
     <option value="../homepage after login/account.php" >Account</option>
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
    
    <div style="height:475px; width:94%; float:left; font-family:'Puritan';  ">
      <div id="prev_button" style="float:left; width:450px; height:475px;">
        <form action="beg_dec_look.php" method="POST" style="margin-top:255px; float:right;">
        <input type="submit" name="synonyms" value="previous" style="margin-right:85px;">
      </form>
      </div>

        <div id="f1_container" style="float:left;">
          
            <div id="f1_card" class="shadow" >

                <div class="face" id="change1" >
                  <table  style="width:100% ; margin-left:20px; font-size:25px; font-family:'Cabin Condensed';">
                        <tr>
                <td height="48" width="2%"><?php echo $k+1;?></td><td height="48" width="98%"> <?php echo $word[0];?></td>
              </tr> 
                        <tr>
                <td height="48" width="2%"><?php echo $k+2;?></td><td height="48" width="98%"> <?php echo $word[1];?></td>
              </tr>
              <tr>
                <td height="48" width="2%"><?php echo $k+3;?></td><td height="48" width="98%"> <?php echo $word[2];?></td>
              </tr>
              <tr>
                <td height="48" width="2%"><?php echo $k+4;?></td><td height="48" width="98%"><?php echo $word[3];?></td>
              </tr>
              <tr>
                <td height="48" width="2%"><?php echo $k+5;?></td><td height="48" width="98%"><?php echo $word[4];?></td>
              </tr>
              <tr>
                <td height="48" width="2%"><?php echo $k+6;?></td><td height="48" width="98%"> <?php echo $word[5];?></td>
              </tr>
              <tr>
                <td height="48" width="2%"><?php echo $k+7;?></td><td height="48" width="98%"> <?php echo $word[6];?></td>
              </tr>
              <tr>
                <td height="48" width="2%"><?php echo $k+8;?></td><td height="48" width="98%"> <?php echo $word[7];?></td>
              </tr>
              <tr>
                <td height="48" width="2%"><?php echo $k+9;?></td><td height="48" width="98%"><?php echo $word[8];?></td>
              </tr>
              <tr>
                <td height="48" width="2%"><?php echo $k+10;?></td><td height="48" width="98%"> <?php echo $word[9];?></td>
              </tr>
            </table>
                </div>
                <div class="face back" id="change2" style="overflow:scroll;" >
                  <table  border=0 rules=rows  style="width:auto; font-family:'Cabin Condensed';  border-collapse: collapse;">
              <tr>
                <td height="30" width="30%" style="font-size:18px;"><?php echo $word[0];?> -</td>
                <td height="30" width="70%" style="font-size:17px; font-weight:500; align:right;"><?php echo $meaning[0];?></td>
              </tr>
              <tr>
                <td height="42" width="30%" style="font-size:18px;"><?php echo $word[1];?> -</td>
                <td height="42" width="70%" style="font-size:17px; font-weight:500; align:justify;"><?php echo $meaning[1];?></td>
              </tr>
              <tr>
                <td height="42" width="30%" style="font-size:18px;"><?php echo $word[2];?> -</td>
                <td height="42" width="70%" style="font-size:17px; font-weight:500; align:justify;"><?php echo $meaning[2];?></td>
              </tr>
              <tr>
                <td height="42" width="30%" style="font-size:18px;"><?php echo $word[3];?> -</td>
                <td height="42" width="70%" style="font-size:17px; font-weight:500; align:justify;"><?php echo $meaning[3];?></td>
              </tr>
              <tr>
                <td height="42" width="30%" style="font-size:18px;"><?php echo $word[4];?> -</td>
                <td height="42" width="70%" style="font-size:17px; font-weight:500; align:justify;"><?php echo $meaning[4];?></td>
              </tr>
              <tr>
                <td height="42" width="30%" style="font-size:18px;"><?php echo $word[5];?> -</td>
                <td height="42" width="70%" style="font-size:17px; font-weight:500; align:justify;"><?php echo $meaning[5];?></td>
              </tr>
              <tr>
                <td height="42" width="30%" style="font-size:18px;"><?php echo $word[6];?> -</td>
                <td height="42" width="70%" style="font-size:17px; font-weight:500; align:justify;"><?php echo $meaning[6];?></td>
              </tr>
              <tr>
                <td height="42" width="30%" style="font-size:18px;"><?php echo $word[7];?> -</td>
                <td height="42" width="70%" style="font-size:17px; font-weight:500; align:justify;"><?php echo $meaning[7];?></td>
              </tr>
              <tr>
                <td height="42" width="30%" style="font-size:18px;"><?php echo $word[8];?> -</td>
                <td height="42" width="70%" style="font-size:17px; font-weight:500; align:justify;"><?php echo $meaning[8];?></td>
              </tr>
              <tr>
                <td height="42" width="30%" style="font-size:18px;"><?php echo $word[9];?> -</td>
                <td height="42" width="70%" style="font-size:17px; font-weight:500; align:justify;"><?php echo $meaning[9];?></td>
              </tr>
            </table>
                </div>  
            </div> 
        </div>
        <form action="beg_inc_look.php" method="POST" style="margin-top:255px;">
        <input type="submit" name="synonyms" value="next" style="margin-left:80px;">
      </form>
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

