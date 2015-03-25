
<?php 
$connection = mysql_connect("localhost","root","") or die("could not connect to the server");
mysql_select_db("vocab",$connection) or die("could not connect to the database!");
//session_start();
$uniqueid="pmd_".$_SESSION['id'];
$temp = "beg_".$_SESSION['id'];
$word_list= mysql_query( "SELECT * FROM $uniqueid where count<15");
$n = mysql_num_rows($word_list);
$last = mysql_query( "SELECT * FROM $temp where s=1");
$last_r = mysql_fetch_array($last);
$l = $last_r['end'];
if($l+1<$n)
{
$temp_update = mysql_query("UPDATE $temp SET start=start+10 WHERE s =1" );
$temp_update = mysql_query("UPDATE $temp SET end=end+10 WHERE s =1" );
}
 include 'beg_display_block.php';
 


?>



