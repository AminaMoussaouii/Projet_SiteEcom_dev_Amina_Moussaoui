<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-comWebSite</E-comWebSite></title>
    <link rel="stylesheet" href="css/index.css">
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
  <!--Debut Header-->
  <header>
    <nav>
        <h2 class="logo"><span>Electro</span>Store</h2>
        <ul class="navlinks">
           <li><a href="index.php"><i class="fa-solid fa-house"></i> Acceuil</a></li>
           <li><a href="#newproduct">Nauveauté</a></li>
           <li><a href="#" id ="cartlink">Contact Us</a></li>
           <li><a href="login.php" target="_blank">Connexion <i class="fa-solid fa-user"></i></a></li>  
        </ul>
       
    </nav>
  </header> 
  <div class="container">
    <div class="cart-container" id="cartContainer">
    <button id="cartButton">Panier</button>
        <div class="cart-dropdown" id="cartDropdown">
            <!-- Contenu du panier -->
            <p id="cartContent"><i class="fa-solid fa-cart-shopping"></i>Votre panier</p>
            <div class="list">
              <div class="item">
                <div class="image">
                  <img src="images/casque.jpg">
                </div>
                <div class="name">casque</div>
                <div class="totalprice">150DHS</div>
                <div class="quantité">
                  <span class="moins">-</span>
                  <span>1</span>
                  <span class="plus">+</span>
                </div>
              </div>
              <div class="item">
                <div class="image">
                  <img src="images/pcgamer.jpg">
                </div>
                <div class="name">PC Gamer</div>
                <div class="totalprice">9000DHS</div>
                <div class="quantité">
                  <span class="moins">-</span>
                  <span>1</span>
                  <span class="plus">+</span>
                </div>
              </div>
              <div class="item">
                <div class="image">
                  <img src="images/sourisgamer.webp">
                </div>
                <div class="name">Mouse</div>
                <div class="totalprice">150DHS</div>
                <div class="quantité">
                  <span class="moins">-</span>
                  <span>1</span>
                  <span class="plus">+</span>
                </div>
              </div>
            </div>


            <p class="total">Total : <span id="totalPrice">9300</span> DHS</p>
            <div class="btn">
              <button class="close">Fermer</button>
              <button class="check">vider</button>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
  <!--Fin Header-->
  <!--Debut Section categories et promo-->
<section class="containersection">
  <aside>
    <div class="categories">
      <a href="pcportable.php" target="_blank"><i class="fa-solid fa-laptop"></i> PC Portable</a>
      <a href="#"><i class="fa-solid fa-computer"></i> PC Gaming</a>
      <a href="acessoires.php" target="_blank"><i class="fa-regular fa-keyboard"></i> Accessoires</a>
      <a href="#footer"><i class="fa-solid fa-print"></i> imprimantes</a>
      <a href=""><i class="fa-solid fa-chair-office"></i>Chaise & Bureau</a>
      <a href="#"> <i class="fa-brands fa-usb"></i> composants</a>
    </div>
  </aside>
  <section class="content">
    <img src="images/Découvrez des réductions incroyables.png" alt="promotion -30%">
 </section>
</section>

