<?php
	// Importing header.
	require_once('app/views/parts/header.php');
?>

<main>
	<div class="row my-4">
		<div class="col-8 mx-auto">
			<div class="card shadow text-light bg-dark p-4">
				<h2 class="text-center">Bienvenue <?= $_SESSION['username'] ?> !</h2>
                <h5 class="text-center">Vous pouvez maintenant modifier le classement de ligue 1</h5>
				<div class="text-center mt-4">
					<a href="index.php?page=user&action=logout"><button class="btn btn-danger mx-3">Déconnexion</button></a>
					<a href="index.php?page=dashboard&action=add"><button class="btn btn-success mx-3">Ajouter une nouvelle équipe</button></a>
				</div>
			</div>
            <div>
                <?php include 'app/views/parts/tableTeams.php'?>
            </div>
		</div>
	</div>
</main>

<?php
	// Importing footer.
	require_once('app/views/parts/footer.php');
?>
