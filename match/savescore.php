<?php 
$connection = mysql_connect("localhost","root","") or die("could not connect to the server");
mysql_select_db("vocab",$connection) or die("could not connect to the database!");
session_start();    //to access the session variable created during log in 
$uniqueid="PMD_".$_SESSION['id'];
$match_table="match_".$_SESSION['id'];

$updatequery=mysql_query("select * from $match_table");
for($i=0;$i<5;$i++)
{
	$row=mysql_fetch_array($updatequery);
	$count=$row['count'];
	if($row['correct']==$row['try'])	//if right answer
	{
		mysql_query("UPDATE $uniqueid SET rightans=rightans+1 where count='$count'");
		mysql_query("UPDATE $uniqueid SET asked=asked+1 where count='$count'");
	}
	
	else	//wrong answer
	{
		mysql_query("UPDATE $uniqueid SET wrongans=wrongans+1 where count='$count'");
		mysql_query("UPDATE $uniqueid SET asked=asked+1 where count='$count'");
	}
}

$fetch_row = mysql_query( "DROP TABLE $match_table" );
$_SESSION['played_match'] = 0;
header("Location:../homepage after login/home.php");
?>