<?php
// Your PHP code goes here
$title = "Home";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/mulish" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $title ?></title>
</head>
<body>
    <div class="concuPourVous">
        <div class="title">
            <div class="greencircle"></div>
            <div class="spacecol"></div>
            <h1 class="titlesection">Conçu pour vous</h1>
        </div>
        <div class="container">
            <!-- première ligne -->
            <div class="row">
                <div class="showMoreAboutSeller" id="sellerinfo1">
                    <div class="close" onclick="close('sellerinfo1')">
                        <i class="fa fa-times"></i>
                    </div>
                    <div class="photoProfil">
                        <img src="images.jpg" alt="photoprofil">
                    </div>
                    <div class="identifiant">
                        <p class="nom enGras">
                            Tojo Raharisoa 
                        </p>
                        <p class="email">
                            tojoraharisoa12@gmail.com
                        </p>
                    </div>
                    <div class="titleAproposSeller">
                        <h1 class="aboutSeller">A propos du vendeur</h1>
                        <div class="NOM">
                            <p class="noms">
                                Nom : RAHARISOA Tojo
                            </p>
                        </div>
                        <div class="EMAIL">
                            <p class="emails">
                                Email :
                            </p>
                            <a href="mailto:" class="mail">
                                tojoraharisoa12@gmail.com
                            </a>
                        </div>
                        <div class="TEL">
                            <p class="tels">
                                Telephone : +261 34 37 572 13
                            </p>                            
                        </div>
                    </div>
                    <div class="bottomShowMoreAboutSeller">
                        <div class="close">
                            <i class="fa fa-times"></i>
                        </div>
                        <div class="boxBottomSMAS">
                            <p class="descriptionCommande">
                                DESCRIPTION DE VOTRE COMMANDE
                            </p>
                            <p class="titleDescription">
                                Engrais Naturel (Compost)
                            </p>
                            <p class="txtDescriptionCommande">
                                Compost 100% naturel, enrichi en nutriments essentiels pour améliorer la qualité du sol et augmenter les rendements agricoles.
                            </p>
                            <p class="prix">
                                <span class="enGras">Prix :</span> 12 000 Ar/sac de 25 kg
                            </p>
                            <p class="Livraison">
                                <span class="enGras">Livraison Disponible :</span> Disponible en gros et au détail.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="showMoreAboutSeller" id="sellerinfo2">
                    <!-- <div class="close" onclick="close('sellerinfo1')">
                        <i class="fa fa-times"></i>
                    </div> -->
                    <div class="photoProfil">
                        <img src="images.jpg" alt="photoprofil">
                    </div>
                    <div class="identifiant">
                        <p class="nom enGras">
                            Tojo Raharisoa 
                        </p>
                        <p class="email">
                            tojoraharisoa12@gmail.com
                        </p>
                    </div>
                    <div class="titleAproposSeller">
                        <h1 class="aboutSeller">A propos du vendeur</h1>
                        <div class="NOM">
                            <p class="noms">
                                Nom : RAHARISOA Tojo
                            </p>
                        </div>
                        <div class="EMAIL">
                            <p class="emails">
                                Email :
                            </p>
                            <a href="mailto:" class="mail">
                                tojoraharisoa12@gmail.com
                            </a>
                        </div>
                        <div class="TEL">
                            <p class="tels">
                                Telephone : +261 34 37 572 13
                            </p>                            
                        </div>
                    </div>
                    <div class="bottomShowMoreAboutSeller">
                        <div class="close">
                            <i class="fa fa-times"></i>
                        </div>
                        <div class="boxBottomSMAS">
                            <p class="descriptionCommande">
                                DESCRIPTION DE VOTRE COMMANDE
                            </p>
                            <p class="titleDescription">
                                Engrais Naturel (Compost)
                            </p>
                            <p class="txtDescriptionCommande">
                                Compost 100% naturel, enrichi en nutriments essentiels pour améliorer la qualité du sol et augmenter les rendements agricoles.
                            </p>
                            <p class="prix">
                                <span class="enGras">Prix :</span> 12 000 Ar/sac de 25 kg
                            </p>
                            <p class="Livraison">
                                <span class="enGras">Livraison Disponible :</span> Disponible en gros et au détail.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="showMoreAboutSeller" id="sellerinfo3">
                    <!-- <div class="close" onclick="close('sellerinfo1')">
                        <i class="fa fa-times"></i>
                    </div> -->
                    <div class="photoProfil">
                        <img src="images.jpg" alt="photoprofil">
                    </div>
                    <div class="identifiant">
                        <p class="nom enGras">
                            Tojo Raharisoa 
                        </p>
                        <p class="email">
                            tojoraharisoa12@gmail.com
                        </p>
                    </div>
                    <div class="titleAproposSeller">
                        <h1 class="aboutSeller">A propos du vendeur</h1>
                        <div class="NOM">
                            <p class="noms">
                                Nom : RAHARISOA Tojo
                            </p>
                        </div>
                        <div class="EMAIL">
                            <p class="emails">
                                Email :
                            </p>
                            <a href="mailto:" class="mail">
                                tojoraharisoa12@gmail.com
                            </a>
                        </div>
                        <div class="TEL">
                            <p class="tels">
                                Telephone : +261 34 37 572 13
                            </p>                            
                        </div>
                    </div>
                    <div class="bottomShowMoreAboutSeller">
                        <div class="close">
                            <i class="fa fa-times"></i>
                        </div>
                        <div class="boxBottomSMAS">
                            <p class="descriptionCommande">
                                DESCRIPTION DE VOTRE COMMANDE
                            </p>
                            <p class="titleDescription">
                                Engrais Naturel (Compost)
                            </p>
                            <p class="txtDescriptionCommande">
                                Compost 100% naturel, enrichi en nutriments essentiels pour améliorer la qualité du sol et augmenter les rendements agricoles.
                            </p>
                            <p class="prix">
                                <span class="enGras">Prix :</span> 12 000 Ar/sac de 25 kg
                            </p>
                            <p class="Livraison">
                                <span class="enGras">Livraison Disponible :</span> Disponible en gros et au détail.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="showMoreAboutSeller" id="sellerinfo4">
                    <!-- <div class="close" onclick="close('sellerinfo1')">
                        <i class="fa fa-times"></i>
                    </div> -->
                    <div class="photoProfil">
                        <img src="images.jpg" alt="photoprofil">
                    </div>
                    <div class="identifiant">
                        <p class="nom enGras">
                            Tojo Raharisoa 
                        </p>
                        <p class="email">
                            tojoraharisoa12@gmail.com
                        </p>
                    </div>
                    <div class="titleAproposSeller">
                        <h1 class="aboutSeller">A propos du vendeur</h1>
                        <div class="NOM">
                            <p class="noms">
                                Nom : RAHARISOA Tojo
                            </p>
                        </div>
                        <div class="EMAIL">
                            <p class="emails">
                                Email :
                            </p>
                            <a href="mailto:" class="mail">
                                tojoraharisoa12@gmail.com
                            </a>
                        </div>
                        <div class="TEL">
                            <p class="tels">
                                Telephone : +261 34 37 572 13
                            </p>                            
                        </div>
                    </div>
                    <div class="bottomShowMoreAboutSeller">
                        <div class="close">
                            <i class="fa fa-times"></i>
                        </div>
                        <div class="boxBottomSMAS">
                            <p class="descriptionCommande">
                                DESCRIPTION DE VOTRE COMMANDE
                            </p>
                            <p class="titleDescription">
                                Engrais Naturel (Compost)
                            </p>
                            <p class="txtDescriptionCommande">
                                Compost 100% naturel, enrichi en nutriments essentiels pour améliorer la qualité du sol et augmenter les rendements agricoles.
                            </p>
                            <p class="prix">
                                <span class="enGras">Prix :</span> 12 000 Ar/sac de 25 kg
                            </p>
                            <p class="Livraison">
                                <span class="enGras">Livraison Disponible :</span> Disponible en gros et au détail.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="showMoreAboutSeller" id="sellerinfo5">
                    <div class="close" onclick="close('sellerinfo1')">
                        <i class="fa fa-times"></i>
                    </div>
                    <div class="photoProfil">
                        <img src="images.jpg" alt="photoprofil">
                    </div>
                    <div class="identifiant">
                        <p class="nom enGras">
                            Tojo Raharisoa 
                        </p>
                        <p class="email">
                            tojoraharisoa12@gmail.com
                        </p>
                    </div>
                    <div class="titleAproposSeller">
                        <h1 class="aboutSeller">A propos du vendeur</h1>
                        <div class="NOM">
                            <p class="noms">
                                Nom : RAHARISOA Tojo
                            </p>
                        </div>
                        <div class="EMAIL">
                            <p class="emails">
                                Email :
                            </p>
                            <a href="mailto:" class="mail">
                                tojoraharisoa12@gmail.com
                            </a>
                        </div>
                        <div class="TEL">
                            <p class="tels">
                                Telephone : +261 34 37 572 13
                            </p>                            
                        </div>
                    </div>
                    <div class="bottomShowMoreAboutSeller">
                        <div class="close">
                            <i class="fa fa-times"></i>
                        </div>
                        <div class="boxBottomSMAS">
                            <p class="descriptionCommande">
                                DESCRIPTION DE VOTRE COMMANDE
                            </p>
                            <p class="titleDescription">
                                Engrais Naturel (Compost)
                            </p>
                            <p class="txtDescriptionCommande">
                                Compost 100% naturel, enrichi en nutriments essentiels pour améliorer la qualité du sol et augmenter les rendements agricoles.
                            </p>
                            <p class="prix">
                                <span class="enGras">Prix :</span> 12 000 Ar/sac de 25 kg
                            </p>
                            <p class="Livraison">
                                <span class="enGras">Livraison Disponible :</span> Disponible en gros et au détail.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="showMoreAboutSeller" id="sellerinfo6">
                    <!-- <div class="close" onclick="close('sellerinfo1')">
                        <i class="fa fa-times"></i>
                    </div> -->
                    <div class="photoProfil">
                        <img src="images.jpg" alt="photoprofil">
                    </div>
                    <div class="identifiant">
                        <p class="nom enGras">
                            Tojo Raharisoa 
                        </p>
                        <p class="email">
                            tojoraharisoa12@gmail.com
                        </p>
                    </div>
                    <div class="titleAproposSeller">
                        <h1 class="aboutSeller">A propos du vendeur</h1>
                        <div class="NOM">
                            <p class="noms">
                                Nom : RAHARISOA Tojo
                            </p>
                        </div>
                        <div class="EMAIL">
                            <p class="emails">
                                Email :
                            </p>
                            <a href="mailto:" class="mail">
                                tojoraharisoa12@gmail.com
                            </a>
                        </div>
                        <div class="TEL">
                            <p class="tels">
                                Telephone : +261 34 37 572 13
                            </p>                            
                        </div>
                    </div>
                    <div class="bottomShowMoreAboutSeller">
                        <div class="close">
                            <i class="fa fa-times"></i>
                        </div>
                        <div class="boxBottomSMAS">
                            <p class="descriptionCommande">
                                DESCRIPTION DE VOTRE COMMANDE
                            </p>
                            <p class="titleDescription">
                                Engrais Naturel (Compost)
                            </p>
                            <p class="txtDescriptionCommande">
                                Compost 100% naturel, enrichi en nutriments essentiels pour améliorer la qualité du sol et augmenter les rendements agricoles.
                            </p>
                            <p class="prix">
                                <span class="enGras">Prix :</span> 12 000 Ar/sac de 25 kg
                            </p>
                            <p class="Livraison">
                                <span class="enGras">Livraison Disponible :</span> Disponible en gros et au détail.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="showMoreAboutSeller" id="sellerinfo7">
                    <!-- <div class="close" onclick="close('sellerinfo1')">
                        <i class="fa fa-times"></i>
                    </div> -->
                    <div class="photoProfil">
                        <img src="images.jpg" alt="photoprofil">
                    </div>
                    <div class="identifiant">
                        <p class="nom enGras">
                            Tojo Raharisoa 
                        </p>
                        <p class="email">
                            tojoraharisoa12@gmail.com
                        </p>
                    </div>
                    <div class="titleAproposSeller">
                        <h1 class="aboutSeller">A propos du vendeur</h1>
                        <div class="NOM">
                            <p class="noms">
                                Nom : RAHARISOA Tojo
                            </p>
                        </div>
                        <div class="EMAIL">
                            <p class="emails">
                                Email :
                            </p>
                            <a href="mailto:" class="mail">
                                tojoraharisoa12@gmail.com
                            </a>
                        </div>
                        <div class="TEL">
                            <p class="tels">
                                Telephone : +261 34 37 572 13
                            </p>                            
                        </div>
                    </div>
                    <div class="bottomShowMoreAboutSeller">
                        <div class="close">
                            <i class="fa fa-times"></i>
                        </div>
                        <div class="boxBottomSMAS">
                            <p class="descriptionCommande">
                                DESCRIPTION DE VOTRE COMMANDE
                            </p>
                            <p class="titleDescription">
                                Engrais Naturel (Compost)
                            </p>
                            <p class="txtDescriptionCommande">
                                Compost 100% naturel, enrichi en nutriments essentiels pour améliorer la qualité du sol et augmenter les rendements agricoles.
                            </p>
                            <p class="prix">
                                <span class="enGras">Prix :</span> 12 000 Ar/sac de 25 kg
                            </p>
                            <p class="Livraison">
                                <span class="enGras">Livraison Disponible :</span> Disponible en gros et au détail.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="showMoreAboutSeller" id="sellerinfo8">
                    <!-- <div class="close" onclick="close('sellerinfo1')">
                        <i class="fa fa-times"></i>
                    </div> -->
                    <div class="photoProfil">
                        <img src="images.jpg" alt="photoprofil">
                    </div>
                    <div class="identifiant">
                        <p class="nom enGras">
                            Tojo Raharisoa 
                        </p>
                        <p class="email">
                            tojoraharisoa12@gmail.com
                        </p>
                    </div>
                    <div class="titleAproposSeller">
                        <h1 class="aboutSeller">A propos du vendeur</h1>
                        <div class="NOM">
                            <p class="noms">
                                Nom : RAHARISOA Tojo
                            </p>
                        </div>
                        <div class="EMAIL">
                            <p class="emails">
                                Email :
                            </p>
                            <a href="mailto:" class="mail">
                                tojoraharisoa12@gmail.com
                            </a>
                        </div>
                        <div class="TEL">
                            <p class="tels">
                                Telephone : +261 34 37 572 13
                            </p>                            
                        </div>
                    </div>
                    <div class="bottomShowMoreAboutSeller">
                        <div class="close">
                            <i class="fa fa-times"></i>
                        </div>
                        <div class="boxBottomSMAS">
                            <p class="descriptionCommande">
                                DESCRIPTION DE VOTRE COMMANDE
                            </p>
                            <p class="titleDescription">
                                Engrais Naturel (Compost)
                            </p>
                            <p class="txtDescriptionCommande">
                                Compost 100% naturel, enrichi en nutriments essentiels pour améliorer la qualité du sol et augmenter les rendements agricoles.
                            </p>
                            <p class="prix">
                                <span class="enGras">Prix :</span> 12 000 Ar/sac de 25 kg
                            </p>
                            <p class="Livraison">
                                <span class="enGras">Livraison Disponible :</span> Disponible en gros et au détail.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="btnMove">
                    <div class="precedent gonext">
                        <i class="fa fa-arrow-left"></i>
                    </div>
                    <div class="suivant">
                        <i class="fa fa-arrow-right"></i>
                    </div>
                </div>
                <!-- card1 -->
                <div class="card first" onclick="showCard('sellerinfo1')">
                    <div class="topcard">
                        <h1 class="titlecard">
                            Engrais Naturel (Compost)
                        </h1>
                        <p class="description">
                            <span class="enGras">Description:</span>
                            Compost 100% naturel, enrichi en nutriments essentiels pour améliorer la qualité du sol et augmenter les rendements agricoles.
                        </p>
                        <p class="prix">
                            <span class="enGras">Prix:</span>
                            12 000 Ar/sac de 25 kg                    
                        </p>
                        <p class="livraison">
                            <span class="enGras">Livraison:</span>
                            Disponible en gros et au détail.                    
                        </p>
                    </div>
                    <div class="bottomcard">
                        <div class="boxtwoimg">
                            <div class="borderLeftBoxtwoimg"></div>
                            <div class="boxoneimg">
                                <div class="photo">
                                    <img src="images.jpg" alt="photo">
                                </div>
                            </div>
                        </div>
                        <a href="bb.html" class="btncard">Commander</a>
                    </div>
                </div>
                <!-- card2 -->
                <div class="card second " onclick="showCard('sellerinfo2')">
                    <div class="topcard">
                        <h1 class="titlecard">
                            Activateur de Sol Microbien 🦠🌿
                        </h1>
                        <p class="description">
                            <span class="enGras">Description:</span>
                            Solution concentrée contenant des micro-organismes bénéfiques pour revitaliser les sols épuisés et favoriser l’absorption des nutriments..
                        </p>
                        <p class="prix">
                            <span class="enGras">Prix:</span>
                            35 000 Ar / bidon de 2L                   
                        </p>
                        <p class="livraison">
                            <span class="enGras">Livraison:</span>
                            Disponible en gros et au détail.                    
                        </p>
                    </div>
                    <div class="bottomcard">
                        <div class="boxtwoimg">
                            <div class="borderLeftBoxtwoimg"></div>
                            <div class="boxoneimg">
                                <div class="photo">
                                    <img src="images.jpg" alt="photo">
                                </div>
                            </div>
                        </div>
                        <a href="" class="btncard">Commander</a>
                    </div>
                </div>
                <!-- card3 -->
                <div class="card third" onclick="showCard('sellerinfo2')">
                    <div class="topcard">
                        <h1 class="titlecard">
                            Poudre de Fumier Séché 🐄
                        </h1>
                        <p class="description">
                            <span class="enGras">Description:</span>
                            Fumier de zébu séché et broyé en poudre, idéal pour enrichir le sol en matières organiques et améliorer la rétention d’eau.
                        </p>
                        <p class="prix">
                            <span class="enGras">Prix:</span>
                            15 000 Ar / sac de 10 kg                    
                        </p>
                        <p class="livraison">
                            <span class="enGras">Livraison:</span>
                            Disponible en gros et au détail.                   
                        </p>
                    </div>
                    <div class="bottomcard">
                        <div class="boxtwoimg">
                            <div class="borderLeftBoxtwoimg"></div>
                            <div class="boxoneimg">
                                <div class="photo">
                                    <img src="images.jpg" alt="photo">
                                </div>
                            </div>
                        </div>
                        <a href="" class="btncard">Commander</a>
                    </div>
                </div>
                <!-- card4 -->
                <div class="card last gonext" onclick="showCard('sellerinfo2')">
                    <div class="topcard">
                        <h1 class="titlecard">
                            Poudre de Fumier Séché ARiba🐄
                        </h1>
                        <p class="description">
                            <span class="enGras">Description:</span>
                            Fumier de zébu séché et broyé en poudre, idéal pour enrichir le sol en matières organiques et améliorer la rétention d’eau.
                        </p>
                        <p class="prix">
                            <span class="enGras">Prix:</span>
                            15 000 Ar / sac de 10 kg                    
                        </p>
                        <p class="livraison">
                            <span class="enGras">Livraison:</span>
                            Disponible en gros et au détail.                   
                        </p>
                    </div>
                    <div class="bottomcard">
                        <div class="boxtwoimg">
                            <div class="borderLeftBoxtwoimg"></div>
                            <div class="boxoneimg">
                                <div class="photo">
                                    <img src="images.jpg" alt="photo">
                                </div>
                            </div>
                        </div>
                        <a href="" class="btncard">Commander</a>
                    </div>
                </div>
            </div>
            <!-- deuxième ligne -->
            <div class="row">
                <div class="btnMove">
                    <div class="precedent1 gonext">
                        <i class="fa fa-arrow-left"></i>
                    </div>
                    <div class="suivant1">
                        <i class="fa fa-arrow-right"></i>
                    </div>
                </div>
                <!-- card1 -->
                <div class="card first1" onclick="showCard('sellerinfo5')">
                    <div class="topcard">
                        <h1 class="titlecard">
                            Graines de Légumes Variés 🌱   
                        </h1>
                        <p class="description">
                            <span class="enGras">Description:</span>
                            Graines de carottes, laitues, poivrons, et aubergines adaptées aux conditions locales pour une meilleure germination et récolte abondante.                       </p>
                        <p class="prix">
                            <span class="enGras">Prix:</span>
                            5 000 Ar/paquet (100 graines)              
                        </p>
                        <p class="livraison">
                            <span class="enGras">Livraison:</span>
                            Envoi postal possible.                    
                        </p>
                    </div>
                    <div class="bottomcard">
                        <div class="boxtwoimg">
                            <div class="borderLeftBoxtwoimg"></div>
                            <div class="boxoneimg">
                                <div class="photo">
                                    <img src="images.jpg" alt="photo">
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btncard">Commander</a>
                    </div>
                </div>
                <!-- card2 -->
                <div class="card second" onclick="showCard('sellerinfo6')">
                    <div class="topcard">
                        <h1 class="titlecard">
                            Biochar (Charbon Végétal) 🔥
                        </h1>
                        <p class="description">
                            <span class="enGras">Description:</span>
                            Charbon végétal activé qui améliore la rétention d’eau et la fertilité du sol tout en réduisant les émissions de CO₂.                        </p>
                        <p class="prix">
                            <span class="enGras">Prix:</span>
                            22 000 Ar / sac de 15 kg                  
                        </p>
                        <p class="livraison">
                            <span class="enGras">Livraison:</span>
                            Disponible en gros et au détail.                    
                        </p>
                    </div>
                    <div class="bottomcard">
                        <div class="boxtwoimg">
                            <div class="borderLeftBoxtwoimg"></div>
                            <div class="boxoneimg">
                                <div class="photo">
                                    <img src="images.jpg" alt="photo">
                                </div>
                            </div>
                        </div>
                        <a href="" class="btncard">Commander</a>
                    </div>
                </div>
                <!-- card3 -->
                <div class="card third" onclick="showCard('sellerinfo7')">
                    <div class="topcard">
                        <h1 class="titlecard">
                            Poudre de Basalte (Roche Volcanique) 🌋
                        </h1>
                        <p class="description">
                            <span class="enGras">Description:</span>
                            Amendement minéral naturel qui enrichit le sol en silice, calcium et magnésium, améliorant la structure et la résistance des cultures.
                        </p>
                        <p class="prix">
                            <span class="enGras">Prix:</span>
                            20 000 Ar / sac de 25 kg                
                        </p>
                        <p class="livraison">
                            <span class="enGras">Livraison:</span>
                            Disponible en gros et au détail.                   
                        </p>
                    </div>
                    <div class="bottomcard">
                        <div class="boxtwoimg">
                            <div class="borderLeftBoxtwoimg"></div>
                            <div class="boxoneimg">
                                <div class="photo">
                                    <img src="images.jpg" alt="photo">
                                </div>
                            </div>
                        </div>
                        <a href="" class="btncard">Commander</a>
                    </div>
                </div>
                <!-- card4 -->
                <div class="card last1 gonext" onclick="showCard('sellerinfo8')">
                    <div class="topcard">
                        <h1 class="titlecard">
                            Poudre de Fumier Séché ARiba🐄
                        </h1>
                        <p class="description">
                            <span class="enGras">Description:</span>
                            Fumier de zébu séché et broyé en poudre, idéal pour enrichir le sol en matières organiques et améliorer la rétention d’eau.
                        </p>
                        <p class="prix">
                            <span class="enGras">Prix:</span>
                            15 000 Ar / sac de 10 kg                    
                        </p>
                        <p class="livraison">
                            <span class="enGras">Livraison:</span>
                            Disponible en gros et au détail.                   
                        </p>
                    </div>
                    <div class="bottomcard">
                        <div class="boxtwoimg">
                            <div class="borderLeftBoxtwoimg"></div>
                            <div class="boxoneimg">
                                <div class="photo">
                                    <img src="images.jpg" alt="photo">
                                </div>
                            </div>
                        </div>
                        <a href="" class="btncard">Commander</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    const precedent =document.querySelector('.precedent');
    const suivant =document.querySelector('.suivant');
    const firstcard = document.querySelector('.first');
    const lastcard = document.querySelector('.last');
    const cardsecond = document.querySelector('.second');

    const precedent1 =document.querySelector('.precedent1');
    const suivant1 =document.querySelector('.suivant1');
    const firstcard1 = document.querySelector('.first1');
    const lastcard1 = document.querySelector('.last1');

    const close = document.querySelector('.fa-times');
    // console.log(close);
    

    function showCard(sellerInfoId) {
    // Afficher le bloc spécifique
        const sellerInfoBlock = document.getElementById(sellerInfoId);
        sellerInfoBlock.classList.toggle("show-it");
    }

    // Sélectionner TOUS les boutons de fermeture dans les divs showMoreAboutSeller
    const closeButtons = document.querySelectorAll('.showMoreAboutSeller .fa-times');

    closeButtons.forEach(closeButton => {
        closeButton.addEventListener('click', (event) => {
            const sellerInfoBlock = closeButton.closest('.showMoreAboutSeller');
            sellerInfoBlock.classList.remove('show-it');
        });
    });

    precedent.addEventListener('click',()=>{
        lastcard.style.display = "none";
        firstcard.style.display = "flex";
        cardsecond.style.marginLeft == "0px";
        // lastcard.classList.toggle('gonext');
        // if (lastcard.style.display == "none") {
        //     firstcard.style.display == "block"
        // }
        // firstcard.classList.toggle('goprecedent');
        precedent.classList.toggle('gonext');
        suivant.classList.toggle('gonext');
    });
    
    suivant.addEventListener('click',()=>{
        lastcard.style.display = "flex";
        firstcard.style.display = "none";
        cardsecond.style.marginLeft == "10px";
        // firstcard.classList.toggle('gonext');
        // lastcard.classList.toggle('goprecedent');
        // if (firstcard.style.display == "none") {
        //     lastcard.style.display == "block"
        // }
        precedent.classList.toggle('gonext');
        suivant.classList.toggle('gonext');
    });
    
    precedent1.addEventListener('click',()=>{
        lastcard1.style.display = "none";
        firstcard1.style.display = "flex";
        // lastcard.classList.toggle('gonext');
        // if (lastcard.style.display == "none") {
        //     firstcard.style.display == "block"
        // }
        // firstcard.classList.toggle('goprecedent');
        precedent1.classList.toggle('gonext');
        suivant1.classList.toggle('gonext');
    });
    
    suivant1.addEventListener('click',()=>{
        lastcard1.style.display = "flex";
        firstcard1.style.display = "none";
        cardsecond.classList.toggle('decalage');
        // firstcard.classList.toggle('gonext');
        // lastcard.classList.toggle('goprecedent');
        // if (firstcard.style.display == "none") {
        //     lastcard.style.display == "block"
        // }
        precedent1.classList.toggle('gonext');
        suivant1.classList.toggle('gonext');
    });


</script>
</html>