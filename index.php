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
<!-- header and nav bar section-->
    <header>
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
          <a class="nav-link" href="signin.php">login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Trajet.php">Trajet</a>
        </li>
      
       
        
      </ul>
    </div>
  </div>
</nav>
<!--img section-->

<div class="card bg-dark text-white">
  <img src="image/train.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h1 class="card-title">Voyagez avec WaTraveling et découvrez les Paysages époustouflants du Maroc!</h1>
    <a id="btn-cam" class="btn btn-outline-warning btn-lg" href="trajet.php">Achetez vos billets en ligne!</a>
  </div>
</div>

      
    

<!--card section-->
<div id="Lok" class="container-fluid">
<h2>Pourquoi WaTreaveling?</h2>
</div>
<div id="cardSection" class="container-fluid" ></div>
<div class="card-group">
  <div class="card">
    <img src="image/credit-card.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Achetez vos billet en toute sécurité!</h5>
      <p class="card-text">WaTraveling dispose des meilleurs Expert en cyber securite pour vous offrire une experience plus sécuriser</p>
     
    </div>
  </div>
  <div class="card">
    <img src="image\pexels-jérôme-nihcam-5193588.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Avec WaTreaveling Découvrez le glorieux Sahara Marocain!</h5>
      <p class="card-text">WaTraveling a un cathlogue de trajet immense qui vous ammenera découvrir les 4 coins du Glorieux Maroc.</p>
      
    </div>
  </div>
  <div class="card">
    <img src="image\vip.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Bénificiez de nos offres et remises VIP!</h5>
      <p class="card-text">Grace a WaTraveling Account vous pourriez beneficier des offres incomparables a travers l'année!</p>
     
    </div>
  </div>
</div>





























<!--footer section-->
<footer class="bg-dark text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    <h5 class="text-light">© 2021 Copyright:</h5>
    <a class="text-light" href="#">WaTreaveling</a>
    <a href="Dashboard/Dashboard.php">Admin Login</a>
  </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>