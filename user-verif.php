<?php
session_start();
include './connexion.inc.php';

$page = 'user-verif';
include './header.inc.php';

 if(($_GET['action'] == "user-add") && !empty($_POST)){
                        
                        $nom = $_POST['nom'];
                        $prenom = $_POST['prenom'];
                        $pseudo = $_POST['pseudo'];
                        $password = $_POST['password'];
                        $nomAvatar = $_POST['avatar']
                        
                    $sql = ("INSERT INTO `user` (`nom`, `prenom`, `username`, `password`, `avatar`, `commentaire`, `role`) VALUES
                            ('$nom', '$prenom', '$pseudo', '$password','$nomAvatar','','');");
                    
                    $resultats = $connexion->exec($sql);
                    
                    
                    

?>

<div class="" data-aos="fade">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2 class="site-section-heading text-center">Bravo !</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p class="text-center">
                    Vous avez réussi a créer votre compte !
                </p>
            </div>
        </div>

    </div>
</div>

<?php
 }
 else{
?>
<div class="" data-aos="fade">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2 class="site-section-heading text-center">Oops</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p class="text-center">
                    Une erreur est survenu !
                </p>
            </div>
        </div>

    </div>
</div>
<?php
 }
?>
<?php include 'footer.inc.php'; ?>
