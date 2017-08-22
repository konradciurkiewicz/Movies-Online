<?php

namespace PageBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PageBundle\Entity\Comment;


class CommentsFixtures extends AbstractFixture implements OrderedFixtureInterface {
    
    public function getOrder() {
        return 2;
    }
    
    public function load(ObjectManager $manager) {
        
        $commentsList = array(
            array(
                'post' => 0,
                'author' => 'kowal',
                'create_date' => '2012-11-10 12:41:12',
                'title' => 'Linkum do filmym',
                'comment' => 'Lorem ipsum dolor sit amet neque lorem, pellentesque consectetuer, tellus in faucibus lectus vestibulum vel, urna.'
            ),
            array(
                'post' => 0,
                'author' => 'adas_no',
                'create_date' => '2013-01-10 12:41:12',
                'title' => 'Linkum do filmym',
                'comment' => 'Suspendisse sed condimentum enim arcu elit, non luctus et enim.'
            ),
            array(
                'post' => 1,
                'author' => 'macq',
                'create_date' => '2013-05-11 15:41:12',
                'title' => 'Linkum do filmym',
                'comment' => 'Phasellus fermentum mi, nec urna ullamcorper ut, eleifend nibh, pretium convallis. Fusce facilisis hendrerit.'
            ),
            array(
                'post' => 2,
                'author' => 'antkow',
                'create_date' => '2012-11-10 12:41:12',
                'title' => 'Linkum do filmym',
                'comment' => 'Donec libero malesuada fames ac lacus. Nullam accumsan. In euismod rutrum, enim nec diam at ipsum.'
            ),
            array(
                'post' => 3,
                'author' => 'adas_no',
                'create_date' => '2013-01-10 12:41:12',
                'title' => 'Linkum do filmym',
                'comment' => 'Donec sit amet, consectetuer adipiscing elit. Quisque iaculis.'
            ),
            array(
                'post' => 3,
                'author' => 'kowal',
                'create_date' => '2013-05-11 15:41:12',
                'title' => 'Linkum do filmym',
                'comment' => 'Aliquam hendrerit tellus non nunc. Nam ut eros tincidunt turpis egestas. Suspendisse bibendum risus.'
            ),
        );
        
        foreach ($commentsList as $details) {
            $Comment = new Comment();
            $Comment->setAuthor($this->getReference('user-'.$details['author']))
                        ->setCreateDate(new \DateTime($details['create_date']))
                        ->setPost($this->getReference('post-'.$details['post']))
                        ->setComment($details['comment'])
                        ->setTitle($details['title']);
            
            $manager->persist($Comment);
        }
        
        $manager->flush();
    }
}
