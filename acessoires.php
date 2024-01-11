<?php 
 session_start() ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acessoiries page</title>
    <link rel="stylesheet" href="css/acessoires.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/all.min.css">
    <script type="text/javascript">
      window.addEventListener("scroll", function(){
        var header=document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
      })
    </script>
</head>
<body>
    <header>
        <nav>
            <h2 class="logo">Electro Store</h2>
            <ul class="navlinks">
               <li><a href="index.php"><i class="fa-solid fa-house"></i> Acceuil</a></li>
               <li><a href="#">Nauveauté</a></li>
               <li><a href="login.php">Connexion <i class="fa-solid fa-user"></i></a></li>  
            </ul>
           
        </nav>
      </header> 

      <a href="panier2.php" class="link" target="_blank">Panier<span>
            <?php echo isset($_SESSION['electrostore']) ? array_sum($_SESSION['electrostore']) : 0; ?></span></a>
      <section class="products">
        <?php  
        include_once "db.php";
        // liste des produits
        $req = mysqli_query($con, "SELECT * FROM panier ");
        while($row = mysqli_fetch_assoc($req)){
        ?>
        <form action="" class="produit">
            <div class="image">
                <img src="images/<?=$row['img']?>">
            </div>
            <div class="content">
               <h4 class="name"><?=$row['nom']?></h4>
               <h2 class="price"><?=$row['prix']?></h2>
               <a href="ajouter_panier.php?id=<?=$row['id']?>" class=id-produit>Ajouter au panier</a>
            </div>
        </form>
        <?php } ?>
        


     </section>
     <div id="footer">
<section class="footercontainer">
  <div class="box1f">
    <h2>FOLLOW US</h2>
   <div class="socialicons">
    <a  href="https://www.facebook.com/profile.php?id=61553116571859&mibextid=gik2fB" target="_blank" > <i  class="fa-brands fa-facebook"></i></i></a>
    <a href="#" > <i class="fa-brands fa-twitter"></i></a>
    <a href="#"> <i  class="fa-brands fa-instagram"></i></a>
    <a href="#"> <i  class="fa-brands fa-youtube"></i></a>
   </div>
   </div>
   <div class="societe">
    <h2>ABOUT US</h2>
    <div class="about">
      <h3>ElectroStore</h3>
      <div class="gridabout">
         <div>Nous sommes une société qui vend des produits éléctroniques.Chez nous vous pouvez trouvez tous : des accessoires , des pc pour gaming des TV des smartphones...</div>
         <!--<p>N'hésitez pas de nous contactez sur les numéros suivant</p>-->
         <div id="tele"><i class="fa-solid fa-phone"></i> <br> +212 685742693</div>
     </div>
    </div>
   </div>
   <div class="help">
    <h2>GET HELP</h2>
    <div>
    <p><i class="fa-solid fa-truck-fast"></i> <a href="#">Livraison & installation</a> </p>
    <p><i class="fa-solid fa-gear"></i> <a href="#">Service Après Vente</a> </p>
    <p><i class="fa-solid fa-credit-card"></i> <a href="#"> Options De Payment</a></p>
    </div>
  </div>
   <div class="news">
    <h2>NEWSLETTER :</h2>
    <form action="">
      <label for="email"> Abonnez-vous pour recevoir nos actualités et nos promotions sur nos différents produits</label>
      <br>
      <input type="email" class="email" name="email" >
    </form>
   </div>
</section>
</div>
<!--fin footer-->
 
</body>
</html>