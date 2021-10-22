<?php
session_start();
include './connexion.inc.php';

$page = 'login';
include './header.inc.php';
?>

<div class="" data-aos="fade">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2 class="site-section-heading text-center">Se connecter</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p class="text-center">
                    <form action="user-verif.php?action=user-add" method="post" class="form-horizontal" encytype="multipart/form-data">
                    <fieldset>
            <div class="form-group">
                            <label class="col-md-4 controle-label" for="pseudo">Pseudo</label>
                            <div class="col-md-4">
                                <input id="user-pseudo" name="pseudo" class="form-control input-md" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 controle-label" for="password">Mot de passe</label>
                            <div class="col-md-4">
                                <input id="user-password" name="password" class="form-control input-md" type="password">
                            </div>
                        </div>    
                        
                        <div class="form-group">
                            <div class="col-md-offset-4 col-md4 text-right">
                                <input id="user-save" class="btn btn-info" type="submit" name="save" value="Enregistrer" />
                                <button id="user-cancel" name="cancel" class="btn btn-danger">Annuler</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
                </p>
            </div>
        </div>

    </div>
</div>

<?php

?>

<?php include 'footer.inc.php'; ?>