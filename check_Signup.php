<html>
<head>
   <title>complete Signup page</title>
   <?php
    error_reporting(E_ALL ^E_DEPRECATED);
    //connecting, selecting database
    $link = mysql_connect ('localhost','root','12345') or die('Could not connect :'.mysql_error());

    //echo 'Connected successfully';
    mysql_select_db('project1') or die('Could not select database');
   function NewUser()
    {
        $loginname = $_POST['signup'];
        $password =$_POST["password"];
        $username = $_POST["username"];
        $age = $_POST["age"];
        $gender = $_POST["gender"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $country = $_POST["country"];
        $query = "INSERT INTO User(uname,loginname,upassword,age,gender, ucity, ustate, ucountry) VALUES('$username','$loginname','$password','$age','$gender','$city','$state','$country')";
        $data = mysql_query($query) or die(mysql_error());

        if($data)
        {
         echo "<script> alert('Signup is completed...');window.location.href ='signup.php'</script>";
        }

    }

   function SignUp()
   {
    if (!empty($_POST['signup']))
     {
       // $query = mysql_query("SELECT * FROM User Where loginname = '$_POST[signup]'") or die (mysql_error());
        
        $query = "SELECT * FROM User Where loginname = '$_POST[signup]'";
        $result = mysql_query($query) or die ('Query failed:' . mysql_error());
            
        if (!($row = mysql_fetch_array($result,MYSQL_NUM)))
        {
            NewUser();
        }
        else
        {
            echo "<script> alert('SORRY....YOU ARE ALREADY REGISTERED USER...');window.location.href ='login.php'</script>";

        }
    }
     //echo "<script> alert('sign up is not completed!');window.location.href ='Signup.php'</script>";
     //Free resultset
}

if (isset($_POST['commit']))
{
 
     SignUp();
}
   // mysql_free_result($result);
    //closing connection
   // mysql_close($link);

   ?>

   </head>
</html>