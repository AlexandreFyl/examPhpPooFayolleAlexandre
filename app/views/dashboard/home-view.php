<?php
	// Importing header.
	require_once('app/views/parts/header.php');
?>

<main>
	<div class="row my-4">
		<div class="col-8 mx-auto">
			<div class="card shadow text-light bg-dark p-4">
				<h2 class="text-center">Bienvenue <?= $_SESSION['username'] ?> !</h2>
                <h3 class="text-center">Voici le classement actuel de ligue 1 :</h3>
				<div class="text-center mt-4">
					<a href="index.php?page=user&action=logout"><button class="btn btn-danger">Déconnexion</button></a>
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
