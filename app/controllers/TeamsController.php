<?php


class TeamsController
{
    private $teamsManager;

    public function __construct(){
        $this->teamsManager = new TeamsManager();
    }

    //add
    public function addForm(){
        require './app/views/add/add-view.php';
    }

    public function commitAdd()
    {
        $team = new Team( null,$_POST['name'], $_POST['points'], $_POST['goalsScored'], $_POST['goalsConceded']);
        $this->teamsManager->add($team);
        header('Location: /examPhpFayolleAlexandre/index.php?controller=default&action=home');
    }

    //edit
    public function editForm($id)
    {
        $team = $this->teamsManager->getById($id);

        require './app/views/edit/edit-view.php';
    }

    public function commitEdit($id)
    {
        $team = $this->teamsManager->getById($id);
        $team = new Team($id,$_POST['name'], $_POST['points'], $_POST['goalsScored'], $_POST['goalsConceded']);
        $this->teamsManager->edit($team);

        header('Location: /examPhpFayolleAlexandre/index.php?controller=default&action=home');
    }

    //delete
    public function delete($id)
    {
        $this->teamsManager->delete($id);
        header('Location: /examPhpFayolleAlexandre/index.php?controller=default&action=home');
    }

    //getters
    public function showOne($id){
        $team = $this->teamsManager->getById($id);
        require './app/views/details/details-view.php';
    }

    public function showAll(){
        $teams = $this->teamsManager->getAll();
        require './app/views/parts/tableTeams.php';
    }




}
