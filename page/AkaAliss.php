<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Photographie - Akane Aliss Cosplay</title>
    <link href="../style/toolbox.css" rel="stylesheet" type="text/css">
    <link href="../style/aliss.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="navbar">
        <ul>
            <li> Akane Aliss Cosplay</li>
            <li><a href="#who"> Qui suis-je ?</a></li>
            <li><a href="#photo"> Galerie photo</li>
            <li><a href="#cosplay"> Photo Cosplay</li>
            <li><a href="#referal"> Référence </li>
            <li> <a href="../index.php">Retour a l'accueil</a></li>
        </ul>
    </div>
    <h1> Akane Aliss Cosplay</h1>
    <h2 id="who">Qui suis-je ?</h2>
    <div id="idCard">
        
        <img>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales ultricies pharetra. Nam augue nunc, imperdiet at mi ut, commodo ullamcorper justo. Sed sapien orci, volutpat vitae diam nec, ultrices sodales lacus. Pellentesque non dictum metus. Sed ac dignissim augue, ut scelerisque leo. Nulla facilisi. Maecenas at finibus lectus. Nunc tempor, orci nec rutrum eleifend, justo justo molestie nulla, quis imperdiet felis velit vitae felis. Suspendisse dignissim ipsum et mattis iaculis. Sed tristique, dolor vitae faucibus bibendum, purus erat porttitor eros, sed vestibulum dui odio vel enim. Quisque maximus nisi sed porttitor rhoncus. Donec non faucibus urna. Aliquam vitae lacinia diam. Nam imperdiet massa sem, ac consequat sem hendrerit eget. Sed commodo blandit ligula eu facilisis. Duis euismod, libero sit amet fermentum rhoncus, ex nisl interdum erat, sit amet rutrum felis ligula eget mauris. </p>
    </div>
    <hr>
        <h2 id="photo"> Mes création photo</h2>
    <!-- Integrér galerie photo ici-->
    <?php 
    
    include "../admin/";
    
    include "../tool/galerie.php";
    
    ?>
    <hr>
        <h2 id="cosplay"> Les Shooting que j'ai réaliser</h2>
    <!-- Integrér galerie Cosplay ici-->
    
    <?php 
    include "../admin/";
    
    include "../tool/galerie.php";
    ?>
    <hr>
    <div>
        <h2 id="referal">Ils m'ont fais confiance</h2>
         <!-- Integrér galerie referal-->
      <?php  
        include "../admin/";
    
        include "../tool/galerie.php";
    ?>
    </div>
</body>

</html>
