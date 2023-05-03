 <?php
    session_start();
    if (isset($_GET['ID2'])) {
        $ID=$_GET['ID2'];
    }else{
        $ID=$_SESSION['ID'];
    }
    if (isset($_POST['quantity'])) {
         $qty=$_POST['quantity'];
    }else{
        $qty=1;
    }

     $serveur="localhost";
            $login="root";
            $pass="";
            $connexion = new PDO("mysql:host=$serveur;dbname=e-commerce",$login,$pass);
            $connexion->setattribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            try{
                $requete2=$connexion->prepare("SELECT Id_Com FROM Constituer");
                $requete2->execute();
                $requete2=$requete2->fetchall();
                $nbr=count($requete2)+1;
                $Id_Com="000".$nbr;


                $requete1=$connexion->prepare("SELECT Quant , Populaire FROM Produit WHERE Id_Produit= $ID");
                $requete1->execute();
                $requete1=$requete1->fetchall();
                if ($requete1[0][0] > 0 || $requete1[0][0] >= $qty) {
                        $new_qty=$requete1[0][0] - $qty;
                        $new_populaire=$requete1[0][1]+1;

                        $requete3=$connexion->prepare("INSERT INTO Constituer (Id_Com, Id_Produit, Qte )
                        VALUES ('$Id_Com','$ID','$qty')");
                        $requete3->execute();

                        $requete4=$connexion->prepare("UPDATE Produit 
                        SET Quant=$new_qty , Populaire=$new_populaire where Id_Produit=$ID");
                        $requete4->execute();
                        if (isset($_GET['F'])) {
                                header("location:shop.php");

                        }else{
                                header("location:cart.php");   
                        }
                }else{
                        header("location:product-details.php?ID=".$ID."");
                }


            }catch(PDOEXEPTION $e){
                    echo'echec:'.$e->get_message();
            }
?>