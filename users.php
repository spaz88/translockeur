<?php
session_start();
include './connexion.inc.php';

$page = 'user';
include './header.inc.php';



//$id = $_GET['user'];  -> pas besoin

//on définit la requete SQL à envoyer
$sql = "SELECT * FROM user ";

//on envoie la requete et on enregistre les données
$resultats= $connexion->query($sql);

//on récupère les données
$user = $resultats->fetch();

//on enregistre les infos en les répartissant
$id = $user['id'];
$username = utf8_encode($user['username']);
$password = utf8_encode($user['password']);
$nom = utf8_encode($user['nom']);
$prenom = utf8_encode($user['prenom']);
$avatar = utf8_encode($user['avatar']);
$commentaire = utf8_encode($user['commentaire']);
$role = utf8_encode($user['role']);

?>

<div class="" data-aos="fade">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2 class="site-section-heading text-center">Utilisateurs</h2>
            </div>
        </div>

        <div class="row">
            
            <div class="col-md-12">
                <p class="text-center">
                    Voici la liste d'utilisateurs enregistrés !
                </p>
            </div>
            
            <!-- Si il y a des users enregistrés (id>0), alors on affiche le tableau. Sinon, on affiche un message d'erreur -->
            <!-- Sinon, on affiche un message d'erreur : "Pas d'utilisateurs enregistré pour le moment..." -->

            <table style="width:100%">
                <tr>
                
                    <th>ID</th>
                    <th>Nom d'utilisateur</th>
                    <th>Mot de passe</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Avatar</th>
                    <th>Commentaire</th>
                    <th>Role</th>
                    
                </tr>
              
                <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $username ?></td>
                    <td><?php echo $password ?></td>
                    <td><?php echo $nom ?></td>
                    <td><?php echo $prenom ?></td>
                    <td><?php echo $avatar ?></td>
                    <td><?php echo $commentaire ?></td>
                    <td><?php echo $role ?></td>

                </tr>
            </table>


            
            
            
        </div>

    </div>
</div>

<?php include 'footer.inc.php'; ?>
