<?php
 	error_reporting(E_ALL ^E_DEPRECATED);
	session_start();
	$gid=$_GET["gid"];
	$mid=$_GET["mid"];
	$link = mysql_connect('localhost', 'root','12345')or die('Could not connect: ' . mysql_error());
// echo 'Connected successfully';
	mysql_select_db('project1') or die('Could not select database');
	$query1 ="select * from groupmember where g.uid = ".$_SESSION["uid"]." and gid = ".$gid."";
	$query="insert into rsvp(mid,gid,uid) values(".$mid.",".$gid.",".$_SESSION["uid"].")";

	// $data = mysql_query($query) or die(mysql_error());

 //        if($data)
 //        {
 //        echo"<script>alert('successfully rsvp');history.go(-1)</script>";
 //        }
 //        else 
 //        {

 //        echo"<script>alert('failed rsvp');history.go(-1)</script>"; 
 //        }
	if ($result1 = mysql_query($query1))
	{
	      if($result = mysql_query($query)){
		    echo"<script>alert('successfully rsvp');history.go(-1)</script>";
	     }else{
		    echo"<script>alert('Your have already rsvp');history.go(-1)</script>";
	     }

	} else {
	 	echo "<script>alert('You are not group memeber in this group Failed RSVP');history.go(-1)</script>";
	}

?>

