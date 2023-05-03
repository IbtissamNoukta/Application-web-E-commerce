<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Ibtissam - MEUBLES | Shop</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="index.php" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>
        <!--  Mobile Nav (max width 767px) end-->

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="shop.php">Shop</a></li>
                    <li><a href="cart.php">Cart</a></li>
                </ul>
            </nav>
            <!-- Button Group -->
            <div class="amado-btn-group mt-30 mb-100">
                <a href="shop.php?N" class="btn amado-btn active">New this week</a>
            </div>
            <!-- Cart Menu -->
            <div class="cart-fav-search mb-100">
                <a href="cart.php" class="cart-nav"><img src="img/core-img/cart.png" alt=""> Cart </a>
                <a href="#" class="search-nav"><img src="img/core-img/search.png" alt=""> Search</a>
            </div>
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                <a href="http://www.pinterest.com"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="http://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="http://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="http://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </header>
        <!-- Header Area End -->

        <div class="shop_sidebar_area">

            <!-- ##### Single Widget ##### -->
            <div class="widget catagory mb-50">
                <!-- Widget Title -->
                <h6 class="widget-title mb-30">Catagories</h6>

                <!--  Catagories  -->
                <div class="catagories-menu">
                    
                         <?php
                   if(isset($_GET['A'])){
                    $A=$_GET['A'];
                    if ($A=1) {
                        echo('<ul><li class="active"><a href="shop.php?A=1">chaises</a></li>
                        <li><a href="shop.php?A=2">Lits</a></li>
                        <li><a href="shop.php?A=3">Accessoires</a></li>
                        <li><a href="shop.php?A=4">Meubles</a></li>
                        <li><a href="shop.php?A=5">Tableaux</a></li>
                        <li><a href="shop.php?A=6">Tables</a></li></ul>');
                    }elseif ($A=2) {
                         echo('<ul><li><a href="shop.php?A=1">chaises</a></li>
                        <li class="active"><a href="shop.php?A=2">Lits</a></li>
                        <li><a href="shop.php?A=3">Accessoires</a></li>
                        <li><a href="shop.php?A=4">Meubles</a></li>
                        <li><a href="shop.php?A=5">Tableaux</a></li>
                        <li><a href="shop.php?A=6">Tables</a></li></ul>');
                    }elseif ($A=3) {
                          echo('<ul><li><a href="shop.php?A=1">chaises</a></li>
                        <li><a href="shop.php?A=2">Lits</a></li>
                        <li class="active"><a href="shop.php?A=3">Accessoires</a></li>
                        <li><a href="shop.php?A=4">Meubles</a></li>
                        <li><a href="shop.php?A=5">Tableaux</a></li>
                        <li><a href="shop.php?A=6">Tables</a></li></ul>');
                    }elseif ($A=4) {
                          echo('<ul><li><a href="shop.php?A=1">chaises</a></li>
                        <li><a href="shop.php?A=2">Lits</a></li>
                        <li><a href="shop.php?A=3">Accessoires</a></li>
                        <li class="active"><a href="shop.php?A=4">Meubles</a></li>
                        <li><a href="shop.php?A=5">Tableaux</a></li>
                        <li><a href="shop.php?A=6">Tables</a></li></ul>');
                    }elseif($A=5){
                    echo('<ul><li><a href="shop.php?A=1">chaises</a></li>
                        <li><a href="shop.php?A=2">Lits</a></li>
                        <li><a href="shop.php?A=3">Accessoires</a></li>
                        <li><a href="shop.php?A=4">Meubles</a></li>
                        <li class="active"><a href="shop.php?A=5">Tableaux</a></li>
                        <li><a href="shop.php?A=6">Tables</a></li></ul>');
                    }elseif ($A=6) {
                        echo('<ul><li><a href="shop.php?A=1">chaises</a></li>
                        <li><a href="shop.php?A=2">Lits</a></li>
                        <li><a href="shop.php?A=3">Accessoires</a></li>
                        <li><a href="shop.php?A=4">Meubles</a></li>
                        <li><a href="shop.php?A=5">Tableaux</a></li>
                        <li class="active"><a href="shop.php?A=6">Tables</a></li></ul>');
                    }
                    }else{
                        echo('<ul><li><a href="shop.php?A=1">chaises</a></li>
                        <li><a href="shop.php?A=2">Lits</a></li>
                        <li><a href="shop.php?A=3">Accessoires</a></li>
                        <li><a href="shop.php?A=4">Meubles</a></li>
                        <li><a href="shop.php?A=5">Tableaux</a></li>
                        <li><a href="shop.php?A=6">Tables</a></li></ul>');
                    }

                    ?>
                        
                </div>
            </div>

            <!-- ##### Single Widget ##### -->
            <div class="widget brands mb-50">
                <!-- Widget Title -->
                <script>
                    function checkbox(){
                        document.getElementById('form_2').submit();
                    }
                </script>
            
                <h6 class="widget-title mb-30">marques</h6>

                <div class="widget-desc">
                    <form id="form_2" action="shop.php" method="POST">
                    <!-- Single Form Check -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" <?php  if (isset($_POST['Kitea']) && $_POST['Kitea']=="Kitea") { echo "checked=\"checked\"";} ?> onclick="checkbox()" value="Kitea" id="Kitea" name="Kitea">
                        <label class="form-check-label" for="kitea">Kitea</label>
                    </div>

                    <!-- Single Form Check -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" <?php  if (isset($_POST['Ikea']) && $_POST['Ikea']=="Ikea") { echo "checked=\"checked\"";}?> onclick="checkbox()" value="Ikea" id="Ikea" name="Ikea">
                        <label class="form-check-label" for="ikea">Ikea</label>
                    </div>
                    <!-- Single Form Check -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" <?php  if (isset($_POST['Pretty']) && $_POST['Pretty']=="Pretty Home") { echo "checked=\"checked\"";} ?> onclick="checkbox()" value="Pretty Home" id="Pretty Home" name="Pretty">
                        <label class="form-check-label" for="Pretty Home">Pretty Home</label>
                    </div>
                    <!-- Single Form Check -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" <?php  if (isset($_POST['Flash']) && $_POST['Flash']=="Flash Furniture") { echo "checked=\"checked\"";} ?> onclick="checkbox()" value="Flash Furniture" id="Flash Furniture" name="Flash">
                        <label class="form-check-label" for="Flash Furniture">Flash Furniture</label>
                    </div>
                    <!-- Single Form Check -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" <?php  if (isset($_POST['Ashler']) && $_POST['Ashler']=="Ashler Home Deco") { echo "checked=\"checked\"";} ?> onclick="checkbox()" value="Ashler Home Deco" id="Ashler Home Deco" name="Ashler">
                        <label class="form-check-label" for="Ashler Home Deco">Ashler Home Deco</label>
                    </div>
                </form>
                </div>
            </div>

            <!-- ##### Single Widget ##### -->
            <div class="widget color mb-50">
                <!-- Widget Title -->
                <h6 class="widget-title mb-30">Couleur</h6>

                <div class="widget-desc">
                    <ul class="d-flex">
                        <li ><a href="shop.php?B=blanc" class="color1"></a></li>
                        <li><a href="shop.php?B=gris" class="color2"></a></li>
                        <li><a href="shop.php?B=noire" class="color3"></a></li>
                        <li><a href="shop.php?B=bleu" class="color4"></a></li>
                        <li><a href="shop.php?B=rose" class="color5"></a></li>
                        <li><a href="shop.php?B=jaune" class="color6"></a></li>
                        <li><a href="shop.php?B=orange" class="color7"></a></li>
                        <li><a href="shop.php?B=marron" class="color8"></a></li>
                    </ul>
                </div>
            </div>

            <!-- ##### Single Widget ##### -->
            <div class="widget price mb-50">
            </div>
        </div>

        <div class="amado_product_area section-padding-100">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                            <!---->
                            <div class="total-products">
                                <p></p>
                            </div>
                            <!-- Sorting -->
                            <div class="product-sorting d-flex">
                                <div class="sort-by-date d-flex align-items-center mr-15">
                                    <p>Sort by</p>
                                    <script type="text/javascript">
                                        function myFunction(){
                                        document.getElementById('form_').submit();
                                         }
                                    </script>
                                    <form id="form_" action="shop.php" method="get">
                                        <select name="select"  id="select" onchange="myFunction()">
                                            <option <?php if (isset($_GET['select']) && $_GET['select']=='Newest') {echo"selected";} ?> value="Newest" id="Newest">Newest</option>
                                            <option <?php if (isset($_GET['select']) && $_GET['select']=='Popular') {echo"selected";} ?> value="Popular" id="Popular">Popular</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
 
                    
                    <!-- Single Product Area -->
                    <?php 

                    $serveur="localhost";
                    $login="root";
                    $pass="";

                    try{
                    if(isset($_GET['A'])){
                    $A=$_GET['A'];

                    $connexion = new PDO("mysql:host=$serveur;dbname=e-commerce",$login,$pass);
                    $connexion->setattribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    $requete1=$connexion->prepare("
                    SELECT ID_Produit,prix,Nom_Pr FROM Produit natural join Categorie  where ID_Cat=$A");
                    $requete1->execute();
                    $requete1=$requete1->fetchall();
                    for ($i=0; $i <count($requete1) ; $i++){
                    echo ('<div class="col-12 col-sm-6 col-md-12 col-xl-6">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/'.$requete1[$i][0].'_1.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/'.$requete1[$i][0].'_2.jpg" alt="">
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">$'.$requete1[$i][1].'</p>
                                    <a href="product-details.php?ID='.$requete1[$i][0].'">
                                        <h6>'.$requete1[$i][2].'</h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="cart">
                                        <a href="add.php?ID2 ='.$requete1[$i][0].'& F=1" data-toggle="tooltip" data-placement="left" title="Add to Cart"><img src="img/core-img/cart.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>');}
                    }elseif (isset($_GET['B'])) {
                        $B=$_GET['B'];
                       $connexion = new PDO("mysql:host=$serveur;dbname=e-commerce",$login,$pass);
                    $connexion->setattribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    $requete3=$connexion->prepare("SELECT ID_Produit,prix,Nom_Pr FROM Produit where Color LIKE'%".$B."%'");
                    $requete3->execute();
                    $requete3=$requete3->fetchall();
                    for ($i=0; $i <count($requete3) ; $i++){
                       
                    echo('<div class="col-12 col-sm-6 col-md-12 col-xl-6">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/'.$requete3[$i][0].'_1.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/'.$requete3[$i][0].'_2.jpg" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">$'.$requete3[$i][1].'</p>
                                    <a href="product-details.php?ID='.$requete3[$i][0].'">
                                        <h6>'.$requete3[$i][2].'</h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="cart">
                                        <a href="add.php?ID2='.$requete3[$i][0].'& F=1" data-toggle="tooltip" data-placement="left" title="Add to Cart"><img src="img/core-img/cart.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>');}
                    }elseif (isset($_GET['N'])) {
                    $connexion = new PDO("mysql:host=$serveur;dbname=e-commerce",$login,$pass);
                    $connexion->setattribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    $requete5=$connexion->prepare(" SELECT Date_P,ID_Produit FROM Produit");
                    $requete5->execute();
                    $requete5=$requete5->fetchall();
                      for ($i=0; $i <count($requete5) ; $i++){
                            $ID_Produit=$requete5[$i][1];
                            $Date_P=$requete5[$i][0];
                            $Date_N=date("Y/m/d");
                        $NEW=((strtotime($Date_N) - strtotime($Date_P))/86400);
                        if ($NEW<7) {
                                $connexion = new PDO("mysql:host=$serveur;dbname=e-commerce",$login,$pass);
                                $connexion->setattribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                                $requete6=$connexion->prepare(" SELECT Id_Produit,prix,Nom_Pr FROM Produit where Id_Produit=$ID_Produit ");
                                $requete6->execute();
                                $requete6=$requete6->fetchall();
                                echo('<div class="col-12 col-sm-6 col-md-12 col-xl-6">
                                <div class="single-product-wrapper">
                                <!-- Product Image -->
                                    <div class="product-img">
                                    <img src="img/product-img/'.$requete6[0][0].'_1.jpg" alt="">
                                <!-- Hover Thumb -->
                                    <img class="hover-img" src="img/product-img/'.$requete6[0][0].'_2.jpg" alt="">
                                </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">$'.$requete6[0][1].'</p>
                                    <a href="product-details.php?ID='.$requete5[$i][1].'">
                                        <h6>'.$requete6[0][2].'</h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="cart">
                                        <a href="add.php?ID2='.$requete5[$i][1].' & F=1" data-toggle="tooltip" data-placement="left" title="Add to Cart"><img src="img/core-img/cart.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>');
                        }
                       } 
                    }elseif (isset($_GET['select'])) {
                            if ($_GET['select']=='Newest') {
                            $connexion = new PDO("mysql:host=$serveur;dbname=e-commerce",$login,$pass);
                            $connexion->setattribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                            $requete7=$connexion->prepare(" SELECT Id_Produit,prix,Nom_Pr FROM Produit  ORDER BY `DATE_P` DESC");
                            $requete7->execute();
                            $requete7=$requete7->fetchall();
                            for ($i=0; $i <count($requete7) ; $i++){
                                    echo('<div class="col-12 col-sm-6 col-md-12 col-xl-6">
                                <div class="single-product-wrapper">
                                <!-- Product Image -->
                                    <div class="product-img">
                                    <img src="img/product-img/'.$requete7[$i][0].'_1.jpg" alt="">
                                <!-- Hover Thumb -->
                                    <img class="hover-img" src="img/product-img/'.$requete7[$i][0].'_2.jpg" alt="">
                                </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">$'.$requete7[$i][1].'</p>
                                    <a href="product-details.php?ID='.$requete7[$i][0].'">
                                        <h6>'.$requete7[$i][2].'</h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="cart">
                                        <a href="add.php?ID2='.$requete7[$i][0].' & F=1" data-toggle="tooltip" data-placement="left" title="Add to Cart"><img src="img/core-img/cart.png" alt=""></a>
                                         </div>
                                     </div>
                                    </div>
                                </div>
                            </div>');}
                            }else{
                            $connexion = new PDO("mysql:host=$serveur;dbname=e-commerce",$login,$pass);
                            $connexion->setattribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                            $requete7=$connexion->prepare(" SELECT Id_Produit,prix,Nom_Pr FROM Produit  ORDER BY `POPULAIRE` DESC");
                            $requete7->execute();
                            $requete7=$requete7->fetchall();
                            for ($i=0; $i <count($requete7) ; $i++){
                                echo('<div class="col-12 col-sm-6 col-md-12 col-xl-6">
                                <div class="single-product-wrapper">
                                <!-- Product Image -->
                                    <div class="product-img">
                                    <img src="img/product-img/'.$requete7[$i][0].'_1.jpg" alt="">
                                <!-- Hover Thumb -->
                                    <img class="hover-img" src="img/product-img/'.$requete7[$i][0].'_2.jpg" alt="">
                                </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">$'.$requete7[$i][1].'</p>
                                    <a href="product-details.php?ID='.$requete7[$i][0].'">
                                        <h6>'.$requete7[$i][2].'</h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="cart">
                                        <a href="add.php?ID2='.$requete7[$i][0].' & F=1" data-toggle="tooltip" data-placement="left" title="Add to Cart"><img src="img/core-img/cart.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>');
                        }}

                    }else{
                        $marq="";
                        $bol=false;
                        if (isset($_POST['Kitea'])) {
                            if (!empty($_POST['Kitea'])) {
                                $bol=true;
                                if (strlen($marq)!=0) {
                                    $marq=$marq.'OR Nom_Marq LIKE "'.$_POST['Kitea'].'"' ;
                                }else{
                                    $marq=$marq.'Nom_Marq LIKE "'.$_POST['Kitea'].'"' ;
                                }
                            }
                        }
                           
                        if (isset($_POST['Ikea'])) {
                            if (!empty($_POST['Ikea'])) {
                                $bol=true;
                                if (strlen($marq)!=0) {
                                    $marq=$marq.'OR Nom_Marq LIKE "'.$_POST['Ikea'].'"';
                                }else{
                                    $marq=$marq.'Nom_Marq LIKE "'.$_POST['Ikea'].'"';
                                }
                            }
                        }
                        
                        if (isset($_POST['Pretty'])) {
                            if (!empty($_POST['Pretty'])) {
                                $bol=true;
                                if (strlen($marq)!=0) {
                                    $marq=$marq.'OR Nom_Marq LIKE "'.$_POST['Pretty'].'"';
                                }else{
                                    $marq=$marq.'Nom_Marq LIKE "'.$_POST['Pretty'].'"';
                                }
                            }
                        }
                        
 
                        if (isset($_POST['Flash'])) {
                            if (!empty($_POST['Flash'])) {
                                $bol=true;
                                if (strlen($marq)!=0) {
                                    $marq=$marq.'OR Nom_Marq LIKE "'.$_POST['Flash'].'"';
                                }else{
                                    $marq=$marq.'Nom_Marq LIKE "'.$_POST['Flash'].'"';
                                }
                            }
                        }

                        if (isset($_POST['Ashler'])) {
                            if (!empty($_POST['Ashler'])) {
                                $bol=true;
                                if (strlen($marq)!=0) {
                                    $marq=$marq.'OR Nom_Marq LIKE "'.$_POST['Ashler'].'"';
                                }else{
                                    $marq=$marq.'Nom_Marq LIKE "'.$_POST['Ashler'].'"';
                                }
                            }
                        }
                        if ($bol==true) {
                             $connexion = new PDO("mysql:host=$serveur;dbname=e-commerce",$login,$pass);
                            $connexion->setattribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                            $r1=$connexion->prepare("SELECT ID_Produit,prix,Nom_Pr FROM Produit natural join Marque  where $marq");
                            $r1->execute();
                            $r1=$r1->fetchall(); 
                            for ($i=0; $i <count($r1) ; $i++){
                            echo('<div class="col-12 col-sm-6 col-md-12 col-xl-6">
                            <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/'.$r1[$i][0].'_1.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/'.$r1[$i][0].'_2.jpg" alt="">
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">$'.$r1[$i][1].'</p>
                                    <a href="product-details.php?ID='.$r1[$i][0].'">
                                        <h6>'.$r1[$i][2].'</h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="cart">
                                        <a href="add.php?ID2='.$r1[$i][0].' & F=1" data-toggle="tooltip" data-placement="left" title="Add to Cart"><img src="img/core-img/cart.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            </div>
                            </div>'); }
                        }else{
                           $connexion = new PDO("mysql:host=$serveur;dbname=e-commerce",$login,$pass);
                            $connexion->setattribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                            $requete2=$connexion->prepare(" SELECT Id_Produit,prix,Nom_Pr FROM Produit");

                            $requete2->execute();
                            $requete2=$requete2->fetchall();
                            for ($i=0; $i <count($requete2) ; $i++){
                            echo('<div class="col-12 col-sm-6 col-md-12 col-xl-6">
                            <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/'.$requete2[$i][0].'_1.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/'.$requete2[$i][0].'_2.jpg" alt="">
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">$'.$requete2[$i][1].'</p>
                                    <a href="product-details.php?ID='.$requete2[$i][0].'">
                                        <h6>'.$requete2[$i][2].'</h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="cart">
                                        <a href="add.php?ID2='.$requete2[$i][0].' & F=1" data-toggle="tooltip" data-placement="left" title="Add to Cart"><img src="img/core-img/cart.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>');}  
                    }
                }
                           
                    }catch(PDOEXEPTION $e){
                    echo'echec:'.$e->get_message();
                    }
                    ?>
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->


    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="index.php"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Copywrite Text -->
                        <p class="copywrite"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> & Re-distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>

                <!-- Single Widget Area -->
                <div class="col-12 col-lg-8">
                    <div class="single_widget_area">
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <nav class="navbar navbar-expand-lg justify-content-end">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNavContent" aria-controls="footerNavContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                                <div class="collapse navbar-collapse" id="footerNavContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="index.php">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="shop.php">Shop</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="cart.php">Cart</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>.
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>
</html>