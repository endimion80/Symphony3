<?php

namespace ModelBundle\Entity;

/**
 * Entity
 */
class Entity
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $signerIndraAlias;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->signerIndraAlias = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Entity
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Add signerIndraAlias
     *
     * @param \ModelBundle\Entity\SignerIndra $signerIndraAlias
     *
     * @return Entity
     */
    public function addSignerIndraAlias(\ModelBundle\Entity\SignerIndra $signerIndraAlias)
    {
        $this->signerIndraAlias[] = $signerIndraAlias;

        return $this;
    }

    /**
     * Remove signerIndraAlias
     *
     * @param \ModelBundle\Entity\SignerIndra $signerIndraAlias
     */
    public function removeSignerIndraAlias(\ModelBundle\Entity\SignerIndra $signerIndraAlias)
    {
        $this->signerIndraAlias->removeElement($signerIndraAlias);
    }

    /**
     * Get signerIndraAlias
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSignerIndraAlias()
    {
        return $this->signerIndraAlias;
    }
}

