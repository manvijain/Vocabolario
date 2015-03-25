
<?php 
$connection = mysql_connect("localhost","root","") or die("could not connect to the server");
mysql_select_db("vocab",$connection) or die("could not connect to the database!");
$uniqueid="pmd_".$_SESSION['id'];
$temp = "beg_".$_SESSION['id'];
if($_SESSION['beg_review']==0)
{
$sql="CREATE TABLE $temp(s INT,start INT,end INT)";
$rsql=mysql_query($sql);
$query="INSERT INTO $temp VALUES (1,0,9)";
$result = mysql_query($query);
include 'beg_display_block.php';
$_SESSION['beg_review']=1;
//echo "executed_initiate";

}


?>



