<?php
session_start();
include './connexion.inc.php';

$page = 'user-add';
include './header.inc.php';

?>

<div class="" data-aos="fade">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2 class="site-section-heading text-center">Ajout d'utilisateurs</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p class="text-center">
                    Pour ne plus laisser trainer vos artices !
                </p>
            </div>
        </div>

    </div>
</div>

<?php include 'footer.inc.php'; ?>
