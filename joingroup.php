<?php
 	error_reporting(E_ALL ^E_DEPRECATED);
	session_start();
	$gid=$_GET["gid"];
	$link = mysql_connect('localhost', 'root','12345')or die('Could not connect: ' . mysql_error());
// echo 'Connected successfully';
	mysql_select_db('project1') or die('Could not select database');
	$query="insert into groupmember(gid,uid) values(".$gid.",".$_SESSION["uid"].")";    
	if (isset($_SESSION["uid"])){
	       if($result = mysql_query($query)){
		      echo"<script>alert('successfully Join');history.go(-1)</script>";
	       }else{
		     echo"<script>alert('You have already join this group');history.go(-1)</script>";
	       }

   } else {
   	 echo"<script>alert('You have to log in first');history.go(-1)</script>";
   }
?>