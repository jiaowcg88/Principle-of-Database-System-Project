<html>
<head>
   <title>Add a new recipe page</title>
   <?php
        session_start();
        error_reporting(E_ALL ^E_DEPRECATED);
        //connecting, selecting database
        $link = mysql_connect ('localhost','root','12345') or die('Could not connect :'.mysql_error());

        //echo 'Connected successfully';
        mysql_select_db('project1') or die('Could not select database');
  
        $rtitle = $_POST['rtitle'];
        $num_serving = $_POST["num_serving"];
        $description =$_POST["description"];
        $ingredname =$_POST["ingredname"];
        $quantity = $_POST["quantity"];
        $unit = $_POST["unit"];
        $query= "insert into Recipe(rtitle,num_serving,uid,description) values('$rtitle', '$num_serving', ".$_SESSION["uid"].", '$description')";
        $query1 = "insert into RecipePicture(pname,rid) values('".$_FILES["rimage"]["name"]."',(select rid from recipe where rtitle ='$rtitle'))";
        move_uploaded_file($_FILES["rimage"]["tmp_name"],"images/" . $_FILES["rimage"]["name"]);
         // the name of the file
        $query2 = "insert into recipeingredient values((select rid from recipe where rtitle ='$rtitle'),'$ingredname','$quantity','$unit')";
        $data = mysql_query($query) or die(mysql_error());
        $data1 = mysql_query($query1) or die(mysql_error());
        $data2 = mysql_query($query2) or die(mysql_error());
        if($data)
        {
         echo "<script> alert('Recipe is added...');window.location.href ='recipes.php'</script>";
        }


   ?>

   </head>
</html>
