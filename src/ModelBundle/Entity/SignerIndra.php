<?php

namespace ModelBundle\Entity;

/**
 * SignerIndra
 */
class SignerIndra
{
    /**
     * @var string
     */
    private $alias;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $entity;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->entity = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return SignerIndra
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add entity
     *
     * @param \ModelBundle\Entity\Entity $entity
     *
     * @return SignerIndra
     */
    public function addEntity(\ModelBundle\Entity\Entity $entity)
    {
        $this->entity[] = $entity;

        return $this;
    }

    /**
     * Remove entity
     *
     * @param \ModelBundle\Entity\Entity $entity
     */
    public function removeEntity(\ModelBundle\Entity\Entity $entity)
    {
        $this->entity->removeElement($entity);
    }

    /**
     * Get entity
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEntity()
    {
        return $this->entity;
    }
}

