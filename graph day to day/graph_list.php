<?php
$connection = mysql_connect("localhost","root","") or die("could not connect to the server");
mysql_select_db("vocab",$connection) or die("could not connect to the database!");
session_start();    //to access the session variable created during log in 
$uniqueid="pmd_".$_SESSION['id'];
require_once('/jpgraph-3.5.0b1/src/jpgraph.php');
require_once('/jpgraph-3.5.0b1/src/jpgraph_pie.php'); 
 
//$data = array(40,60,31);
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

// A new pie graph
$graph = new PieGraph(450,600,"auto");
$graph->SetShadow();

// Title setup
/*$graph->title->Set("Adjusting the label pos");
$graph->title->SetFont(FF_FONT1,FS_BOLD);
*/

// Setup the pie plot
$p1 = new PiePlot($data);

// Adjust size and position of plot
$p1->SetSize(0.4);
$p1->SetCenter(0.5,0.52);

// Setup slice labels and move them into the plot

$p1->value->SetFont(FF_ARIAL,FS_BOLD,11);
$p1->value->SetColor('white');
$p1->SetLabelPos(0.6);
$p1->SetLabelType(PIE_VALUE_PER); 
$lbl = array("novice\n%.1f%%","intermediate\n%.1f%%","mastered\n%.1f%%"); 
$p1->SetLabels($lbl);

// Finally add the plot
$graph->Add($p1);

// ... and stroke it
$graph->Stroke();

?>