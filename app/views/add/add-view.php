<?php
// Importing header.
require_once('app/views/parts/header.php');
?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 card shadow mt-4 py-2">
                <h1>Création d'une nouvelle équipe</h1>



                <form method="post"
                      action="index.php?page=dashboard&action=commitAdd">
                    <label>Nom</label>
                    <input name="name" class="form-control">

                    <label>Points</label>
                    <input name="points" class="form-control">

                    <label>But inscrits</label>
                    <input name="goalsScored" class="form-control">

                    <label>But encaissés</label>
                    <input name="goalsConceded" class="form-control">
                    <div class="d-flex justify-content-around mt-4">
                        <a href="index.php?page=dashboard&action=home" class="btn btn-dark">
                            Retour au classement
                        </a>
                        <input class="btn btn-success" type="submit" value="Ajouter">
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php
// Importing footer.
require_once('app/views/parts/footer.php');
?>
<?php
