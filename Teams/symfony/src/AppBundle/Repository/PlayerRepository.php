<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Player;

class PlayerRepository extends GenericRepository {
 
    /*Save in the database*/
    public function save(Player $player){
        
        try {
                // Create player
            $em = $this->getEntityManager();
            $em->persist($player);
            $flush = $em->flush($player);

            $r = array('code' => 0, 'message' => 'ok');
            if ($flush != null) {
                $r = array('code' => 1, 'message' => 'error.common');
            }
        } catch (\Exception $e) {
            $r = array('code' => 1, 'message' => 'error.common');
        }

        return $r;

    }
}

