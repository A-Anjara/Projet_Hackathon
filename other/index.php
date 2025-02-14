<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fontawesome.com/v5/icons/link?f=classic&s=solid">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
    <script defer src="script.js"></script>
    <title>Document</title>
    
</head>
<body> -->


<?php 

    include "headerDashboard.php";

?>
    

    <div class="sectionGestionProduits">
        <h1>Ajout d’un nouveau produit à vendre</h1>
        
        <section class="form-section">
        <img src="photo/ravina.png" class="feuille feuille1">
        <img src="photo/ravina.png" class="feuille feuille2"> 
        <img src="photo/ravina.png" class="feuille feuille3">
        
            <div class="form-container">
                <input type="text" id="nom" placeholder="Nom du produit">
                <input type="text" id="prix" placeholder="Prix">
                <input type="text" id="stock" placeholder="Stock disponible">
                <textarea id="description" placeholder="Description"></textarea>
                <button onclick="ajouterProduit()">Publier</button>
            </div>
            <!-- <img src="images/leaf.png" class="leaf leaf-bottom-left" alt="Petite feuille">
            <img src="images/leaf.png" class="leaf leaf-bottom-right" alt="Petite feuille"> -->
        </section>
        
        <section class="products-section">
            <h1>Gestion des Produits en Vente</h1>
            <div id="produits-container">
                <div class="produits-card">
                    <div class="modify">
                        <form action="" method="POST">
                            <i class="fa fa-pen" name="modify_note"></i>
                        </form>
                    </div>
                    <p><span class="enGras">Produit : </span> 🌾 Riz Blanc Local</p>
                    <p><span class="enGras">Prix :</span> 2 500 Ar/kg</p>
                    <p><span class="enGras">Stock :</span>150kg</p>
                    <p>Riz blanc local de qualité <br>supérieure, cultivé sans <br>pesticides. Disponible en sac <br>de 5 kg et 10 kg.</p>
                </div>  
            
                <div class="produits-card">
                    <div class="modify">
                        <form action="" method="POST">
                            <i class="fa fa-pen" name="modify_note"></i>
                        </form>
                    </div>
                    <p><span class="enGras">Produit : </span> 🌿 Engrais Bio Naturel</p>
                    <p><span class="enGras">Prix :</span> 8 000 Ar/5kg</p>
                    <p><span class="enGras">Stock :</span> 50 sacs de 5kg</p>
                    <p>Engrais naturel en poudre,<br> enrichi en azote et phosphore <br> pour une meilleure croissance <br> des cultures.</p>
                </div> 

                <div class="produits-card">
                    <div class="modify">
                        <form action="" method="POST">
                            <i class="fa fa-pen" name="modify_note"></i>
                        </form>
                    </div>
                    <p><span class="enGras">Produit : </span> 🍅 Tomates Bio Fraîches</p>
                    <p><span class="enGras">Prix :</span> 3 000/kg</p>
                    <p><span class="enGras">Stock :</span> 100kg</p>
                    <p>Tomates rouges, juteuses et <br> sans pesticides, récoltées à <br> maturité pour un goût optimal.</p>
                </div> 

                <div class="produits-card">
                    <div class="modify">
                        <form action="" method="POST">
                            <i class="fa fa-pen" name="modify_note"></i>
                        </form>
                    </div>
                    <p><span class="enGras">Produit : </span> 🍯 Miel Pur de Forêt</p>
                    <p><span class="enGras">Prix :</span> 15 000 Ar/5kg</p>
                    <p><span class="enGras">Stock :</span> 50 pots</p>
                    <p>Miel brut et naturel, sans <br> additifs, récolté en forêt pour <br> une qualité premium.</p>
                </div> 
        </div>
        </section>

        <img src="images/leaf.png" class="leaf leaf-top-left" alt="Petite feuille">
        <img src="images/leaf.png" class="leaf leaf-top-right" alt="Petite feuille">
        <img src="images/leaf.png" class="leaf leaf-bottom-left" alt="Petite feuille">
        <img src="images/leaf.png" class="leaf leaf-bottom-right" alt="Petite feuille">
    </div>
</body>
</html>