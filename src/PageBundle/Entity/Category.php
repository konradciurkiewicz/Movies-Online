<?php

namespace PageBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="page_categories")
 */
class Category extends AbstractTaxonomy
{
    /**
     * @ORM\OneToMany(
     *     targetEntity = "Video",
     *     mappedBy = "category"
     * )
     */
    protected $posts;



}
