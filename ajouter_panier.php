<?php
//page de connexion
include_once "db.php";
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['electrostore'])){
    $_SESSION['electrostore'] = array();

}
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $produit = mysqli_query($con , "SELECT * FROM panier WHERE id = $id");
    if(empty(mysqli_fetch_assoc($produit))){
        die("ce produit n'existe pas");
    }
    // ajout du produit au panier
    if(isset($_SESSION['electrostore'][$id])){
        $_SESSION['electrostore'][$id]++;
    }else{
        $_SESSION['electrostore'][$id]= 1 ;
        
    }
    header("Location:acessoires.php");





}

?>