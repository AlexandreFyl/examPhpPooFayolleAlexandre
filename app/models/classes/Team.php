<?php


class Team
{
    private $id;
    private $name;
    private $points;
    private $goalsScored;
    private $goalsConceded;

    /**
     * Team constructor.
     * @param $id
     * @param $name
     * @param $points
     * @param $goalsScored
     * @param $goalsConceded
     */
    public function __construct($id = null, $name = null, $points = null, $goalsScored = null, $goalsConceded = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->points = $points;
        $this->goalsScored = $goalsScored;
        $this->goalsConceded = $goalsConceded;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * @param mixed $points
     */
    public function setPoints($points)
    {
        $this->points = $points;
    }

    /**
     * @return mixed
     */
    public function getGoalsScored()
    {
        return $this->goalsScored;
    }

    /**
     * @param mixed $goalsScored
     */
    public function setGoalsScored($goalsScored)
    {
        $this->goalsScored = $goalsScored;
    }

    /**
     * @return mixed
     */
    public function getGoalsConceded()
    {
        return $this->goalsConceded;
    }

    /**
     * @param mixed $goalsConceded
     */
    public function setGoalsConceded($goalsConceded)
    {
        $this->goalsConceded = $goalsConceded;
    }




}
