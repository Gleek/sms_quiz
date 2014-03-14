<?php
	if(isset($_GET['start']))
	{
		$time=$_GET['start'];
		$fp=fopen("time.txt", "w");
		$fout=fwrite($fp, $time);
		fclose($fp);
	}
	//echo "Starting time=$time";
	$fd=fopen("time.txt", "r");
	$stime=fread($fd,filesize("time.txt"));
	fclose($fd);
	
	
	////////////////ANSWERS/////////////////////////
	$sol = array('a','a','a','a','a','a','a','a','a','a');
	/////////////////////////////////////////////

	$phone="456-7457";
	$message='a';
	

	$ctime=time();
	$diff=$ctime-$stime;
	
	$num=intval($diff/60);
	if ($num > 10) 
		exit;
	$answer=$sol[$num];
	//echo $answer;
	

	$mesage=strip_tags(mysql_real_escape_string($message)); 
	$link=mysql_connect('localhost','root');
	if(!$link)
		die("Error in connecting".mysql_error());
	mysql_select_db('stud',$link); 
	//or die("Error in opening0");
	$query="SELECT * FROM name WHERE `phone`=".$phone;
	$result=mysql_query($query) or die("Error in query 1");
	$result = mysql_num_rows($result);
	if($result == 0)
	{
		$query="INSERT INTO name(`phone`, `score`) VALUES($phone, 0)";
		$result=mysql_query($query)  or die("Error in query 2");
	}
	$query="SELECT `score` FROM name WHERE `phone`=$phone";
	$result=mysql_query($query)  or die("Error in query 3");
	while( $row = mysql_fetch_array($result))
	{
		$score=$row['score'];
	}
	if($message == $answer)
	{
		$score=$score+1;
		$query="UPDATE name SET `score`=$score WHERE `phone`=$phone";
		$result=mysql_query($query)  or die("Error in query 4");
	}
	mysql_close($link);
	
?>