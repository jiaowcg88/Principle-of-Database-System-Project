<!DOCTYPE html>


<html>
<head>
   <title>complete add your meeting</title>   
 </head>
 

 <body>
 	
 <?php
    error_reporting(E_ALL ^E_DEPRECATED);
    //connecting, selecting database
  $link = mysql_connect('localhost', 'root','12345')
 or die('Could not connect: ' . mysql_error());
//echo 'Connected successfully';
        mysql_select_db('project1') or die('Could not select database');
       // $gid = $_GET['gid'];
        $mid = rand(5000, 9000);
        $mname = $_POST['mname'];
        $startTime = $_POST["startTime"];
        $endTime = $_POST["endTime"];
        $address = $_POST["maddress"];
        $city = $_POST["mcity"];
        $state = $_POST["mstate"];

        $query = "INSERT INTO meeting(mid,mname,startTime,endTime,maddress,mcity,mstate) VALUES('$mid','$mname','$startTime','$endTime','$address','$city','$state')";
        $data = mysql_query($query) or die(mysql_error());
         if($data)
        {
         echo "<script> alert('Added metting');window.location.href ='meeting.php'</script>";
        }

    
   ?>     
 </body>
</html>