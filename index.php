<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>AgenceTourix</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <?php
	        include('header.php');
	      ?>
    </head>
    <body>
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/maldives.jpg" class="d-block w-100" alt="Image des Maldives">
          </div>
          <div class="carousel-item">
            <img src="images/canada.jpg" class="d-block w-100" alt="Image du Canada">
          </div>
          <div class="carousel-item">
            <img src="images/seychelles.jpg" class="d-block w-100" alt="Image des Seychelles">
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button> 
        </div>
      </div>
    </div>
  </div>
  <br/><br/><br/><br/>
  <h3><center><span>Diff??rents Voyages :</span></center></h3>
  <br/>
  <center>
  <div class="row">
    <div class="col-12 col-md-4">
      <div class="bg-white rounded shadow-sm"><img src="platForestier.jpg" alt="" class="img-fluid card-img-top">
        <div class="p-4">
          <h5> <a class="text-dark">Maldive</a></h5>
          <p class="small text-muted mb-0">Partez en vacances aux Maldives ! Cet archipel paradisiaque de plus de 1 000 ??les envo??tantes est la promesse d???un merveilleux voyage. A vous les plages de sable blanc, que ce soit pour votre voyage de noce aux Maldives, ou tout simplement pour vous !</p>
          <br/>
          <div class="d-flex justify-content-center bg-light p-3 border">
            Liste des ??tapes :<br/>
            - Atmosphere Kanifushi<br/>
            - Meerufenfuchi<br/>
            - Maalefushi<br/>
            - Mal?? Atoll<br/>
          </div>
          <br/>
          <a href="maldives.php" class="btn btn-dark">En d??couvrir davantage</a>
        </div>
      </div>
    </div>
      <div class="col-12 col-md-4">
        <div class="bg-white rounded shadow-sm"><img src="platPaupiette.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a class="text-dark">Canada</a></h5>
            <p class="small text-muted mb-0">Un voyage au Canada comble les d??sirs de nature et de grands espaces, de d??couverte et des sensations fortes, d???hospitalit?? et d???authenticit??. Que de contrastes dans le 2e plus grand pays de la plan??te apr??s la Russie, d??ploy?? de l???oc??an Pacifique ?? l'Atlantique !</p>
            <br/>
            <div class="d-flex justify-content-center bg-light p-3 border">
              Liste des ??tapes :<br/>              
              - Fairmont le Ch??teau Frontenac<br/>
              - Mus??e royale de l'Ontanrio<br/>
              - Stanley park<br/>
              - Tour du CN<br/>
            </div>
            <br/>
            <a href="canada.php" class="btn btn-dark">En d??couvrir davantage</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="bg-green rounded shadow-sm"><img src="platRiz.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a class="text-dark">Seychelles</a></h5>
            <p class="small text-muted mb-0">Un s??jour dans l'archipel garantit une nature ??poustouflante, adapt??e aux plaisirs de la randonn??e et aux loisirs nautiques. Une vaste gamme d'activit??s se pratique aux Seychelles, du golf ?? la p??che au gros, en passant par la plong??e libre et la plong??e bouteille !</p>
            <br/>
            <div class="d-flex justify-content-center bg-light p-3 border">
                Liste des ??tapes :<br/>
                - ??le de fr??gate<br/>
                - Anse source d'argent<br/>
                - La digue<br/>
                - ??le du nord<br/>
            </div>
            <br/>
            <a href="seychelles.php" class="btn btn-dark">En d??couvrir davantage</a>
          </div>
        </div>
      </div>
    </div>
  </center>
  <br/> <br/> 
</body>
  <?php
      include('footer.php')
  ?>
</html>