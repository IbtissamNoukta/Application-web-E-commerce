<?php
session_start();
$nom=$_POST['first_name'];
$prenom=$_POST['last_name'];
$email=$_POST['email'];
$pays=$_POST['country'];
$adresse=$_POST['street_address'];
$ville=$_POST['city'];
$CODE_POSTAL=$_POST['zipCode'];
$TELE=$_POST['phone_number'];
$CMT=$_POST['comment'];

$Total=$_SESSION['S'];
if (isset($_POST['cod'])) {
    $paiement="Cash on Delivery";
}else{
    $paiement="Paypal";
}

$date_com=date("Y/m/d");

     $serveur="localhost";
            $login="root";
            $pass="";
            $connexion = new PDO("mysql:host=$serveur;dbname=e-commerce",$login,$pass);
            $connexion->setattribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            try{
                $requete3=$connexion->prepare("SELECT NOM_Cli,PRENOM, ID_CLIENT FROM Client");
                $requete3->execute();
                $requete3=$requete3->fetchall();
                $j=0;
                for ($i=0; $i <count($requete3) ; $i++) { 
                    if (count($requete3)>0 && $requete3[$i][0]==$nom && $requete3[$i][1]==$prenom ) {
                        $j=$j+1;
                    }
                }
                if ($j==0) {
                     $requete1=$connexion->prepare("SELECT Id_Client FROM Client");
                        $requete1->execute();
                        $requete1=$requete1->fetchall();
                        $nbr=count($requete1)+1;
                        $Id_Client="000".$nbr;
            $r2=$connexion->prepare("INSERT INTO Client (ID_CLIENT, NOM_Cli, PRENOM, EMAIL, ADRESSE, TELE, VILLE, CODE_POSTAL, PAYS, CMT)
                VALUES ('$Id_Client','$nom','$prenom','$email','$adresse','$TELE','$ville','$CODE_POSTAL','$pays','$CMT')");
                $r2->execute();
                }

                $requete2=$connexion->prepare("SELECT Id_COM FROM Commande");
                $requete2->execute();
                $requete2=$requete2->fetchall();
                $nbr=count($requete2)+1;
                $Id_COM="000".$nbr;


            $r3=$connexion->prepare("INSERT INTO Commande (ID_COM, ID_CLIENT, TOTAL, PAIEMENT, DATE_COM)
                VALUES ('$Id_COM','$Id_Client','$Total','$paiement','$date_com')");
            $r3->execute();
                header("location:cart.php?Add"); 


            }catch(PDOEXEPTION $e){
                    echo'echec:'.$e->get_message();
            }
?>
?>