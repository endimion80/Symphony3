<?php

namespace ModelBundle\Entity;

/**
 * ServiceRequest
 */
class ServiceRequest
{
    /**
     * @var string
     */
    private $requestNumber;

    /**
     * @var \DateTime
     */
    private $dateRequest;

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
    private $state;

    /**
     * @var \DateTime
     */
    private $dateState;

    /**
     * @var string
     */
    private $coment;

    /**
     * @var string
     */
    private $location;

    /**
     * @var string
     */
    private $signerConsultant;

    /**
     * @var string
     */
    private $client;

    /**
     * @var string
     */
    private $project;

    /**
     * @var string
     */
    private $area;

    /**
     * @var \ModelBundle\Entity\Accord
     */
    private $accord;

    /**
     * @var \ModelBundle\Entity\Country
     */
    private $country;

    /**
     * @var \ModelBundle\Entity\Entity
     */
    private $id;


    /**
     * Set requestNumber
     *
     * @param string $requestNumber
     *
     * @return ServiceRequest
     */
    public function setRequestNumber($requestNumber)
    {
        $this->requestNumber = $requestNumber;

        return $this;
    }

    /**
     * Get requestNumber
     *
     * @return string
     */
    public function getRequestNumber()
    {
        return $this->requestNumber;
    }

    /**
     * Set dateRequest
     *
     * @param \DateTime $dateRequest
     *
     * @return ServiceRequest
     */
    public function setDateRequest($dateRequest)
    {
        $this->dateRequest = $dateRequest;

        return $this;
    }

    /**
     * Get dateRequest
     *
     * @return \DateTime
     */
    public function getDateRequest()
    {
        return $this->dateRequest;
    }

    /**
     * Set dateStart
     *
     * @param \DateTime $dateStart
     *
     * @return ServiceRequest
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
     * @return ServiceRequest
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
     * Set state
     *
     * @param string $state
     *
     * @return ServiceRequest
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set dateState
     *
     * @param \DateTime $dateState
     *
     * @return ServiceRequest
     */
    public function setDateState($dateState)
    {
        $this->dateState = $dateState;

        return $this;
    }

    /**
     * Get dateState
     *
     * @return \DateTime
     */
    public function getDateState()
    {
        return $this->dateState;
    }

    /**
     * Set coment
     *
     * @param string $coment
     *
     * @return ServiceRequest
     */
    public function setComent($coment)
    {
        $this->coment = $coment;

        return $this;
    }

    /**
     * Get coment
     *
     * @return string
     */
    public function getComent()
    {
        return $this->coment;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return ServiceRequest
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set signerConsultant
     *
     * @param string $signerConsultant
     *
     * @return ServiceRequest
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
     * Set client
     *
     * @param string $client
     *
     * @return ServiceRequest
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return string
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set project
     *
     * @param string $project
     *
     * @return ServiceRequest
     */
    public function setProject($project)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set area
     *
     * @param string $area
     *
     * @return ServiceRequest
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return string
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set accord
     *
     * @param \ModelBundle\Entity\Accord $accord
     *
     * @return ServiceRequest
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
     * Set country
     *
     * @param \ModelBundle\Entity\Country $country
     *
     * @return ServiceRequest
     */
    public function setCountry(\ModelBundle\Entity\Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \ModelBundle\Entity\Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set id
     *
     * @param \ModelBundle\Entity\Entity $id
     *
     * @return ServiceRequest
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
}

