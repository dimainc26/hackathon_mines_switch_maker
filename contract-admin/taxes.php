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
                                    TS
                                </a>
                                <a class="nav-link" href="#">
                                    <div class="sb-nav-link-icon"></div>
                                    FDML
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
<!-- Contenu de la page -->

<script type="text/javascript">
    function mine() {
       var somme = document.getElementById("in").value;
       var nb = document.getElementById("nbin").value;
      
       var vingt,commune,region,etat,local;
       vingt = somme * 0.1;
       etat = vingt * 0.8;
       local = vingt - etat;
       commune = local * 0.9;
       region = local - commune;

       /*if (nb == 1) {
        chaque = document.write("Somme versée à la Commune : ");
       }
       else{
        chaque = document.write("Somme versée à chaque Commune : ");
       }*/
       //alert("La recette de la mine : " + somme + "20% de la recette : " + vingt);
      // document.getElementById("sommeid").innerHTML=somme;
       document.getElementById("vingtid").innerHTML=vingt;
       document.getElementById("communeid").innerHTML=commune;
      //document.getElementById("regionid").value=region;
       document.getElementById("etatid").innerHTML=etat;
       //document.getElementById("nbid").innerHTML=nb;
       document.getElementById("regionid").innerHTML=region;
      
      // document.getElementById("sommeid").innerHTML=somme;
       /*document.getElementById(vingtid).value=(vingt);
       document.getElementById(communeid).value=(commune);
       document.getElementById(regionid).value=(region);*/
    }
  </script>

<script>
        function imprimer(printer) {
        var printContents = document.getElementById("printer").innerHTML;    
        var originalContents = document.body.innerHTML;      
        document.body.innerHTML = printContents;     
         window.print();     
         document.body.innerHTML = originalContents;
   }
</script>

      <form > 
          <table>
            <h2>Etat Récapitulatif Des Sommes Accordées Aux Communes </h2>
            <tr><td><label>Saisir la valeur de la taxe : </label></td><td><input type="text" id="in"></td></tr>
          <tr><td><label>Nombre de communes impactées&emsp;&emsp;: </label></td><td><input size="3" type="text" id="nbin"></td></tr>
          <tr><td><input type="button" value="Approuver" onclick="mine();"></td></tr>
          </table>
          <table id="printer"  border="0">
          <strong><tr style="font-size: 18px"><td><label>Bénéficiaires</label></td><td>Montant en Franc CFA</td></tr></strong>    

          <h2>Répartition Automatique Des Fonds</h2>
         

          <tr><td><label>Fond Minier De Développement Local : </label></td><td><div id="vingtid"></div></td></tr>
          <tr><td><label>Somme Versée A L'Etat : </label></td><td> 
            <div id="etatid"></div>
          <!--  <input type="text" id=""> -->
          </td></tr>
          
          <tr><td><label>Somme Versée Aux Communes Impactées : </label></td><td><div id="communeid"></div></td></tr>
          <tr><td><label>Somme Versée Aux Régions :  </label></td><td ><div id="regionid"></div></td></tr>
          <tr>

          <td><button onclick="imprimer();">Imprimer</button></td>

          </tr>
          </table> 
        
      </form>
      <div id='sectionAimprimer'></div>


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
