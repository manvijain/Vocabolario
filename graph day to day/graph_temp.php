<?php
$connection = mysql_connect("localhost","root","") or die("could not connect to the server");
mysql_select_db("vocab",$connection) or die("could not connect to the database!");
session_start();    //to access the session variable created during log in 
$uniqueid="pmd_".$_SESSION['id'];
 
require_once('/jpgraph-3.5.0b1/src/jpgraph.php');
require_once('/jpgraph-3.5.0b1/src/jpgraph_pie.php'); 
 

$data = array();
$beg = mysql_query("SELECT * from $uniqueid where (rightans/wrongans)<0.6");
$beg_count = mysql_num_rows($beg);


$int = mysql_query("SELECT * from $uniqueid where (asked<5 AND (rightans/wrongans)>0.6) OR (asked>5 AND ((rightans/wrongans)>0.6 AND (rightans/wrongans<0.8))) ");
$int_count = mysql_num_rows($int);

$mastered = mysql_query("SELECT * from $uniqueid where  asked>5 AND (rightans/wrongans)>0.8");
$mastered_count = mysql_num_rows($mastered);	
$data[0] = $beg_count;
$data[1] = $int_count;
$data[2] = $mastered_count;
/*echo $data[0];
echo "here";
echo $data[1];
echo "here1";
echo $data[2];
echo "here2";
/*$data[0] = 50;
$data[1] = 40;
$data[2] = 20;*/


$graph = new PieGraph(500, 500); 
$graph->SetShadow(); 

$graph->title-> Set("A simple Pie plot"); 

$p1 = new PiePlot($data); 
$graph->Add( $p1); 
$graph->Stroke(); 
$legends = array('April (%d)','May (%d)','June (%d)'); 
$p1 = new PiePlot($data);
$p1->SetLegends($legends);
$p1->SetCenter(0.4)

//$graph->SetLegends($legends); 

?>