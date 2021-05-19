<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style/styling.css" >
    <title>WaTreaveling</title>
</head>
<body>
<?php
include_once './voyage.php';
include_once './billet.php';
session_start();
if(isset($_SESSION['slog']))
{
  header("location:reservation.php");
}
?>



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
       
        
      </ul>
    </div>
  </div>
</nav>
<form action="trajet.php" method="POST" >
<div class="container">
            <div class="row"> 
                 <section  class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                      <div  style="padding-top:15%;font-size: 60px;text-align: center">
                          <h2><strong>Liste des Trajets</strong></h2>
            Choisir une Ville de départ: <select class="form-control" name="vdp">
            <?php 

            include_once './voyage.php';
            
            $r=VILLE::GetvilleDep();

            while ($row=$r->fetch()){
                  echo"<option>$row[0]</option>";


            }
          
            ?>

                  
            
            
            </select>
            Choisir une Ville d'arrivée: <select class="form-control" name="vda">
            
            <?php 

include_once './voyage.php';

$r=VILLE::GetvilleARR();

while ($row=$r->fetch()){
      echo"<option>$row[0]</option>";


}

 


?>
            </select>
            
            
            
            <input type="submit" class="btn btn-info mt-3"  name="action"   value="Afficher"/>
                     </div>
                 </section>
            </div>
  </div>
</form>
 


  <div class="container mt-4">
            <div class="row">
                
                
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Code voyage</th>
                      <th>Départ</th>
                      <th>Arrivée</th>
                      <th>Prix</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                  
                  <?php 
                  include_once './voyage.php';

                  if(!empty($_POST['action']))
                    {
                      $VDP=$_POST['vdp'];
                      $VARR=$_POST['vda'];
                     
                $cur=trajet::GeTvoyage($VDP,$VARR);
                while($row = $cur->fetch()) 
                {
                    echo"<tr>";
                    echo"<td>$row[0]</td>";
                    echo"<td>$row[2]</td>";
                    echo"<td>$row[4]</td>";
                    echo"<td>$row[5]</td>";
                    echo"<td><a href='reservation.php' class='btn btn-info'>Book</a></td>";
                    echo"</tr>";
                  }
                  $cur->closeCursor();
                    } 
                    
                  
                  ?>
              
                      
                  </tbody>
                </table>
            </div>
        </div>



<!--footer section-->
<footer id="warok" class="bg-dark text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    <h5 class="text-light">© 2020 Copyright:</h5>
    <a class="text-light" href="https://mdbootstrap.com/">WaTreaveling</a>
  </div>
  <style>
  #warok
  {
    position:absolute;
    width:100%;
    bottom:0px;
  }
  </style>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>


</body>
</html>