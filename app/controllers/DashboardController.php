<?php
	class DashboardController {
		// Loading the home view.
		public function displayHome() {
		$teamsManager = new TeamsManager();
		$teams = $teamsManager->getAll();
			require_once('app/views/dashboard/home-view.php');
		}
	}
?>
