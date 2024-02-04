<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="font-size:14px;">




<section class="droit">
  <h1>MINISTERE DES MINES ET DES <br>&emsp;&emsp;&emsp;CARRIERES</h1>
  <p>&emsp;&emsp;&emsp;&emsp;------</p>
  <h1>SECRETARIAT GENERAL</h1>
  <p>&emsp;&emsp;&emsp;&emsp;------</p>
  <h1>DIRECTION GENERALE<br> DU CADASTRE MINIER</h1>
</section>

<section class="gauche">
  <h1>&emsp;BURKINA FASO</h1>
  <p>&emsp;&emsp;&emsp;&emsp;------</p>
  <h1>Unité-Progrès-Justice</h1><br>
  <h1>Ouagadougou, le <?php setlocale(LC_TIME, 'fr_FR.utf8','fra'); echo strftime('%d %b %Y'); ?></h1>
</section>


  <section class="milieu">
    <h1><u>BULLETIN DE LIQUIDATION N°<?php echo date('Y');?>/TS/<?php echo htmlspecialchars($_POST['type']); ?><?php echo (int)$_POST['annee']; ?>-<?php echo htmlspecialchars($_POST['bull']); ?></div></u></h1>
    <h2>DOIT: <?php echo htmlspecialchars($_POST['nom']); ?></div></h2>
    <h2><?php echo htmlspecialchars($_POST['adresse']); ?></h2>
    <h2>TEL: <?php echo (int)$_POST['tel']; ?></h2>
    <h1><u>SITUATION DES TAXES SUPERFICIAIRES</u></h1>
    <h4><strong>Période du <?php echo htmlspecialchars($_POST['cont']); ?></strong></h4>
  </section>

  

  <section class="info">

  <?php 
       
        if(1==$_POST['ancie']){
            $_POST['ancie']=2500;
            (float)$taxesup = (((float)$_POST['super']*(float)$_POST['ancie'])*((float)$_POST['jour']/(float)$_POST['nbjour']))+((float)$_POST['super']*(float)$_POST['ancie']*(((float)$_POST['nbjour']-(float)$_POST['jour'])/(float)$_POST['nbjour']));
        $taxecom = (($taxesup*20)/100);
        }
        elseif(2==$_POST['ancie']){
            $_POST['ancie']=3000;
            (float)$taxesup = (((float)$_POST['super']*(float)$_POST['ancie'])*((float)$_POST['jour']/(float)$_POST['nbjour']))+((float)$_POST['super']*(float)$_POST['ancie']*(((float)$_POST['nbjour']-(float)$_POST['jour'])/(float)$_POST['nbjour']));
        $taxecom = (($taxesup*20)/100);
        }
        elseif(3==$_POST['ancie']){
            $_POST['ancie']=3500;
            (float)$taxesup = (((float)$_POST['super']*(float)$_POST['ancie'])*((float)$_POST['jour']/(float)$_POST['nbjour']))+((float)$_POST['super']*(float)$_POST['ancie']*(((float)$_POST['nbjour']-(float)$_POST['jour'])/(float)$_POST['nbjour']));
        $taxecom = (($taxesup*20)/100);
        }
        elseif('plus'== $_POST['ancie']){
            $_POST['ancie']=4000;
            (float)$taxesup = (((float)$_POST['super']*(float)$_POST['ancie'])*((float)$_POST['jour']/(float)$_POST['nbjour']))+((float)$_POST['super']*(float)$_POST['ancie']*(((float)$_POST['nbjour']-(float)$_POST['jour'])/(float)$_POST['nbjour']));
        $taxecom = (($taxesup*20)/100);
        }
        
    ?>


    <h1>NOM DU PERMIS&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: &emsp;<?php echo htmlspecialchars($_POST['permis']); ?></h1>
    <h1>REGION &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: &emsp;<?php echo htmlspecialchars($_POST['region']); ?></h1> 
    <h1>COMMUNES IMPACTEES&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: &emsp;<?php echo htmlspecialchars($_POST['comm']); ?></h1>
    <h1>ACTE ADMINISTRATIF &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: &emsp;<?php echo (int)$_POST['annee']; ?>/<?php echo htmlspecialchars($_POST['bull']); ?>/<?php echo htmlspecialchars($_POST['acte']); ?></h1>
    <h1>TAXE SUPERFICIAIRE&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: &emsp;<?php echo $taxesup; ?></h1>
    <h1>TAXE REPARTIE ENTRE COMMUNE(S) (20%)&emsp;&emsp;:&emsp; <?php echo $taxecom; ?></h1>
  </section>
    



<section class="bas" style="font-size:18px;"  >

<br>
<p> &emsp;&emsp;&emsp;<strong>N.B.</strong> :



  <ul>

              <li> &emsp;&emsp;&emsp; Bulletin à présenter lors du paiement auprès du Régisseur de Recettes 
          du Ministère des Mines et des Carrières.
            </li><br>

        <li> &emsp;&emsp;&emsp;  Prière de transmettre une copie du paiement à la Direction
      Générale du Cadastre Minier (DGCM).
          </li><br>

        <li> &emsp;&emsp;&emsp; Délai de paiement : soixante (60) jours ouvrables à partir de la date 
de réception du présent bulletin.
        </li>

    </ul>                                                              
<br>                           


</p>

  


<p>&emsp;&emsp;&emsp;<u>Ampliations</u>:<br>
&emsp;&emsp;&emsp; 2- DGCM<br>
&emsp;&emsp;&emsp; 1- PS<br>
&emsp;&emsp;&emsp; 1- Régisseur</p>
</section>




<section class="end" style="font-size:21px;" >
  <p><em>Pour le Ministre des Mines et  des <br>  Carrieres et par deleguation, le<br> &emsp;&emsp;Secretaire Général</em>
  </p><br>

  <h3 id="boss"><u>Mabourlaye NOMBRE<u></h3> <br> <br>

  Chevalier de l'Ordre du Mérite Burkinabé

</section>



     <script>
       function blanc() {
         a = document.getElementById("pp")
         a.style.display = "none";
         //console.log(a)
       }
     </script>

     <a onclick="blanc()" id="pp" href="javascript:window.print();">
Imprimer

     </a>

</body>
</html>