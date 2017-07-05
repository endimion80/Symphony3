<?php

namespace ModelBundle\Entity;

/**
 * Accord
 */
class Accord
{
    /**
     * @var \DateTime
     */
    private $dateSign;

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
    private $signerConsultant;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var string
     */
    private $company;

    /**
     * @var \ModelBundle\Entity\Entity
     */
    private $id;

    /**
     * @var \ModelBundle\Entity\Consultant
     */
    private $consultant;


    /**
     * Set dateSign
     *
     * @param \DateTime $dateSign
     *
     * @return Accord
     */
    public function setDateSign($dateSign)
    {
        $this->dateSign = $dateSign;

        return $this;
    }

    /**
     * Get dateSign
     *
     * @return \DateTime
     */
    public function getDateSign()
    {
        return $this->dateSign;
    }

    /**
     * Set dateStart
     *
     * @param \DateTime $dateStart
     *
     * @return Accord
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
     * @return Accord
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
     * Set signerConsultant
     *
     * @param string $signerConsultant
     *
     * @return Accord
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
     * Set reference
     *
     * @param string $reference
     *
     * @return Accord
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set company
     *
     * @param string $company
     *
     * @return Accord
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set id
     *
     * @param \ModelBundle\Entity\Entity $id
     *
     * @return Accord
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
     * Set consultant
     *
     * @param \ModelBundle\Entity\Consultant $consultant
     *
     * @return Accord
     */
    public function setConsultant(\ModelBundle\Entity\Consultant $consultant = null)
    {
        $this->consultant = $consultant;

        return $this;
    }

    /**
     * Get consultant
     *
     * @return \ModelBundle\Entity\Consultant
     */
    public function getConsultant()
    {
        return $this->consultant;
    }
}

