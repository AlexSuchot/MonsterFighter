<?php
/**
 * Created by PhpStorm.
 * User: alexl
 * Date: 12/12/2018
 * Time: 11:14
 */

namespace App\Classes;


class Trainer
{

    private $name;
    private $team;

    /**
     * user constructor.
     * @param $name
     * @param $team
     */
    public function __construct($name, $team)
    {
        $this->name = $name;
        $this->team = $team;
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
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * @param mixed $team
     */
    public function setTeam($team): void
    {
        $this->team = $team;
    }


}