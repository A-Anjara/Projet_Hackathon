<?php
// Your PHP code goes here
$title = "Produits";

// echo "<pre>";               
// print_r($_SERVER);
// echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/mulish" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="styledashboard.css">
    <title><?php echo $title ?></title>
</head>
<body>
    <div class="dashboard">
        <header>
            <div class="topHeader">
                <div class="logo">
                    <div class="pdpBox">
                        <img src="Pdp.png" alt="">
                    </div>
                    <div class="descriptionOnDashboard">
                        <p class="nomDashboard">
                            Alicia. R
                        </p>
                        <p class="contactDashBoard">
                            alexiarandri@gmail.com
                        </p>
                    </div>
                </div>
                <div class="menu">
                    <a href="index.php" class="menu-link">Dashboard</a>
                    <a href="produits.php" class="menu-link <?php if ($_SERVER["PHP_SELF"]=="/vegetable/dashboard/dashboardProduits.php") {echo "active-link";} ?>">Produits</a>
                    <a href="plantes.php" class="menu-link">Gestion des Produits</a>
                    <a href="contact.php" class="menu-link">Commande</a>
                </div>
            </div>
            <a href="#" class="deconnexion">
                <!-- <i class="fa fa-sign-out-alt"></i> -->
                <img src="deconnect.png" alt="">
                <p>Deconnexion</p>
            </a>
        </header>
        <div class="sectionProduits">
            <div class="colLeft">
                <div class="cardProduits">
                    <div class="leftcard">
                        <div class="titleCardPodruitsbox">
                            <h1 class="titleCardProduitstxt">
                                Tomates
                            </h1>
                        </div>
                        <div class="nombreProduitscardbox">
                            <p class="nombresproduits">
                                Nombres : 3
                            </p>
                        </div>
                        <div class="dateproduitsbox">
                            <p class="dateproduitstxt">
                                Date : 10 janvier 2025
                            </p>
                        </div>
                        <a href="" class="btncardproduits">Voir</a>
                    </div>
                    <div class="rightcard">
                        <div class="imgCard">
                            <img src="apple-touch-icon.png" alt="Tomate">
                        </div>
                    </div>
                </div>
                <div class="cardProduits">
                    <div class="leftcard">
                        <div class="titleCardPodruitsbox">
                            <h1 class="titleCardProduitstxt">
                                Riz
                            </h1>
                        </div>
                        <div class="nombreProduitscardbox">
                            <p class="nombresproduits">
                                Nombres : 3
                            </p>
                        </div>
                        <div class="dateproduitsbox">
                            <p class="dateproduitstxt">
                                Date : 10 Février 2025
                            </p>
                        </div>
                        <a href="" class="btncardproduits">Voir</a>
                    </div>
                    <div class="rightcard">
                        <div class="imgCard">
                            <img src="apple-touch-icon.png" alt="Tomate">
                        </div>
                    </div>
                </div>
                <div class="cardProduits">
                    <div class="leftcard">
                        <div class="titleCardPodruitsbox">
                            <h1 class="titleCardProduitstxt">
                                Pommes de Terre
                            </h1>
                        </div>
                        <div class="nombreProduitscardbox">
                            <p class="nombresproduits">
                                Nombres : 15
                            </p>
                        </div>
                        <div class="dateproduitsbox">
                            <p class="dateproduitstxt">
                                Date : 06 Février 2025
                            </p>
                        </div>
                        <a href="" class="btncardproduits">Voir</a>
                    </div>
                    <div class="rightcard">
                        <div class="imgCard">
                            <img src="apple-touch-icon.png" alt="Tomate">
                        </div>
                    </div>
                </div>
            </div>
            <div class="colRight">
                <div class="addPoducts">
                    <div class="close">
                        <i class="fa fa-times"></i>
                    </div>
                    <div class="titleaddProducts">
                        AJOUTER DE NOUVEAU PRODUITS
                    </div>
                    <div class="choisirProduit">
                        <p>Choisir</p>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div class="formroupaddProducts">
                        <div class="rowaddProducts">
                            <p class="titleProduits">
                                Tomates
                            </p>
                            <div class="btnPlus">
                                <i class="fa fa-plus"></i>
                            </div>
                        </div>
                        <div class="rowaddProducts">
                            <p class="titleProduits">
                                Tomates
                            </p>
                            <div class="btnPlus">
                                <i class="fa fa-plus"></i>
                            </div>
                        </div>
                        <div class="rowaddProducts">
                            <p class="titleProduits">
                                Tomates
                            </p>
                            <div class="btnPlus">
                                <i class="fa fa-plus"></i>
                            </div>
                        </div>
                    </div>
                    <form action="" method="POST" class="datecontainer">
                        <h2 class="dateaddproducts mtb">
                            DEBUT DE LA PLANTATION
                        </h2>
                        <div class="calendrier mtb">
                            <input type="date" name="date_debut" id="" value="<?php echo date('Y-m-d'); ?>">
                        </div>
                        <a class="confirmation">Confirmer la plantation</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script>

</script>
</html>