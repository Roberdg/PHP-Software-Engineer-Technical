<?php

namespace AppBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="player")
 */
class Player {
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $name;
    
    /**
     * @ORM\Column(type="string", length=25)
     */
    private $surname;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $numGoals;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $numYellowCards;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $numRedCards;
    
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getSurname() {
        return $this->surname;
    }

    function getNumGoals() {
        return $this->numGoals;
    }

    function getNumYellowCards() {
        return $this->numYellowCards;
    }

    function getNumRedCards() {
        return $this->numRedCards;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setSurname($surname) {
        $this->surname = $surname;
    }

    function setNumGoals($numGoals) {
        $this->numGoals = $numGoals;
    }

    function setNumYellowCards($numYellowCards) {
        $this->numYellowCards = $numYellowCards;
    }

    function setNumRedCards($numRedCards) {
        $this->numRedCards = $numRedCards;
    }


}

