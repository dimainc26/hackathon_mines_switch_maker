<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="dist/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <style>
            .card1{
                background-color: rgb(255, 217, 0);
            }
            .card2{
                background-color: rgb(255, 196, 0);
            }
            .card3{
                background-color: rgb(255, 166, 0);
            }
            .card4{
                background-color: #cf8804;
            }
            .card-body{
                font-size: x-large;
            }
            .chart1{
                width: 100%;
            }
        </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">E-race</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Parametres</a>
                        <a class="dropdown-item" href="#">Journal d'activite</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Se déconnecter</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Tableau de bord
                            </a>
                            <div class="sb-sidenav-menu-heading">MENU</div>
                            
                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Traitement
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <a class="nav-link" href="../index.php">
                                    <div class="sb-nav-link-icon"></div>
                                    FMDL
                                </a>
                                <a class="nav-link" href="#">
                                    <div class="sb-nav-link-icon"></div>
                                    TS
                                </a>
                                <a class="nav-link" href="#">
                                    <div class="sb-nav-link-icon"></div>
                                    Listes des communes
                                </a>
                            </div>
                          
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Connecter en tant que: Cadastre </div>
                       
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
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
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
