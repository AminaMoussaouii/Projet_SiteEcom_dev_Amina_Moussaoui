<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/inscription.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=electrostore;charset=utf8', 'root', '');
$message = '';

if(isset($_POST['submit'])){
    $nom = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['motdepasse'];

    // Vérification si l'e-mail existe déjà
    $checkEmailQuery = "SELECT * FROM login WHERE email = :email";
    $stmt = $bdd->prepare($checkEmailQuery);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        // L'e-mail existe déjà
        $message = "vous etes déjà inscrit";
    } else {
        // L'e-mail n'existe pas, procéder à l'inscription
        $sql = "INSERT INTO login (username, email, motdepasse) VALUES (:nom, :email, :password)";
        $insertStmt = $bdd->prepare($sql);
        $insertStmt->bindParam(':nom', $nom);
        $insertStmt->bindParam(':email', $email);
        $insertStmt->bindParam(':password', $password);
        $insertStmt->execute();

        header("Location: index.php");
        exit();
    }
}
?>


   <header>
      <nav>
          <h2 class="logo"><span>Electro</span>Store</h2>
          <ul class="navlinks">
             <li><a href="index.php"><i class="fa-solid fa-house"></i> Acceuil</a></li>
             <li><a href="#newproduct">Nauveauté</a></li>
             <li><a href="#">Panier <i class="fa-solid fa-cart-shopping"></i></a></li>
             <li><a href="login.php">Connexion <i class="fa-solid fa-user"></i></a></li>  
          </ul>
         
      </nav>
    </header> 
    <div class="box">
       <form method="POST">
         <h2>S'inscrire</h2>
         <div class="inputbox">
            <input type="text" required="required" name="username">
            <span>Username</span>
            <i></i>
         </div>
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
            <a href="seconnecter.php">se connecter</a>
         </div>
         <input type="submit" value="Login" name="submit">
       </form>
       <p id="erreur"><?= $message ?></p>
    </div>







</body>
</html>