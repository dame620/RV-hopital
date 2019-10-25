
<!doctype html>
<html lang="en">
   <head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/starter-template/">

    <!-- link to  style.css -->

    <link rel="stylesheet" href="style.css" type="text/css"/>
    <!-- Bootstrap core CSS -->
    <link href="rvhop.css" rel="stylesheet">
       <title>user login and registration</title>
   </head>


   <body>
     <div class="container">
         <div class="login-box">
       <div class="row">
       <!-- debut premier colone -->
         <div class="col-md-6" login-left>
         <?php
//ici on lui dit que si cette variable erreur existe alors affiche mw ce message d'erreur
if(isset($_GET['erreur']) && $_GET['erreur']==1){
   echo "<h4> login ou mot de pass incorrect</h4>";
}

?>
           <h2> login here</h2>

           <form action="validation.php" method="POST">

              <div class="form-group">

                 <label>username</label>
                 <input type="text" name="user" class="form-control" required>

              </div>


              <div class="form-group">

                 <label>password</label>
                 <input type="password" name="password" class="form-control" required>

              </div>
              <button class="btn btn-success" type="submit"> login </button>

           </form>
         </div>
<!-- fin de la premiere d'un colone -->
<!-- debut dexieme colone -->
         <div class="col-md-6" login-right>

          <h2> register here</h2>
          <form action="registration.php" method="POST">

            <div class="form-group">

              <label>username</label>
              <input type="text" name="user" class="form-control" required>

            </div>


           <div class="form-group">

            <label>password</label>
             <input type="password" name="password" class="form-control" required>

          </div>
          <button class="btn btn-success" type="submit"> register </button>

   </form>
   </div>
   <!-- fin de la deuxieme  d'un colone -->


       </div> <!-- fermeture du div class row  -->
       </div>

     </div>
   </body>
    
</html>