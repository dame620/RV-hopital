<?php 
if(!empty($_post)){
    print_r($_post);
    
}
?>


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

    <title>hopital</title>

    <!-- Bootstrap core CSS -->
    <link href="rv.css" rel="stylesheet">

    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Rendez vous</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="register.php">nos service</a></li>
            <li><a href="login.php">infos</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!-- back ground color est contenu dans ce div-->
    <div class="p-3 mb-2 bg-warning text-dark">

    <div class="container">
<div class="row">
<div class="col-sm-12 col-md-6">

<h4> s'identifier </h4>

<form action="index.php?p=login" method="POST">

<label for="">login</label></br>
<input type="text" name="login" /> </br>

<label for="">Mot de pass</label> </br>
<input type="text" name="password" /> </br>

<input class="btn btn-success" type="submit" value="se connecter" />
</form>

</div>


    
<div class="col-md-4">
    
    <div class="form-group col-md-4">
    <h2>
 <label for="inputState">spécialité</label>
  </h2>
      <select id="inputState" class="form-control">
        <option selected>neurologie </option>
        <option>radiologie</option>
        <option>cardiologie</option>
        <option>dermatologie</option>
        <option>ophtalmologie</option>
        <option>nephrologie</option>
      </select>
    </div>
    </div>
    <div class="col-sm-12 col-md-6">

    <img src="data:image/jpeg;base64,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">

    </div>

    </div>
    </div>

    </div>
    
    <!--progress bar-->

    <div class="progress">
  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>
    
    </body>
    
    </html>
