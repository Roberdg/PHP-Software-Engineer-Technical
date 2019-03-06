<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Team;

class TeamRepository extends GenericRepository {
 
    /*Save in the database*/
    public function save(Team $team){
        
        try {
                // Create team
            $em = $this->getEntityManager();
            $em->persist($team);
            $flush = $em->flush($team);

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

