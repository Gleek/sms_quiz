<?php

if(isset($_GET['start']))
$time=$_GET['start'];
//echo "Starting time=$time";
$phone="987";
$answer='a';
$message='a';
$link=mysql_connect('localhost','root','');
echo "link is ".$link."<br/>";

if($link == false)
die("Error in connecting");

mysql_select_db('stud' , $link);
//  or die("Error in opening0");
$query="SELECT * FROM `name` WHERE `phone`='$phone'";
$result=mysql_query($query) or die("Error in query 1");

echo "no of rows is ".mysql_num_rows($result)."<br/>";

$result = mysql_num_rows($result);
if($result == 0)
{
	$query="INSERT INTO `name`(`phone`, `score`) VALUES($phone,0)";
	$result=mysql_query($query)  or die("Error in query 2");
	echo $result;
}
else echo " Number $phone already present in the database <br/>";


$score=mysql_query("SELECT `score` FROM `name` WHERE `phone`='$phone'")  or die("Error in query 3");

while( $row = mysql_fetch_array($score))
{
	echo "<pre>";
	print_r($row); echo "</pre><br/>";
}

if($message == $answer)
{
	$score=$score+1;
	$result=mysql_query("UPDATE `name` SET `score`='$score' WHERE `phone`='$phone'")  or die("Error in query 4");
}
echo "Im alive";
?>
