
<?php
session_start();
include_once "db.php";
//suppression des produits ajoutés
if(isset($_GET['del'])){
    $id_del = $_GET['del'];
    unset($_SESSION['electrostore'][$id_del]);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panier page</title>
    <link rel="stylesheet" href="css/acessoires.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body class="panier">
    <section>
        <table>
            <tr>
                <th></th>
                <th>Nom</th>
                <th>prix</th>
                <th>Quantité</th>
                <th>Action</th>
            </tr>
            <?php
            $total = 0;
              $ids= array_keys($_SESSION['electrostore']);
              if(empty($ids)){
                echo "Votre panier est vide";
              }else {
               $produits = mysqli_query($con, "SELECT * FROM panier WHERE id IN(".implode(',',$ids).")");
               
               //liste des produits 
               foreach($produits as $produit):
                // le total 
                $total = $total + $produit['prix'] * $_SESSION['electrostore'][$produit['id']];

            ?>
            <tr>
                <td><img src="images/<?=$produit['img']?>" ></td>
                <td><?=$produit['nom']?></td>
                <td><?=$produit['prix']?></td>
                <td><?=$_SESSION['electrostore'][$produit['id']] //quantité?></td>
                <td><a href="panier2.php?del=<?=$produit['id']?>"><img src="images/delete.jpg"></a></td>
            </tr>
            <?php endforeach; } ?>
            <tr class="total">
                <th>Total = <?=$total?> DHS</th>
            </tr>

        </table>
    </section>


</body>
</html>