<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Simple Login Form</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="utf-8">
<style>
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
    .form-group
    {
      text-align: center;
      padding: 2%;
    }
</style>
</head>
<body>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">WaTreaveling</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="trajet.php">Trajet</a>
        </li>
        
        <li class="nav-item">
       
        
      </ul>
    </div>
  </div>
</nav>
<div class="login-form">
    <form action="signin.php" method="POST">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
        <input name="wa" type="text" class="form-control" placeholder="veuillez saisir votre mail" required>
        </div>
        <div class="form-group">
            <input type="password" name="pass" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <input type="submit" name="connection" value="Login" >
        </div>
        <div class="form-group">
           Don't have an account <a href="Register.php">Sign up here.</a>
        </div>
        
    </form>
    
</div>




<?php 

include_once './voyageur.php';

  if(!empty($_POST['connection']))
    {
        $login=$_POST['wa'];
        $pass=$_POST['pass'];
        
       $r=voyageur::checkuser($login,$pass);
       if($r==0)
       {
               echo"login ou pass inccorecct";
       }
           else   {

               session_start();

               $_SESSION['slog']= $login;
               header("location:reservation.php");
               
           }


    }

?>
</body>
</html>                                		