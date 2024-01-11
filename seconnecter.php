<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/seconnecter.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=electrostore;charset=utf8', 'root', '');

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['motdepasse'];

    // Vérification si l'e-mail existe
    $checkEmailQuery = "SELECT * FROM login WHERE email = :email";
    $stmt = $bdd->prepare($checkEmailQuery);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    // Utilisation de fetch pour obtenir une ligne de résultat
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        // L'e-mail existe, vérification du mot de passe
        if (password_verify($password, $row["motdepasse"])) {
            // Mot de passe correct, utilisateur connecté
            header("Location: index.php");
            exit();
        } else {
            // Mot de passe incorrect
            echo "Mot de passe incorrect";
        }
    } else {
        // L'e-mail n'existe pas
        echo "Veuillez vous inscrire tout d'abord.";
    }
}
?>



   <header>
      <nav>
          <h2 class="logo"><span>Electro</span>Store</h2>
          <ul class="navlinks">
             <li><a href="index.html"><i class="fa-solid fa-house"></i> Acceuil</a></li>
             <li><a href="#newproduct">Nauveauté</a></li>
             <li><a href="#">Panier <i class="fa-solid fa-cart-shopping"></i></a></li>
             <li><a href="login.html">Connexion <i class="fa-solid fa-user"></i></a></li>  
          </ul>
         
      </nav>
    </header> 
    <div class="box">
       <form method="POST">
         <h2>Se connecter</h2>
         <div class="inputbox">
            <input type="email" required="required" name="email">
            <span>Email</span>
            <i></i>
         </div>
         <div class="inputbox">
            <input type="password" required="required" name="motdepasse">
            <span>Password</span>
            <i></i>
         </div>
         <div class="links">
            <a href="#">Forgot Password</a>
            <a href="login.php">S'inscrire</a>
         </div>
         <input type="submit" value="Login" name="submit">
       </form>
    </div>