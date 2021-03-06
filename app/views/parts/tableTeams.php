<table class="table">
    <thead>
    <td>Nom</td>
    <td>Points</td>
    <td>Buts inscrits</td>
    <td>Buts encaissés</td>
    <td>Action</td>
    </thead>

    <tbody>
    <?php
    foreach ($teams as $team) {
        ?>
        <tr>
            <td><?php echo $team->getName()?></td>
            <td><?php echo $team->getPoints()?></td>
            <td><?php echo $team->getGoalsScored()?></td>
            <td><?php echo $team->getGoalsConceded()?></td>
            <td>
                <a class="btn btn-dark" href="index.php?page=dashboard&action=delete&id=<?php echo $team->getId()?>">Supprimer</a>
                <a class="btn btn-dark" href="index.php?page=dashboard&action=edit&id=<?php echo $team->getId()?>">Modifier</a>
            </td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