<!--fin section categories et promo-->
<!--debut section des produits-->
<section class="products">
  <div class="box box1">
        <div class="boxcontent"> 
          <img src="images/casque.jpg" alt="" class="box1img">
          <h2 class="box1title">Casque Gaming</h2>
          <p class="boxp">Gamer Casque ultra léger avec cable de longueur 1.3m Stéreo </p> 
         <a href="casque.php" class="boxbutton" target=_blank>voir plus</a>
        </div>
    </div></a>
    <div class="box box2">
      <div class="boxcontent">
        <img src="images/pcgamer.jpg" alt="" class="box2img">
        <h2 class="box2title">PC Gamer</h2>
        <p class="boxp"> PC Gamer Ryzen 5 5500 /16GB/500GB SSD/GTX1650SUPER </p>
        <a href="pcgaming.php" class="boxbutton" target=_blank>voir plus</a>
      </div>
    </div>
    <div class="box box3">
      <div class="boxcontent">
        <img src="images/ssd.png" alt="" class="box3img">
        <h2 class="box3title">SSD 2.5</h2>
        <p class="boxp">SSD 128 Go,256 Go,512 Go 2.5 6Gb/s</p>
        <a href="#" class="boxbutton" data-price="1500">voir plus</a>
      </div>
    </div>
    <div class="box box4">
      <div class="boxcontent">
        <img src="images/ecrancurved.jpg" alt="" class="box4img">
        <h2 class="box4title">Ecran MSI curved</h2>
        <p class="boxp">1920 x 1080 pixels - 165 Hz - Dual HDMI/DisplayPort</p>
        <a href="#" class="boxbutton">voir plus</a>
      </div>
    </div>
    <div class="box box5">
      <div class="boxcontent">
        <img src="images/laptop.png" alt="" class="box5img">
        <h2 class="box5title"> Laptop HP</h2>
        <p class="boxp">HP 250 G8 Notebook PC i3-1115G4/8GO/256GO SSD + cartable</p>
        <a href="laptop.html" class="boxbutton" target="_blank">voir plus</a>
      </div>
    </div>
    <div class="box box6">
      <div class="boxcontent">
        <img src="images/sourisgamer.webp" alt="" class="box6img">
        <h2 class="box6title">Gamer Mouse</h2>
        <p class="boxp">Souris filaire pour gamer rétroéclairage Chroma RGB 16.8 millions de couleurs </p>
        <a href="#" class="boxbutton">voir plus</a>
      </div>
    </div>
    <div class="box box7">
      <div class="boxcontent">
        <img src="images/led.jpg" alt="" class="box7img">
        <h2 class="box7title">LED USB</h2>
        <p class="boxp">Lamp Led USB pour éclairer votre clavier disponible en différentes couleurs</p>
        <a href="#" class="boxbutton">voir plus</a>
      </div>
    </div>
    <div class="box box8">
      <div class="boxcontent">
        <img src="images/gamerchair.jpg" alt="" class="box8img">
        <h2 class="box8title">Gamer Chair</h2>
        <p class="boxp">Gamer Chair en Noir & Bleu comfortable vrai cuir </p>
        <a href="#" class="boxbutton">voir plus</a>
      </div>
    </div>
    <div class="box box9">
      <div class="boxcontent">
        <img src="images/claviergamer.jpg" alt="" class="box9img">
        <h2 class="box9title">Clavier Gamer</h2>
        <p class="boxp"> clavier gamer retro éclairée</p>
        <a href="#" class="boxbutton">voir plus</a>
      </div>
    </div>
</section>
<!--fin section des produits-->
<!--Section Nouveau produit-->
<section id="newproduct">
 <div class="containernew">
  <div class="left">
    <div class="mainimage">
      <!--<img src="images/whitemouse.jpg" alt="" class="slide">-->
      <img src="images/whitemouse.jpg" alt="" class="slide">
    </div>
    <div class="options flex2">
      <img src="images/redmouse.jpg" alt="redmouse" onclick="img('images/redmouse.jpg')">
      <img src="images/blackmouse.jpg" alt="blackmouse" onclick="img('images/blackmouse.jpg')">
      <img src="images/whitemouse.jpg" alt="whitemouse" onclick="img('images/whitemouse.jpg')" >
    </div>
  </div>
  <div class="right">
    <h3> USB Optical Gaming Mouse</h3>
    <h4>Marque: KONE AIMO & DECUS</h4>
    <h4>399 DH</h4>
    <p><ul>
      <li>Tri-button thumb zone featuring Easy-Shift[+]™</li>
      <li>32-bit processor + 512kB memory for macro storage & execution</li>
      <li>Distance Control Unit for custom pick-up flight</li>
    </ul></p>
    <h5>Black-White-Red</h5>
    <h5>Number</h5>
    <div class="add flex1">
      <span>-</span>
      <label>1</label>
      <span>+</span>
    </div>
    <button>Add To Cart</button>
  </div>
 </div>
</section>
<script>
  function img(anything){
    document.querySelector('.slide').src=anything;
  }
  function change(change){
    const line =document.querySelector('.home');
  }
  line.style.background =change;
</script>
<!--debut footer-->
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
<!--copyright section-->
<div class="copyright"><i class="fa-regular fa-copyright"></i>
  <span>copyright2023 </span> Designed By Amina</div>

</body>
</html>