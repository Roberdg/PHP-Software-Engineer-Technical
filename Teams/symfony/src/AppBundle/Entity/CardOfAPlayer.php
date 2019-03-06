<?php

namespace AppBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="goal_player")
 */
class CardOfAPlayer {
    
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
     * @ORM\Column(type="string", length=25)
     */
    private $card;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
    
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getDate() {
        return $this->date;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setDate(\DateTime $date) {
        $this->date = $date;
    }


}
