<?php

namespace AppBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="game")
 */
class Game {
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Team
     * 
     * @ORM\OneToMany(targetEntity="Team", mappedBy="game")
     */
    private $team1;
    
    /**
     * @var Team
     * 
     * @ORM\OneToMany(targetEntity="Team", mappedBy="game")
     */
    private $team2;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
    
    /**
     * @ORM\Column(type="string", length=50)
     */
    private $location;
    
    /**
     * @ORM\Column(type="string", length=25)
     */
    private $result;
    
    /**
     * @var GoalOfAPlayer
     * 
     * @ORM\ManyToOne(targetEntity="GoalOfAPlayer", mappedBy="goalPlayer")
     */
    private $listGoalPlayer;
    
    /**
     * @var CardOfAPlayer
     * 
     * @ORM\ManyToOne(targetEntity="CardOfAPlayer", mappedBy="cardPlayer")
     */
    private $listCardPlayer;
    
    
    function getId() {
        return $this->id;
    }

    function getTeam1() {
        return $this->team1;
    }

    function getTeam2() {
        return $this->team2;
    }

    function getDate() {
        return $this->date;
    }

    function getLocation() {
        return $this->location;
    }

    function getResult() {
        return $this->result;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTeam1(Team $team1) {
        $this->team1 = $team1;
    }

    function setTeam2(Team $team2) {
        $this->team2 = $team2;
    }

    function setDate(\DateTime $date) {
        $this->date = $date;
    }

    function setLocation($location) {
        $this->location = $location;
    }

    function setResult($result) {
        $this->result = $result;
    }

    
}

