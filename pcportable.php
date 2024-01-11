<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PCportable</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/pcportable1.css">
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
            <h2 class="logo"><span>Electro</span>Store</h2>
            <ul class="navlinks">
               <li><a href="index.php"><i class="fa-solid fa-house"></i> Acceuil</a></li>
               <li><a href="#link">Nauveauté</a></li>
               <li><a href="#">Panier <i class="fa-solid fa-cart-shopping"></i></a></li>
               <li><a href="login.php">Connexion <i class="fa-solid fa-user"></i></a></li>  
            </ul>
           
        </nav>
      </header>  
      <!--fin header-->
<!--carrousel-->
<div class="wrapper">
<i id="left" class="fa-solid fa-angle-left"></i>
  <ul class="caroussel">
    <li class="carte">
      <img src="images/caroussel11.png" alt="" >
    </li>
    <li class="carte">
      <img src="images/caroussel44.png" alt="" >
    </li>
    <li class="carte">
      <img src="images/caroussel22.png" alt="">
    </li>
    <li class="carte">
      <img src="images/caroussel33.png" alt="" >
    </li>
  </ul>
  <i id="right" class="fa-solid fa-angle-right"></i>
</div>
<!--fin carrousel-->
 <!--debut section des produits-->
<section class="products">
    <div class="box box1">
        <div class="boxcontent"> 
          <img src="images/pcportable/Acer aspire 5 slim.jpg" alt="" class="box1img">
          <h2 class="box1title">Acer Aspire 5 Slim</h2>
          <p class="boxp">Acer Aspire 5 Slim Laptop, 15.6 FHD, AMD Ryzen 4GB DDR4 128GB PCIe NVMe SSD</p>
            <span>7990 DHs</span>
            <a href="#"  class="boxbutton" target="_blank">Buy Now</a>
        </div>
    </div>
    <div class="box box2">
      <div class="boxcontent">
        <img src="images/pcportable/Azus Zenbook.jpg" alt="" class="box2img">
        <h2 class="box2title">AZUS ZENBOOK </h2>
        <p class="boxp"> Azus Zenbook 13.3 core i5 8GB Memory 256 GB SSD.2,4 GHz à 4,2 GHz.8 Go de RAM DDR4 
        </p>
        <span>5990 DHs</span>
        <a href="#" class="boxbutton">Buy Now</a>
      </div>
    </div>
    <div class="box box3">
      <div class="boxcontent">
        <img src="images/pcportable/azus proart studiobook.jpg" alt="" class="box3img">
        <h2 class="box3title">ASUS ProArt StudioBook</h2>
        <p class="boxp">
            ASUS ProArt Studiobook 16 AMD Ryzen 9,NVIDIA RTX 3070, 64 Go RAM 2TB PCI</p>
        <span>35 000 DHs</span>
        <a href="#" class="boxbutton">Buy Now</a>
      </div>
    </div>
    <div class="box box4">
      <div class="boxcontent">
        <img src="images/pcportable/Dell Xps 9520.jpg" alt="" class="box4img">
        <h2 class="box4title">DELL XPS 9520</h2>
        <p class="boxp">Dell XPS 15 9520 i7-12700H RAM 16Go DDR5 512Go SSD M.2 PCIe NVMe. FHD NVIDIA® RTX™ 3050</p>
        <span>15 990 DHs</span>
        <a href="#" class="boxbutton">Buy Now</a>
      </div>
    </div>
    <div class="box box5">
      <div class="boxcontent">
        <img src="images/pcportable/ASUS ROG Strix.jpg" alt="" class="box5img">
        <h2 class="box5title"> Asus ROG Strix G15</h2>
        <p class="boxp">AMD Ryzen 7 16 Go DDR5 NVIDIA RTX 3060. 1 To NVMe PCIE15.6" Freedos</p>
        <span>17 990,00 DHs</span>
        <a href="laptop.html" class="boxbutton" target="_blank">Buy Now</a>
      </div>
    </div>
    <div class="box box6">
      <div class="boxcontent">
        <img src="images/pcportable/HP OMEN.jpg" alt="" class="box6img">
        <h2 class="box6title">HP OMEN 17 </h2>
        <p class="boxp"> i7 11800H, NVIDIA RTX 3070,32Go RAM DDR4,SSD 1To PCIe® NVMe. FHD,IPS,1920 x 1080 pixels, 144 Hz  </p>
        <span>18499 DHs</span>
        <a href="#" class="boxbutton">Buy Now</a>
      </div>
    </div>
    <div class="box box7">
      <div class="boxcontent">
        <img src="images/pcportable/HPpavillon.jpg" alt="" class="box7img">
        <h2 class="box7title">HP Pavilion X360</h2>
        <p class="boxp"> i7-1355U Turbo Boost,16 Go RAM DDR4,SSD PCIe® NVMe™ M.2 512 Go ,Full HD Windows 11  </p>
        <span>12000 DHs</span>
        <a href="#" class="boxbutton">Buy Now</a>
      </div>
    </div>
    <div class="box box8">
      <div class="boxcontent">
        <img src="images/pcportable/LENOVO V130.jpg" alt="" class="box8img">
        <h2 class="box8title">LENOVO V130-15IKB</h2>
        <p class="boxp">Intel Core I3-7020U RAM 8GO DDR4 , 512 SSD (M.2), Ecran 15.6 pouces FHD TN , Windows 10 Famille 64bits </p>
        <span>7900 DHs</span>
        <a href="#" class="boxbutton">Buy Now</a>
      </div>
    </div>
    <div class="box box9">
      <div class="boxcontent">
        <img src="images/pcportable/Lenovo IdeaPad L340.jpg" alt="" class="box9img">
        <h2 class="box9title">LENOVO IDEAPAD L340 GAMING</h2>
        <p class="boxp"> Intel Core i7-9750H,NVIDIA  GTX 1650, RAM 16Go DDR4, 512Go SSD, FHD,Windows 10 Famille</p>
        <span>11 000 DHs</span>
        <a href="#" class="boxbutton">Buy Now</a>
      </div>
    </div>
    <div class="box box10">
        <div class="boxcontent">
          <img src="images/pcportable/LenovoThinkPad X1.jpg" alt="" class="box9img">
          <h2 class="box9title">LENOVO THINKPAD X1</h2>
          <p class="boxp">  Intel® Core™ i7-1165G7 vPro,32 Go RAM,SSD de 1To, M.2 PCIe Intel® Iris® Xe,Windows 10 Professionnel </p>
          <span>22 000 DHs</span>
          <a href="#" class="boxbutton">Buy Now</a>
        </div>
      </div>
      <div class="box box11">
        <div class="boxcontent">
          <img src="images/pcportable/RAZER BLADE.jpg" alt="" class="box9img">
          <h2 class="box9title">RAZER BLADE GAMING </h2>
          <p class="boxp"> Intel Core i9-13950HX, RAM 32 Go  DDR5, SSD 1 To NVMe PCIe, NVIDIA GeForce RTX 4080 12 Go DLSS 3 , Windows 11</p>
          <span>56 599DHs</span>
          <a href="#" class="boxbutton">Buy Now</a>
        </div>
      </div>
      <div class="box box12">
        <div class="boxcontent">
          <img src="images/pcportable/AsusVivoBook.jpg" alt="" class="box9img">
          <h2 class="box9title">ASUS VIVOBOOK S14</h2>
          <p class="boxp"> 	Intel Core i3-8145U, Intel UHD Graphics 620,RAM 4GO Windows 10, Garantie 1 an</p>
          <span>6499 DHs</span>
          <a href="#" class="boxbutton">Buy Now</a>
        </div>
      </div>
</section>
<!--fin section des produits-->


      <!--debut footer-->
      <div id="footer">
        <section class="footercontainer">
          <div class="box1f">
            <h2>FOLLOW US</h2>
           <div class="socialicons">
            <a  href="#"> <i  class="fa-brands fa-facebook"></i></i></a>
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