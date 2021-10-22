<?php
session_start();
include './connexion.inc.php';

$page = 'user';
include './header.inc.php';

?>

<div class="" data-aos="fade">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2 class="site-section-heading text-center">Utilisateurs</h2>
            </div>
        </div>

        <div class="row">
            
            <?php
            
            //$id = $_GET['user'];  -> pas besoin

            //on définit la requete SQL à envoyer
            $sql = "SELECT * FROM user ";

            //on envoie la requete et on enregistre les données
            $resultats= $connexion->query($sql);
            
            //on récupère les données
            $user = $resultats->fetch();
            
            
            if($user == False){
            ?>
                <div class="col-md-12">
                    <p class="text-center">
                        Pas d'utilisateurs enregistré pour le moment...
                    </p>
                </div>
            <?php
            }
            
            if($user != False){
                ?>
            
                <div class="col-md-12">
                    <p class="text-center">
                        Voici la liste d'utilisateurs enregistrés !
                    </p>
                </div>
                <!-- Si il y a des users enregistrés (id>0), alors on affiche le tableau. Sinon, on affiche un message d'erreur -->
                <!-- Sinon, on affiche un message d'erreur : "Pas d'utilisateurs enregistré pour le moment..." -->

                <table style="width:100%">
                    <tr>

                        <th width=5% >ID</th>
                        <th width=15%>Nom d'utilisateur</th>
                        <th width=15%>Mot de passe</th>
                        <th width=15%>Nom</th>
                        <th width=15%>Prénom</th>
                        <th width=15%>Avatar</th>
                        <th width=15%>Commentaire</th>
                        <th width=10%>Role</th>

                    </tr>
                </table>
            
            
            <?php
            }

            while($user != False){
                
                //on enregistre les infos en les répartissant
                $id = $user['id'];
                $username = utf8_encode($user['username']);
                $password = utf8_encode($user['password']);
                $nom = utf8_encode($user['nom']);
                $prenom = utf8_encode($user['prenom']);
                $avatar = $user['avatar'];
                $commentaire = utf8_encode($user['commentaire']);
                $role = utf8_encode($user['role']);


            ?>
            
                <table style="width:100%">

                    <tr>
                        
                        <td width=5%><?php echo $id ?></td>
                        <td width=15%><?php echo $username ?></td>
                        <td width=15%><?php echo $password ?></td>
                        <td width=15%><?php echo $nom ?></td>
                        <td width=15%><?php echo $prenom ?></td>
                        
                        <td width=15%><?php //on recupere les photos
            
                            $sqlAvatar = "SELECT * FROM user WHERE id = $id ";
                            $resultatsAvatar = $connexion->query($sqlAvatar);
                            $avatar = $resultatsAvatar->fetch();

                            while ($avatar != false){
                                $cheminAvatar = "images/users/min/" . $user['avatar']; // le resultat est images/users/min/?.jpg
                        ?>
                            <img src = "<?php echo $cheminAvatar; ?>" alt = "Image" width="60%" height="70%"></a>


                        <?php
                            //on reprend puis on finit la boucle while
                            $avatar = $resultatsAvatar->fetch();
                            }
                        ?></td>  
                        
                        
                        <td width=15%><?php echo $commentaire ?></td>
                        <td width=10%><?php echo $role ?></td>

                    </tr>
                </table>
            
            <?php
                $user = $resultats->fetch();
            }
            ?>    

        </div>

    </div>
</div>

<?php include 'footer.inc.php'; ?>
