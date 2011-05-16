<?php

namespace App\CoreBundle\Entity;

/**
 * App\CoreBundle\Entity\Tag
 */
class Tag {

    /**
     * @var string $name
     */
    private $name;
    /**
     * @var integer $id
     */
    private $id;
    /**
     * @var App\CoreBundle\Entity\Post
     */
    private $post;

    public function __construct() {
        $this->post = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Add post
     *
     * @param App\CoreBundle\Entity\Post $post
     */
    public function addPost(\App\CoreBundle\Entity\Post $post) {
        $this->post[] = $post;
    }

    /**
     * Get post
     *
     * @return Doctrine\Common\Collections\Collection $post
     */
    public function getPost() {
        return $this->post;
    }

}