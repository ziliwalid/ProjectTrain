<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Confirmation</title>
</head>
<body>
<?php
include_once './voyage.php';
include_once './billet.php';
session_start();
if(empty($_SESSION['slog']))
{
  header("location:signin.php");
}







?>


<!--nav bar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">WaTreaveling</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Trajet.php">Tajet</a>
        </li>
        <li class="nav-item">
       
        
      </ul>
    </div>
  </div>
</nav>
<!--fin nav bar-->
<?php 
include_once './voyage.php';

$codeVoyage=$_POST['cv'];
$dateVoyage=$_POST['dateV'];
$nombrePlace=$_POST['nombreTicket'];
$email=$_SESSION['slog'];

$prix=trajet::getprix($codeVoyage);
$total=$prix * $nombrePlace;

    

?>

<!--paiment-->
<div class="col-md-6 offset-md-3">
                    <span class="anchor" id="formPayment"></span>
                    <hr class="my-5">

                    <!-- form card cc payment -->
                    <div class="card card-outline-secondary">
                        <div class="card-body">
                            <h3 class="text-center">Credit Card Payment</h3>
                            <hr>
                            <div class="alert alert-info p-2 pb-3">
                                <a class="close font-weight-normal initialism" data-dismiss="alert" href="#"><samp>×</samp></a> 
                                CVC code is required.
                            </div>
                            <!--form-->
                            <form action="Facture.php" method="POST">
                            
                            <input type="hidden" name="email"       value="<?php echo $email; ?>">
                            <input type="hidden" name="codeVoyage"  value="<?php echo $codeVoyage; ?>">
                            <input type="hidden" name="dateVoyage"  value="<?php echo $dateVoyage; ?>">
                            <input type="hidden" name="nombrePlace" value="<?php echo $nombrePlace; ?>">

                                <div class="form-group">
                                <!--Card user name-->
                                    <label for="cc_name">Card Holder's Name</label>
                                    <input type="text" class="form-control" name="detenteur" title="First and last name" required="required">
                                </div>
                                <!--Card number -->
                                <div class="form-group">
                                    <label>Card Number</label>
                                    <input type="text" class="form-control" name="CardNum" autocomplete="off" maxlength="20" pattern="\d{16}" title="Credit card number" required="">
                                </div>
                                <!--Card ExpDate -->
                                <div class="form-group row">
                                    <label class="col-md-12">Card Exp. Date</label>
                                    <div class="col-md-4">
                                        <select class="form-control" name="MOIexp" size="0">
                                            <?php 
                                            for($i=1;  $i<= 12; $i++) {
                                                echo"<option value='$i'>$i</option>";
                                            }
                                        
                                            ?>
                                       </select>    
                                    
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control" name="ANNexp" size="0">
                                           <?php 
                                           for ($i=2020 ; $i<=2022; $i++) { 
                                                echo"<option value='$i'>$i</option>";
                                           }
                                           
                                           
                                           ?>
                                        </select>
                                    </div>
                                    <!--card code-->
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" autocomplete="off" name="crypto" maxlength="3" pattern="\d{3}" title="Three digits at back of your card"  placeholder="CVC" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-12">Amount</label>
                                </div>
                                <div class="form-inline">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"></span></div>
                                        <input type="text" class="form-control text-right" value="<?php echo "$total"; ?>" id="exampleInputAmount" readonly>
                                        <div class="input-group-append"><span class="input-group-text"></span></div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <button type="reset" class="btn btn-default btn-lg btn-block">Annuler</button>
                                    </div>
                                    <div class="col-md-6">
                                    <!--action input-->
                                        <input type="submit" name="connection" value="réserver" class="btn btn-success btn-lg btn-block">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    












<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>