<?php

namespace PageBundle\Repository;

use Doctrine\ORM\EntityRepository;

class VideoRepository extends EntityRepository
{

    public function getPublishedVideo($slug){
        $qb = $this->getQueryBuilder(array(
            'status' => 'published'
        ));

        $qb->andWhere('p.slug = :slug')
            ->setParameter('slug', $slug);

        return $qb->getQuery()->getOneOrNullResult();

    }

//    public function getUserLinks($userId){
//        $qb = $this->getQueryBuilder(array(
//            'author_id' => $userId
//        ));
//        return $qb;
//    }

    public function getQueryBuilder(array $params = array()){

        $qb = $this->createQueryBuilder('p')
            ->select('p, c, t, a, k')
            ->leftJoin('p.category', 'c')
            ->leftJoin('p.tags', 't')
            ->leftJoin('p.author', 'a')
            ->leftJoin('p.comments', 'k');

        if(!empty($params['status'])){
            if('published' == $params['status']){
                $qb->where('p.publishedDate <= :currDate AND p.publishedDate IS NOT NULL')
                    ->setParameter('currDate', new \DateTime());
            }else if('unpublished' == $params['status']){
                $qb->where('p.publishedDate > :currDate OR p.publishedDate IS NULL')
                    ->setParameter('currDate', new \DateTime());
            }
        }


        if(!empty($params['author_id'])){

            $qb->andWhere('p.author  = :author_id')
                ->setParameter('author_id', $params['author_id']);
        }


        if(!empty($params['status'])){
            if('published' == $params['status']){
                $qb->where('p.publishedDate <= :currDate AND p.publishedDate IS NOT NULL')
                    ->setParameter('currDate', new \DateTime());
            }else if('unpublished' == $params['status']){
                $qb->where('p.publishedDate > :currDate OR p.publishedDate IS NULL')
                    ->setParameter('currDate', new \DateTime());
            }
        }

        if(!empty($params['orderBy'])){
            $orderDir = !empty($params['orderDir']) ? $params['orderDir'] : NULL;
            $qb->orderBy($params['orderBy'], $orderDir);
        }
        if(!empty($params['categorySlug'])){
            $qb->andWhere('c.slug = :categorySlug')
                ->setParameter('categorySlug', $params['categorySlug']);
        }

        if(!empty($params['tagSlug'])){
            $qb->andWhere('t.slug = :tagSlug')
                ->setParameter('tagSlug', $params['tagSlug']);
        }
        if(!empty($params['search'])){
            $searchParam = '%'.$params['search'].'%';
            $qb->andWhere('p.title LIKE :searchParam OR p.content LIKE :searchParam')
                ->setParameter('searchParam', $searchParam);
        }

        return $qb;
    }
    public function getRecentCommented($limit = 8) {

        $qb = $this->createQueryBuilder('p')
            ->select('p, k, COUNT(c) as commentsCount')
            ->leftJoin('p.comments', 'c')
            ->leftJoin('p.category', 'k')
            ->groupBy('p.title')
            ->having('commentsCount > 0')
            ->where('p.publishedDate <= :currDate AND p.publishedDate IS NOT NULL')
            ->setParameter('currDate', new \DateTime())
            ->orderBy('commentsCount', 'DESC')
            ->setMaxResults($limit);

        return $qb;
    }

}