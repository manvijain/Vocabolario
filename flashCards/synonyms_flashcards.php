
<?php 
$connection = mysql_connect("localhost","root","") or die("could not connect to the server");
mysql_select_db("vocab",$connection) or die("could not connect to the database!");

 
$uniqueid="pmd_".$_SESSION['id'];
//echo $uniqueid;
$auto_inc = mysql_query( "SELECT * FROM $uniqueid ORDER BY count DESC LIMIT 1" ) or die(mysql_error());

if(mysql_num_rows($auto_inc) == 0)
{
	$ai =0;
	
}

else
{
	$a_i = mysql_fetch_array( $auto_inc )  or die(mysql_error());
	$ai= $a_i['count'];
	//echo $ai;
}
    $word_list= mysql_query( "SELECT * FROM master_word WHERE sno>=$ai-9 AND sno<=$ai;");
	$n = mysql_num_rows($word_list);
		$c = 0;
		while($row = mysql_fetch_array($word_list))
		{
			$word[$c] = $row['word'];
			$w = $row['word'];
			//echo $w;
            $synonym[$c] = "";
            $fetch_word_no = mysql_query("select * from wordset where word='$w' ORDER BY tag_count DESC LIMIT 1 ");
            $fetch_word_no_r =  mysql_fetch_array($fetch_word_no);
            $word_id = $fetch_word_no_r['synset_id'];
            $word_no = $fetch_word_no_r['w_num'];
            //echo $word_id." ";
            //echo $word_no."<br>";

            $fetch_synonym_no = mysql_query("select * from wordset where synset_id = '$word_id'");
            if(mysql_num_rows($fetch_synonym_no)==0)
            {
            	$synonym[$c] = "no see also";
            }
            else
            {
            while($row1 = mysql_fetch_array($fetch_synonym_no))
            {
                  $num = $row1['w_num']; 
                  if($num!=$word_no)
            	$synonym[$c] = $synonym[$c].$row1['word'].";";
            	
            }
            $x =$synonym[$c]; 
            $synonym[$c]=rtrim($x,";");
            $synonym[$c]=rtrim($synonym[$c]," ");
            if($synonym[$c]== "")
            {
                  $synonym[$c] = "N.A.";
            }





            /*$fetch_synonym_no = mysql_query("select * from wn_see_also where synset_id_1 = '$word_id' and wnum_1='$word_no'");
            //echo "came here1";
            if(mysql_num_rows($fetch_synonym_no)==0)
            {
            	$synonym[$c] = "no see also";
            }
            else
            {
            while($row1 = mysql_fetch_array($fetch_synonym_no))
            {
            	echo "came hereeeee";
            	$synonym_id = $row1['synset_id_2'];
            	$synonym_no = $row2['wnum_2'];
            	echo $synonym_id."  ";
            	echo $synonym_no."<br>";
            	$s_v = mysql_query("select * from wordset where synset_id = '$synonym_id' and w_num='synonym_no'");
            	$s_v_r=mysql_fetch_array($s_v);
            	$synonym_value = $s_v_r['word'];
            	$synonym[$c] = $synonym[$c]+$synonym_value+';';
            }*/
            }

            
			$t = $ai+$c+1;
			$c++;
		}
		/*$query="INSERT INTO $uniqueid VALUES ($t , 1,1,1,1 )";
	        $result = mysql_query($query);*/
	

?>



