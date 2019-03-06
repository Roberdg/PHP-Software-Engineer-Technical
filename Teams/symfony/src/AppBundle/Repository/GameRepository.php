<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Game;

class GameRepository extends GenericRepository {
 
    /*Save in the database*/
    public function save(Game $game){
        
        try {
                // Create game
            $em = $this->getEntityManager();
            $em->persist($game);
            $flush = $em->flush($game);

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

