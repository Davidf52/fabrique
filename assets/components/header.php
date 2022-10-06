<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="MyFontsWebfontsKit.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/style/ssstyle.css">
</head>

<body>
  <div class="top">
    <div class="topUn">Un projet, une question ? Contactez-nous au 03 83 64 63 82</div>
    <div class="topDeux">PROFESSIONNELS, ASSOCIATIONS <span id="motJaune">& REVENDEURS</span></div>
  </div>
  <div class="flexHeader">
    <div>
      <nav class="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php" id="imgHeader">
            <img src="./assets/images/LOGO LA FABRIQUE TEXTILE.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
          </a>
        </div>
    </div>
    <div>
      <form class="d-flex" role="search">
        <input id="barre" class="form-control me-2" type="search" placeholder="Recherche rapide" aria-label="Search">
        <input id="tailleloupe" type="image" src="./assets/images/loupe site la fabrique textile.png" href="#">
      </form>
    </div>
    </nav>
  </div>

 
  <!-- les deux parties séparées  -->
  <div id="menuNav">
    <nav class="navbar navbar-expand-lg nav nav-tabs" class="laNave" style="width: 90%;">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavDropdown" id="barreNav">
          <ul class="navbar-nav" style="width: 100% ;">
            <div class="flexNav">
              <li class="nav-item dropdown" style="width: 20%;">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="produits.php" role="button" aria-expanded="false">NOS PRODUITS</a>
                <ul class="dropdown-menu" style="background-color: #333333;">
                  <li><a class="dropdown-item" href="produits.php">Produits</a></li>
                  <li><a class="dropdown-item" href="sousProduits.php">Sous produits</a></li>
                  <li><a class="dropdown-item" href="produitUnitaire.php">Produit fini</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="produitsEurope.php">Produits Europe</a></li>
                  <li><a class="dropdown-item" href="produitsfiniEurope.php">Produits finis Europe</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>

              <li class="nav-item" style="width: 20%;">
                <a class="nav-link" href="/decouvrir.php">
                    <div class="tardLol">
                      <div class="petitMotNav">
                        DÉCOUVRIR
                      </div> 
                      <div id="tard">
                        LA FABRIQUE
                      </div> 
                    </div>
                </a>
              </li>

            <li class="nav-item" style="width: 20%;">
              <a class="nav-link" href="nostechniques.php"><span class="petitMotNav">NOS</span> <br> TECHNIQUES <span class="petitMotNav">DE MARQUAGE</span> </a>
            </li>
            <li class="nav-item" style="width: 20%;">
              <a class="nav-link" href="#"> <span class="petitMotNav">NOS</span> <br> MARQUES</a>
            </li>
            <li class="nav-item" id="fabriqueSpe" style="width: 20%;"> 
              <a class="nav-link" href="#">FABRICATION SPÉCIALE <br><span class="petitMotNav"> MADE IN EUROPE</span></a>
            </li>
        </div>
        </ul>
      </div>
  </div>
  </nav>
  </div>

  <div class="imgheader">
    <div class="imgheadertxt">
      <span>HABILLER VOTRE <br>EQUIPE</span>
      <p>Habillez et valorisez vos collaborateurs en leur offrant des vêtements<br> de grande qualité personnalisés avec votre logo. </p><br>
      <button id="btn" type="button"> S'ÉQUIPER </button>
    </div>
  </div>