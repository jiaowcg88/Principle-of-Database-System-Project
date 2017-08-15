<html>
<head>
     <title>check user pass page</title>
     <?php
      session_start();
      error_reporting(E_ALL ^E_DEPRECATED);
      $link = mysql_connect ('localhost','root','12345') or die('Could not connect :'.mysql_error());
      mysql_select_db('project1') or die('Could not select database');

        $username =$_POST["username"];
        $password =$_POST["password"];
      if (!(strpos($username, "'"))) {

            // if (isset($_POST["username"], $_POST["password"]))
            // {
            	
              $query = "SELECT loginname, upassword,uid FROM User WHERE loginname = '".$username."'";
              $result = mysql_query($query) or die ('Query failed:' . mysql_error());
              if ($row = mysql_fetch_array($result,MYSQL_NUM) and $password == $row[1] )
              {
              	$_SESSION["username"] = $username;
                $_SESSION["uid"] = $row[2];
                  echo"<script>alert('Welcome to the food and recipe site!');window.location.href='userprofile.php'</script>";
              }
              else
              {
                 echo "<script>alert('The username or password are incorrect');window.location.href='login.php'</script>";
              }
          // } else {
          //     echo "<script>alert('The username or password cannot be empty');window.location.href='login.php'</script>";
          // }
    }else{

       echo "<script>alert( 'illegal login, please login again');window.location.href='login.php'</script>";
    }
     
       //Free resultset
     // mysql_free_result($result);
      //closing connection
      mysql_close($link);

     ?>

   </head>
</html>