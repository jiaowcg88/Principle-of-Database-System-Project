<!DOCTYPE HTML>
<html lang = "en">
  <head>
  <meta charset = "utf-8">
  <title> Sign-up</title>
  <meta name ="viewport" content="width=device-width, initial-scale=1.0">
  <meta name ="description" content="">
  <link href = "css/bootstrap.min.css" rel ="stylesheet">
  <script>
    var count =1;
    function addingredient(){
          document.getElementById(count).type="text";
          count++;
    }

  </script>
  </head>
  <body>
    <div class ="container" style="images/bg2.jpg">
      <div style="height:80px"> </div>
        <div class ="add recipe" align="center">

          <form method ="post" action="check_addrecipe.php">
          
           <h1>Add a recipe </h1>
            <div align="center">
             <p><input type ="text" name = "rtitle" value ="" placeholder ="recipetitle"> </p>
             <p><input type ="text" name ="num_serving" value ="" placeholder="num_serving"> </p>
             <p><input type ="text" name ="ingredname" value ="" placeholder ="ingredname"></p>
             <p><input type ="hidden" name ="ingredname1" id="1" value ="" placeholder ="ingredname"></p>
             <p><input type ="hidden" name ="ingredname2" id="2" value ="" placeholder ="ingredname"></p>
             <p><input type ="text" name="quantity" value ="" placeholder ="quantity"></p>
             <p><input type ="text" name="unit" value ="" placeholder ="unit"></p>
             <p><input type =" textarea" name = "description" value ="" placeholder ="description"> </p> 
             <p><input type = "file" name = "rimage" id ="rimage" size = 35 > </p>
             <p><input type="button" onclick="addingredient()" value="Add ingredient"></input></p>
             <p class="submit"> <input type="submit" name ="commit" value ="Add"></p>
            </div>
          </form>


         </div>
     <div style ="height:180px"></div>
    </div>
  </body>
</html>

<!-- <p> <input type ="text" name ="username" value ="" placeholder="username"> </p> -->


  