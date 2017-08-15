<!DOCTYPE HTML>
<html lang = "en">
  <head>
  <meta charset = "utf-8">
  <title> Login Page</title>
  <meta name ="viewport" content="width=device-width, initial-scale=1.0">
  <meta name ="description" content="">
  <link href = "css/bootstrap.min.css" rel ="stylesheet">
  
  </head>
  <body>
    <div class ="container" style="images/bg2.jpg">
      <div style="height:40px" align = "right"> </div>
      <ul>
         <a href="javascript:void(0)" onClick="window.location.href='homepage.php'">Home</a>
      </ul>
        <div class ="login" align="center">
          <form method ="post" action="check_user-pass.php"   
           <h1>Login to Web</h1>
             <p> <input type ="text" name = "username" value ="" placeholder ="loginname"> </p>
             <p> <input type ="password" name ="password" value ="" placeholder="Password"> </p>
             <p class ="remember_me">
               <label>
                 <input type ="checkbox" name ="remember_me" id ="remember_me">
                  Remember me on this computer
               </label>
             </p>
             <p class="submit"> <input type="submit" name ="commit" value ="Login"></p>
          </form>
         </div>
     <div style ="height:180px"></div>
    </div>
  </body>
</html>




  