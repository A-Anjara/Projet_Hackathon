<?php
// Your PHP code goes here
$title = "Gestion de produits";

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
    <link rel="stylesheet" href="styles.css">
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