<?php require('./assets/components/header.php'); ?>

<div class="produitstext">
    <div class="produittext">
        <h2><strong>TITRE</strong></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignis-
            sim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est
            eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae,
            consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras</p>
    </div>
</div>
<div class="prodfinicont">

    <img src="https://fakeimg.pl/70x78/" class="card-img-top" id="imgprdfin" alt="...">
    <div class="parttext">
        <h2> PRODUIT REFERENCE X </h2><br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Sed non risus. Suspendisse lectus tortor, dignissim sit amet
        , adipiscing nec, ultricies sed, dolor. Cras elementum
        ultrices diam. Maecenas ligula massa, varius a, semper
        congue, euismod non, mi. Proin porttitor, orci nec nonummy
        molestie, enim est eleifend mi, non fermentum diam nisl
        <br><br>
        <h5> 1/ CHOIX DE LA (OU DES) COULEUR(S) <i class="fa-solid fa-sort-down"></i> </h5><br>
        <div class="ttflex">
            <div class="flex"> </div>
            <div class="flex"> </div>
            <div class="flex"> </div>
            <div class="flex"> </div>
            <div class="flex"> </div>
            <div class="flex"> </div>
            <div class="flex"> </div>
            <div class="flex"> </div>
            <div class="flex"> </div>
            <div class="flex"> </div>
            <div class="flex"> </div>
            <div class="flex"> </div>
            <div class="flex"> </div>
            <div class="flex"> </div>
            <div class="flex"> </div>
            <div class="flex"> </div>
            <div class="flex"> </div>
            <div class="flex"> </div>
            <div class="flex"> </div>
            <div class="flex"> </div>
            <div class="flex"> </div>
            <div class="flex"> </div>
            <div class="flex"> </div>
            <div class="flex"> </div>
            <div class="flex"> </div>
            <div class="flex"> </div>
        </div>
        <br><br>
        <h5> 2/ ZONE(S) DE MARQUAGE(S) <i class="fa-solid fa-sort-down"></i> </h5><br>
        <div class="ttmarquage">
            <img src="./assets/images/coeur.png" class="marquage" alt="...">
            <img src="./assets/images/inverseCoeur.png" class="marquage" alt="...">
            <img src="./assets/images/faceAvant.png" class="marquage" alt="...">
            <img src="./assets/images/hautDuDos.png" class="marquage" alt="...">
            <img src="./assets/images/dosGrandFormat.png" class="marquage" alt="...">
            <img src="./assets/images/epauleGauche.png" class="marquage" alt="...">
            <img src="./assets/images/epauleDroite.png" class="marquage" alt="...">
            <img src="./assets/images/interieurCol.png" class="marquage" alt="...">
        </div>
        <br><br>
        <h5> 3/ TECHNIQUE(S) DE MARQUAGE(S) <i class="fa-solid fa-sort-down"></i> </h5><br>
        <div class="techmarquage">
            <img src="./assets/images/impression.png" class="marquage" alt="...">
            <img src="./assets/images/broderie.png" class="marquage" alt="...">
        </div>
        <br><br>
        <h5> 4/ QUANTITÉS <i class="fa-solid fa-sort-down"></i> </h5><br>
        <div class="qtmarquage">
            <div class="quantiti"> >5 </div>
            <div class="quantiti"> >10 </div>
            <div class="quantiti"> >20 </div>
            <div class="quantiti"> >50 </div>
            <div class="quantiti"> >100 </div>
            <div class="quantiti"> >200 </div>
        </div>
    </div>
</div>
<button class="button" data-modal="modalOne">AJOUTER A MA DEMANDE DE DEVIS</button>
    <div id="modalOne" class="modal">
      <div class="modal-content">
        <div class="contact-form">
          <a class="close">&times;</a>
          <form class="module"action="/" méthode ="post" >
            <h2>DEMANDE DE DEVIS</h2>
            <div class="mod">
              <input class="fname" type="text" name="name" placeholder="Nom" />
              <input type="email" name="name" placeholder="Email" />
              <input type="tel" name="name" placeholder="Numéro de téléphone" />
            </div>
            <span>Message</span>
            <div>
              <textarea rows="4" placeholder="Des précisions ?..." ></textarea>
            </div>
            <button type="submit" href="/">Envoyer</button>
          </form>
        </div>
      </div>
    </div>

<?php require('./assets/components/footer.php'); ?>