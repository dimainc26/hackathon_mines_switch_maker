<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/copie.css">
    <title>Etablissement de contrat</title>
  </head>
  <body>
    
    <div class="corps">
        <div class="titre">
            <h1>Etablissement De Bulletin De Liquidation</h1> <br>
        </div>
        
    <form method="post" action="page.php">
    <div class="formulaire">
      <label for="inputState">Type de permis</label>
      <select id="inputState" class="form-control" name="type" >
        <option selected>Choisir...</option>
        <option>PR</option>
        <option>PEI</option>
        <option>PEA</option>
        <option>PESM</option>
      </select>
    </div>
    <div class="formulaire">
      <label for="acte">Acte administratifs</label>
      <select id="acte" class="form-control" name="acte" >
        <option selected>Choisir...</option>
        <option>MME/SG/DGMG</option>
        <option>MCE/SG/DGMGC</option>
      </select>
    </div>
    <div class="formulaire">
      <label >Nom</label> <br>
      <input type="text" placeholder="Société/ Nom/ Structure" class="formulaire" name="nom">
    </div>
    <div class="formulaire">
      <label >Anciennete</label>
      <select  class="form-control" name="ancie" type="text">
        <option selected>Nombre d'année</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>Plus</option>
      </select>
    </div>

    <div class="formulaire">
        <p>Deux derniers chiffres de l'année : <input type="number" placeholder="ex: 19 " class="formulaire" name="annee" /></p>
        <p>Numéro de téléphone : <br> <input type="text" placeholder="Votre numéro" class="formulaire" name="tel" /></p>
        <p>Superficie :         <br> <input type="int" placeholder=" En Kilo-mètres carré" class="formulaire" name="super" /></p>
        <p>Numéro du bulletin : <br> <input type="text" placeholder="ex: 4" class="formulaire" name="bull" /></p>
        <p>Période : <br> <input type="text" placeholder="ex: du JJ/MM/AAAA au JJ/MM/AAAA" class="formulaire" name="cont" /></p>
    </div>

    
    <div class="formulaire">
      <label >Région</label>
      <select  class="form-control" name="region" >
        <option selected>Choisir...</option>
        <option>Boucle du Mouhoun  </option>
        <option>Cascade</option>
        <option>Centre  </option>
        <option>Centre – Est  </option>
        <option>Centre Nord </option>
        <option>Centre- Ouest </option>
        <option>Centre Sud </option>
        <option>Est</option>
        <option>Haut Bassins</option>
        <option>Nord</option>
        <option>Plateau Central</option>
        <option>Sahel</option>
        <option>Sud -Ouest</option>
      </select>
    </div>

    <div class="formulaire">

        <p>Nom du permis : <br> <input type="text" placeholder="ex: Malinga" class="formulaire" name="permis" /></p>
        <p>Communes impactées : <br> <input type="text" placeholder="ex: Ouagadougou, Dori, etc." class="formulaire" name="comm" /></p>
        <p>Adresse : <br> <input type="text" placeholder="ex: Avenue Kwamé Kourma " class="formulaire" name="adresse" /></p>
        <p>Jour de debut : <br> <input type="text" placeholder="ex: 02" class="formulaire" name="jour" /></p>

    </div>

    
    <div class="formulaire">
      <label >Nombre de jour</label>
      <select  class="form-control"  name="nbjour" type="text" >
        <option selected>Choisir...</option>
        <option>365</option>
        <option>366</option>
      </select>
    </div>
   
    <p><input type="submit" class="bouton" id="cool"  value="Valider"></p>
    </form>

    </div>






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>