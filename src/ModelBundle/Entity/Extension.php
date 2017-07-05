<?php

namespace ModelBundle\Entity;

/**
 * Extension
 */
class Extension
{
    /**
     * @var \DateTime
     */
    private $dateStart;

    /**
     * @var \DateTime
     */
    private $dateEnd;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $signerConsultant;

    /**
     * @var \ModelBundle\Entity\Entity
     */
    private $id;

    /**
     * @var \ModelBundle\Entity\Accord
     */
    private $accord;

    /**
     * @var \ModelBundle\Entity\ServiceRequest
     */
    private $serviceRequest;


    /**
     * Set dateStart
     *
     * @param \DateTime $dateStart
     *
     * @return Extension
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    /**
     * Get dateStart
     *
     * @return \DateTime
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     *
     * @return Extension
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Extension
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set signerConsultant
     *
     * @param string $signerConsultant
     *
     * @return Extension
     */
    public function setSignerConsultant($signerConsultant)
    {
        $this->signerConsultant = $signerConsultant;

        return $this;
    }

    /**
     * Get signerConsultant
     *
     * @return string
     */
    public function getSignerConsultant()
    {
        return $this->signerConsultant;
    }

    /**
     * Set id
     *
     * @param \ModelBundle\Entity\Entity $id
     *
     * @return Extension
     */
    public function setId(\ModelBundle\Entity\Entity $id = null)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return \ModelBundle\Entity\Entity
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set accord
     *
     * @param \ModelBundle\Entity\Accord $accord
     *
     * @return Extension
     */
    public function setAccord(\ModelBundle\Entity\Accord $accord = null)
    {
        $this->accord = $accord;

        return $this;
    }

    /**
     * Get accord
     *
     * @return \ModelBundle\Entity\Accord
     */
    public function getAccord()
    {
        return $this->accord;
    }

    /**
     * Set serviceRequest
     *
     * @param \ModelBundle\Entity\ServiceRequest $serviceRequest
     *
     * @return Extension
     */
    public function setServiceRequest(\ModelBundle\Entity\ServiceRequest $serviceRequest = null)
    {
        $this->serviceRequest = $serviceRequest;

        return $this;
    }

    /**
     * Get serviceRequest
     *
     * @return \ModelBundle\Entity\ServiceRequest
     */
    public function getServiceRequest()
    {
        return $this->serviceRequest;
    }
}

