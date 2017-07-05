<?php

namespace ModelBundle\Entity;

/**
 * Consultant
 */
class Consultant
{
    /**
     * @var string
     */
    private $consultant;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $cif;

    /**
     * @var string
     */
    private $fax;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $banckCountry;

    /**
     * @var string
     */
    private $banckEntity;

    /**
     * @var string
     */
    private $banckAccount;

    /**
     * @var string
     */
    private $banckTitular;

    /**
     * @var string
     */
    private $banckAddress;

    /**
     * @var string
     */
    private $banckIban;

    /**
     * @var string
     */
    private $banckBic;

    /**
     * @var string
     */
    private $banksIntermediate;

    /**
     * @var string
     */
    private $documentationRequest;

    /**
     * @var \ModelBundle\Entity\Entity
     */
    private $id;


    /**
     * Set consultant
     *
     * @param string $consultant
     *
     * @return Consultant
     */
    public function setConsultant($consultant)
    {
        $this->consultant = $consultant;

        return $this;
    }

    /**
     * Get consultant
     *
     * @return string
     */
    public function getConsultant()
    {
        return $this->consultant;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Consultant
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
     * Set cif
     *
     * @param string $cif
     *
     * @return Consultant
     */
    public function setCif($cif)
    {
        $this->cif = $cif;

        return $this;
    }

    /**
     * Get cif
     *
     * @return string
     */
    public function getCif()
    {
        return $this->cif;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Consultant
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Consultant
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Consultant
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Consultant
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set banckCountry
     *
     * @param string $banckCountry
     *
     * @return Consultant
     */
    public function setBanckCountry($banckCountry)
    {
        $this->banckCountry = $banckCountry;

        return $this;
    }

    /**
     * Get banckCountry
     *
     * @return string
     */
    public function getBanckCountry()
    {
        return $this->banckCountry;
    }

    /**
     * Set banckEntity
     *
     * @param string $banckEntity
     *
     * @return Consultant
     */
    public function setBanckEntity($banckEntity)
    {
        $this->banckEntity = $banckEntity;

        return $this;
    }

    /**
     * Get banckEntity
     *
     * @return string
     */
    public function getBanckEntity()
    {
        return $this->banckEntity;
    }

    /**
     * Set banckAccount
     *
     * @param string $banckAccount
     *
     * @return Consultant
     */
    public function setBanckAccount($banckAccount)
    {
        $this->banckAccount = $banckAccount;

        return $this;
    }

    /**
     * Get banckAccount
     *
     * @return string
     */
    public function getBanckAccount()
    {
        return $this->banckAccount;
    }

    /**
     * Set banckTitular
     *
     * @param string $banckTitular
     *
     * @return Consultant
     */
    public function setBanckTitular($banckTitular)
    {
        $this->banckTitular = $banckTitular;

        return $this;
    }

    /**
     * Get banckTitular
     *
     * @return string
     */
    public function getBanckTitular()
    {
        return $this->banckTitular;
    }

    /**
     * Set banckAddress
     *
     * @param string $banckAddress
     *
     * @return Consultant
     */
    public function setBanckAddress($banckAddress)
    {
        $this->banckAddress = $banckAddress;

        return $this;
    }

    /**
     * Get banckAddress
     *
     * @return string
     */
    public function getBanckAddress()
    {
        return $this->banckAddress;
    }

    /**
     * Set banckIban
     *
     * @param string $banckIban
     *
     * @return Consultant
     */
    public function setBanckIban($banckIban)
    {
        $this->banckIban = $banckIban;

        return $this;
    }

    /**
     * Get banckIban
     *
     * @return string
     */
    public function getBanckIban()
    {
        return $this->banckIban;
    }

    /**
     * Set banckBic
     *
     * @param string $banckBic
     *
     * @return Consultant
     */
    public function setBanckBic($banckBic)
    {
        $this->banckBic = $banckBic;

        return $this;
    }

    /**
     * Get banckBic
     *
     * @return string
     */
    public function getBanckBic()
    {
        return $this->banckBic;
    }

    /**
     * Set banksIntermediate
     *
     * @param string $banksIntermediate
     *
     * @return Consultant
     */
    public function setBanksIntermediate($banksIntermediate)
    {
        $this->banksIntermediate = $banksIntermediate;

        return $this;
    }

    /**
     * Get banksIntermediate
     *
     * @return string
     */
    public function getBanksIntermediate()
    {
        return $this->banksIntermediate;
    }

    /**
     * Set documentationRequest
     *
     * @param string $documentationRequest
     *
     * @return Consultant
     */
    public function setDocumentationRequest($documentationRequest)
    {
        $this->documentationRequest = $documentationRequest;

        return $this;
    }

    /**
     * Get documentationRequest
     *
     * @return string
     */
    public function getDocumentationRequest()
    {
        return $this->documentationRequest;
    }

    /**
     * Set id
     *
     * @param \ModelBundle\Entity\Entity $id
     *
     * @return Consultant
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

