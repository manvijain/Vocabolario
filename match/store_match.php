<?php 
$connection = mysql_connect("localhost","root","") or die("could not connect to the server");
mysql_select_db("vocab",$connection) or die("could not connect to the database!");
session_start();    //to access the session variable created during log in 
$match_table="match_".$_SESSION['id'];

//check whether user is not pressing back button after game completion 

//$createtemp=mysql_query("CREATE TABLE $matchid (sno INT,)");

	
	

if(isset($_POST['submit']))
{
if($_SESSION['match_played']==0)		
{	for($i=0;$i<5;$i++)
	{
			
		if($_POST['mat'.$i]>=1 && $_POST['mat'.$i]<=5)
			$w[$i]=$_POST['mat'.$i]-1;	//storing users answers
		
			else
		{	
			header("Location:match_look.php"); // redirects
			break;
		}
	}
	for($i=0;$i<5;$i++)	//storing user's answer attempt
	$insertans=mysql_query("UPDATE $match_table SET try='$w[$i]' where sno=$i");
	$_SESSION['match_played']=1; 
}
	
	
		$showword=mysql_query("select * from $match_table");
		for($i=0;$i<5;$i++)
	{
		$result=mysql_fetch_array($showword);
		$word[$i]=$result['words'];
		$correctans[$i]=$result['correct'];
	}	
 
}

else
{
		$showword=mysql_query("select * from $match_table");
		for($i=0;$i<5;$i++)
	{
		$result=mysql_fetch_array($showword);
		$word[$i]=$result['words'];
		$correctans[$i]=$result['correct'];
		$w[$i]=$result['try'];
	}
	
}
	

?>

<!-- html code -->

<?php
if($_SESSION['fname']=="nobody")
header("Location:../vocab.php");
?>
<html>
<head>
 <style>
 /*div 
    {
      border: 2px solid;
      border-radius: 0px;
    }
  */
  select {
    padding:3px;
	width:100px;
    margin:0px 5px;
    -webkit-border-radius:10px;
    -moz-border-radius:4px;
    border-radius:4px;
    -webkit-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    -moz-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    background: #f8f8f8;
    color:#888;
    border:none;
    outline:none;
    display: inline-block;
    -webkit-appearance:none;
    -moz-appearance:none;
    appearance:none;
    cursor:pointer;
}
  </style>
  <link href='http://fonts.googleapis.com/css?family=Puritan' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Candal' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Droid Sans' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="common.css" />
          <link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>

</head>
<body style="background:#252525;">
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
		 <option value="../homepage after login/account.php" >Account</option>
		 </select>
		 </p>
		 
	</div>
</div>
<div style="height:475px; width:100%; float:left; font-family:'Puritan';  ">
	<div style="height:550px; width:20%; float:left;">
        <!--shift div-->
      </div>
      <div style="height:20px; width:60%; float:left;">
        <!--shift div-->
      </div>

       <div  style="height:800px; width:60%; float:left;font-family:'Pompiere'; font-size:40px; font-weight:500;background-color:white">
		<div style="width:100%;height:5%;text-align:center">
		Your answer
		</div>
		<div id="userarea" style="height:35%">
		<div id="usercol1" style="float:left;margin:40px 5px;">
		<?php 
			for($i=0;$i<5;$i++)	
		echo $word[$i]."<br>";
		?>
		</div>
		
		<div id="usercol2" style="float:left;margin:40px 10px">
		<?php 
		for($i=0;$i<5;$i++)	//finding user answer <----------
		{		
		$showmean=mysql_query("select * from $match_table where Sno='$w[$i]' ");
		$result=mysql_fetch_array($showmean); //user answer
		echo ": ".$result['meanings']."<br>";
		}
		?>
		</div>
		</div>
		<div style="width:100%;height:5%;text-align:center">
		Correct answers
		</div>
		
		<div id="correctarea" style="height:35%;margin:20px">
		<div id="correctcol1" style="float:left;margin:40px 5px;">
			<?php 
			for($i=0;$i<5;$i++)	
			echo $word[$i]."<br>";
			?>
		</div>
		
		<div id="correctcol2" style="float:left;margin:40px 10px">
		<?php	for($i=0;$i<5;$i++)
		{		
		$showmean=mysql_query("select * from $match_table where Sno='$correctans[$i]' ");
		$result=mysql_fetch_array($showmean);//correct answer
		echo ": ".$result['meanings']."<br>";
		}
		?>
		</div>
		</div>
		
		<form action="savescore.php">
		<input type="submit" value="Save Score" name="save" style="margin-left:40px;">
		</form>
       </div>


	</div>

	
</body>
</html>

