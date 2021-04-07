<?php
// Importing header.
require_once('app/views/parts/header.php');
?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 card shadow mt-4 py-2">
                <h1>Mise à jour de l'équipe suivante : <?php echo $team->getName(); ?></h1>



                <form method="post"
                      action="index.php?page=dashboard&action=commitEdit&id=<?php echo $team->getId() ?>">
                    <label>Nom</label>
                    <input name="name" value="<?php echo $team->getName() ?>" class="form-control">

                    <label>Points</label>
                    <input name="points" value="<?php echo $team->getPoints() ?>" class="form-control">

                    <label>But inscrits</label>
                    <input name="goalsScored" value="<?php echo $team->getGoalsScored() ?>" class="form-control">

                    <label>But encaissés</label>
                    <input name="goalsConceded" value="<?php echo $team->getGoalsConceded() ?>" class="form-control">
                    <div class="d-flex justify-content-around mt-4">
                    <a href="index.php?page=dashboard&action=home" class="btn btn-dark">
                        Retour au classement
                    </a>
                    <input class="btn btn-success" type="submit" value="Enregistrer les modifications">
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
