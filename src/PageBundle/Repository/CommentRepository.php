<?php

namespace PageBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CommentRepository extends EntityRepository
{

    public function getQueryBuilder(array $params = array()){

        $qb = $this->createQueryBuilder('c')
            ->select('c, p, a')
            ->leftJoin('c.post', 'p')
            ->leftJoin('c.author', 'a');

        if(!empty($params['author'])){

            $qb->where('c.author  = :author')
                ->setParameter('author', $params['author']);
        }

        if(!empty($params['orderBy'])){
            $orderDir = !empty($params['orderDir']) ? $params['orderDir'] : NULL;
            $qb->orderBy($params['orderBy'], $orderDir);
        }


        return $qb;
    }

}