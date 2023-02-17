<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style css pour php.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class='contenaire'>
      <p>
        Hello
           <span class='couleurnom'>
              <?php
              $mail = "";
              $nom = "";

              function securisation($donner){
                 $donner = trim($donner);
                 $donner = stripcslashes($donner);
                 $donner = strip_tags($donner);
                 return $donner;
              }
              $mail = securisation($_POST['mail']);
              $nom = securisation ($_POST['nom']);

              echo 'Monsieur:'.$nom. '</br>';
              echo 'ton mail:' .$mail;
              ?>
           </span>
             a belle et bien été pris en consideration. 
       </p>
       <img src="image de mon site/sourire (1).png" alt="" class="imagform">
    </div>
    <div class="lien-rapide">
        <div class="alignement">
            <div class="contrastes">
                 <div class="haut-page">
                            <a href="Mbomez.html">
                                <img src="image de mon site/tpp.png" alt="haut de la page">
                            </a>
                  </div>
                 <div class="lestrois-boutton">
                            <div class="start-lien">
                                <a href="index ui ux.html">
                                 <span> UI/UX</span>    
                                </a>
                            </div>
                            <div class="start-lien">
                                <a href="indexformulaire.html"> 
                                    <span> Start</span>
                                </a>
                            </div>
                            <div class="start-lien">
                                <a href="Mbomez NFT.html">
                                    <span>sites vitrine</span>
                                </a>
                            </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>