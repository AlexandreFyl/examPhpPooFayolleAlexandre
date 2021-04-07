<?php


class TeamsManager extends DatabaseManager
{
    public function __construct()
    {
        parent::__construct();
    }

    // add fct
    public function add(Team $team){
        $name = $team->getName();
        $points = $team->getPoints();
        $goalsScored = $team->getGoalsScored();
        $goalsConceded = $team->getGoalsConceded();

        $request = $this->pdo->prepare("INSERT INTO team (name, points, goalsScored, goalsConceded) VALUES (?,?,?,?)");

        $request->bindParam(1,$name);
        $request->bindParam(2,$points);
        $request->bindParam(3,$goalsScored);
        $request->bindParam(4,$goalsConceded);

        $request->execute();

        $team->setId($this->pdo->lastInsertId());
    }

    //edit fct
    public function edit(Team $team)
    {
        $id = $team->getId();
        $name = $team->getName();
        $points = $team->getPoints();
        $goalsScored = $team->getGoalsScored();
        $goalsConceded = $team->getGoalsConceded();

        $request = $this->pdo->prepare("UPDATE  team SET name =?, points = ?, goalsScored = ?, goalsConceded = ? WHERE id = ?");

        $request->bindParam(5, $id);
        $request->bindParam(1, $name);
        $request->bindParam(2, $points);
        $request->bindParam(3, $goalsScored);
        $request->bindParam(4, $goalsConceded);

        $request->execute();

    }

    //delete fct
    public function delete($id)
    {
        $request = $this->pdo->prepare("DELETE FROM team where id = ?");

        $request->bindParam(1,$id);

        $request->execute();
    }

    //getAll fct
    public function getAll()
    {
        $teams = [];
        $sql =  'SELECT * FROM team ORDER BY points DESC, goalsConceded, goalsScored DESC';

        foreach  ($this->pdo->query($sql) as $row) {
            $teams[] = new Team( $row['id'], $row['name'], $row['points'], $row['goalsScored'], $row['goalsConceded']);
        }


        return $teams;
    }

    //getOne fct
    public function getById($id)
    {
        $request = $this->pdo->prepare("SELECT * FROM team WHERE id=?");

        $request->bindParam(1, $id);
        $request->execute();

        $res = $request->fetch();
        return new Team( $res['id'], $res['name'], $res['points'], $res['goalsScored'],$res['goalsConceded']);
    }



}
