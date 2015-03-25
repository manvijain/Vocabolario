
<?php 
$connection = mysql_connect("localhost","root","") or die("could not connect to the server");
mysql_select_db("vocab",$connection) or die("could not connect to the database!");
//session_start();
$temp = "beg_".$_SESSION['id'];
$uniqueid="pmd_".$_SESSION['id'];
$c = 0;
$k = 0;
$codes = array();
$word_list= mysql_query( "SELECT * FROM $uniqueid where count<15 ");
$n = mysql_num_rows($word_list);
//echo $n;
while($row = mysql_fetch_array($word_list))
{
	$codes[$c] = $row['code'];
    //echo $codes[$c]."<br>";
    $c = $c+1;
}
$word = array();
$meaning = array();

$fetch_rel = mysql_query("select * from $temp where s=1");
$fetch_rel_r =  mysql_fetch_array($fetch_rel);
$k = $fetch_rel_r['start'];
$kl = $fetch_rel_r['end'];
//echo $c;
if($kl<=$n)
{
for($i =$k ;$i<=$kl;$i++)
{
	$s= $codes[$i];
	$fetch_word = mysql_query("select * from master_word where sno = '$s' ");
    $fetch_word_r = mysql_fetch_array($fetch_word);
    $x = $i-$k;
    $word[$x] = $fetch_word_r['word'];
    $w = $word[$x];
    $fetch_word_no = mysql_query("select * from wordset where word='$w' ORDER BY tag_count DESC LIMIT 1 ");
    $fetch_word_no_r =  mysql_fetch_array($fetch_word_no);
    $word_no = $fetch_word_no_r['synset_id'];
    //echo $w."-------";

    $fetch_meaning = mysql_query("select meaning from meaningset where synset_id = '$word_no'");
    $fetch_meaning_r = mysql_fetch_array($fetch_meaning);
    $meaning[$x] = $fetch_meaning_r['meaning'];
    // echo $meaning[$x]."<br>";
}
}
else
{
   for($i=$kl-9;$i<$n;$i++)
   {
    $s= $codes[$i];
    $fetch_word = mysql_query("select * from master_word where sno = '$s' ");
    $fetch_word_r = mysql_fetch_array($fetch_word);
    $x = $i-$k;
    $word[$x] = $fetch_word_r['word'];
    $w = $word[$x];
    $fetch_word_no = mysql_query("select * from wordset where word='$w' ORDER BY tag_count DESC LIMIT 1 ");
    $fetch_word_no_r =  mysql_fetch_array($fetch_word_no);
    $word_no = $fetch_word_no_r['synset_id'];
    //echo $w."-------";

    $fetch_meaning = mysql_query("select meaning from meaningset where synset_id = '$word_no'");
    $fetch_meaning_r = mysql_fetch_array($fetch_meaning);
    $meaning[$x] = $fetch_meaning_r['meaning'];
    // echo $meaning[$x]."<br>";

   }
   for($i=$n;$i<=$kl;$i++)
   {
    $x = $i-$k;
    $word[$x] = 0;
    $meaning[$x] = 0;
    // echo $meaning[$x]."<br>";

   }
}
?>



