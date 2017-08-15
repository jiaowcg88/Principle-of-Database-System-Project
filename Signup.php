<!DOCTYPE HTML>
<html lang = "en">
  <head>
  <meta charset = "utf-8">
  <title> Sign-up</title>
  <meta name ="viewport" content="width=device-width, initial-scale=1.0">
  <meta name ="description" content="">
  <link href = "css/bootstrap.min.css" rel ="stylesheet">
  </head>
  <body>
    <div class ="container" style="images/bg2.jpg">
      <ul>
         <a href="javascript:void(0)" onClick="window.location.href='homepage.php'" >Home</a>
      </ul>
      <div style="height:80px"> </div>
        <div class ="login" align="center">
          <form method ="post" action="check_Signup.php"
           <h1>Sign up </h1>
             <p> <input type ="text" name = "signup" value ="" placeholder ="Loginname"> </p>
             <p> <input type ="password" name ="password" value ="" placeholder="Password"> </p>
             <p> <input type ="text" name = "username" value ="" placeholder ="Username"> </p>
             <p> <input type ="text" name = "age" value="" placeholder ="Age"> </p>
             <p> <input type ="text" name ="gender" value ="" placeholder ="Gender"> </p>
             <p> <input type ="text" name ="city" value ="" placeholder ="City"> </p>
             <p> <input type ="text" name ="state" value ="" placeholder ="State"> </p>
             <p> <input type ="text" name ="country" value ="" placeholder ="Country"> </p>
             <p class ="remember_me">
               <!-- <label>
                 <input type ="checkbox" name ="remember_me" id ="remember_me">
                  Remember me on this computer
               </label> -->
             </p>
             <p class="submit"> <input type="submit" name ="commit" value ="Sign Up"></p>
          </form>
         </div>
     <div style ="height:180px"></div>
    </div>
  </body>
</html>




  