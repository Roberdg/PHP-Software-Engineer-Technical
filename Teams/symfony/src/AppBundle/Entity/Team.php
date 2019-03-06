<?php

namespace AppBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="team")
 */
class Team {
    
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
     * @var Player
     * 
     * @ORM\OneToMany(targetEntity="Player", mappedBy="team")
     */
    private $listPlayers;
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getListPlayers() {
        return $this->listPlayers;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setListPlayers(Player $listPlayers) {
        $this->listPlayers = $listPlayers;
    }


}

