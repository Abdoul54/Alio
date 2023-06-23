<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single E-commerce Product Page using HTML, CSS - Codingscape</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!---Boxicons CDN Setup for icons-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <div class="single-product">
            <div class="row">
                <div class="col-6">
                    <div class="product-image">
                        <div class="product-image-main">
                            <img src="https://images.unsplash.com/photo-1594070319944-7c0cbebb6f58?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGhvbmRhfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" id="product-main-image">
                        </div>
                        <div class="product-image-slider">
                            <img src="https://images.unsplash.com/photo-1570303278489-041bd897a873?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8aG9uZGF8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt=""  class="image-list">
                            <img src="https://images.unsplash.com/photo-1577436864274-bcd551d82b6b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8aG9uZGF8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt=""  class="image-list">
                            <img src="https://images.unsplash.com/photo-1519429893275-fa1eb00397e9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8aG9uZGF8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt=""  class="image-list">
                            <img src="https://images.unsplash.com/photo-1594070319944-7c0cbebb6f58?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGhvbmRhfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt=""  class="image-list">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="breadcrumb">
                        <span><a href="#">Home</a></span>
                        <span><a href="#">Cars</a></span>
                    </div>

                    <div class="product">
                        <div class="product-title">
                            <h2>Honda Accord a vendre - Casablanca</h2>
                        </div>
                        <div class="product-price">
                            <span class="offer-price">195 000 Dh</span>
                        </div>

                        <div class="product-details">
                            <h3>Description</h3>
                            <p>Accord platinium 2.2 iDtec Executive, toit ouvrant, xenon, siège cuir chauffant électrique mémoire, clim bizone digital, 8 airbag, radar de recul av ar, jante en alu, volant cuir multifonction, Cruise control, palette au volant. ..</p>
                        </div>
                        <div class="product-Equipements">
                            <h4>Equipements</h4>
                            <hr>
                            <div class="A_Equipements">
                                <div class="g1">
                                <h5>Marque </h5>  
                                <h5>Modèle</h5>
                                <h5>Portes</h5>
                                <h5>Année</h5>
                                <h5>Kilomètres</h5>
                                <h5>Couleur</h5>
                                <h5>Boîte de vitesse</h5>
                                <h5>Carburant</h5>
                                <h5>Puissance (ch)</h5>
                                </div>
                                <div class="g2">
                                <h5>Honda</h5>              
                                <h5>Accord</h5>
                                <h5>4</h5>
                                <h5>2011</h5>
                                <h5>100 000</h5>
                                <h5>Gris</h5>
                                <h5>Automatique</h5>
                                <h5>Diesel</h5>
                                <h5>8</h5></div>
            
                            </div>

                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--script-->
    <script src="script.js"></script>
</body>
</html>