<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>WaTreaveling</title>
</head>
<body>
<!-- header and nav bar section-->
    <header>
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
          <a class="nav-link" href="signin.php">login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Trajet.php">Tajet</a>
        </li>
        <li class="nav-item">
       
        
      </ul>
    </div>
  </div>
</nav>
<!--img section-->


 
<style>
	body {
		color: #999;
		background: #f3f3f3;
		font-family: 'Roboto', sans-serif;
	}
    .form-control {
		border-color: #eee;
        min-height: 41px;
		box-shadow: none !important;
	}
    .form-control:focus {
		border-color: #5cd3b4;
	}
    .form-control, .btn {        
        border-radius: 3px;
    }
	.signup-form {
		width: 500px;
		margin: 0 auto;
		padding: 30px 0;
	}
    .signup-form h2 {
		color: #333;
        margin: 0 0 30px 0;
		display: inline-block;
		padding: 0 30px 10px 0;
		border-bottom: 3px solid #5cd3b4;
    }
    .signup-form form {
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group {
		margin-bottom: 20px;
	}
	.signup-form label {
		font-weight: normal;
		font-size: 13px;
	}
    .signup-form input[type="checkbox"] {
		margin-top: 2px;
	}
    .signup-form .btn {        
        font-size: 16px;
        font-weight: bold;
		background: #5cd3b4;
		border: none;
		margin-top: 20px;
		min-width: 140px;
    }
	.signup-form .btn:hover, .signup-form .btn:focus {
		background: #41cba9;
        outline: none !important;
	}
    .signup-form a {
		color: #5cd3b4;
		text-decoration: underline;
	}
	.signup-form a:hover {
		text-decoration: none;
	}
    .signup-form form a {
		color: #5cd3b4;
		text-decoration: none;
	}	
	.signup-form form a:hover {
		text-decoration: underline;
	}
</style>
</head>
<body>
<div class="signup-form">
    <form action="Register.php" method="POST" class="form-horizontal">
		<div class="col-xs-8 col-xs-offset-4">
			<h2>Sign Up</h2>
		</div>		
        <div class="form-group">
			<label class="control-label col-xs-4">nom</label>
			<div class="col-xs-8">
                <input type="text" class="form-control" name="nom" required="required">
            </div>        	
        </div>
        <div class="form-group">
			<label class="control-label col-xs-4">prenom</label>
			<div class="col-xs-8">
                <input type="text" class="form-control" name="prenom" required="required">
            </div>        	
        </div>
		<div class="form-group">
			<label class="control-label col-xs-4">Email Address</label>
			<div class="col-xs-8">
                <input type="email" class="form-control" name="email" required="required">
            </div>        	
        </div>
		<div class="form-group">
			<label class="control-label col-xs-4">Password</label>
			<div class="col-xs-8">
                <input type="password" class="form-control" name="password" required="required">
            </div>        	
        </div>
        <div class="form-group">
			<label class="control-label col-xs-4">Date de naissance</label>
			<div class="col-xs-8">
                <input type="date" class="form-control" name="dateN" required="required">
            </div>        	
        </div>
        
		<div class="form-group">
			<label class="control-label col-xs-4">Téléphone</label>
			<div class="col-xs-8">
                <input type="text" class="form-control" name="telephone" required="required">
            </div>        	
        </div>
		<div class="form-group">
			<div class="col-xs-8 col-xs-offset-4">
				<p><label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a>.</label></p>
				<input type="submit" name="register" value="register" class="btn btn-primary btn-lg">
			</div>  
		</div>		      
    </form>
	<div class="text-center">Already have an account? <a href="signin.php">Login here</a></div>
</div>
</body>
</html>
<?php 
      include_once './voyageur.php';

      if(!empty($_POST['register']))
      {
               $nom=$_POST['nom'];
               $email=$_POST['email'];
               $prenom=$_POST['prenom'];
               $password=$_POST['password'];
               $telephone=$_POST['telephone'];
               $dateN=$_POST['dateN'];

              $r= voyageur::addTraveler($email,$password,$nom,$prenom,$dateN,$telephone);

              if($r!=0)
              {
                  echo "<script>alert('Merci pour votre inscription')</script>";
                  
              }


      }






?>

</body>
</html>
    
  