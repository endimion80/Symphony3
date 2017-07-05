<?php

namespace ModelBundle\Entity;

/**
 * Document
 */
class Document
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $filename = '';

    /**
     * @var string
     */
    private $uri = '';

    /**
     * @var string
     */
    private $filemime = '';

    /**
     * @var integer
     */
    private $filesize = '0';

    /**
     * @var boolean
     */
    private $status = '0';

    /**
     * @var integer
     */
    private $timestamp = '0';

    /**
     * @var string
     */
    private $type = 'undefined';

    /**
     * @var string
     */
    private $field;

    /**
     * @var \ModelBundle\Entity\Entity
     */
    private $entity;


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
     * Set filename
     *
     * @param string $filename
     *
     * @return Document
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set uri
     *
     * @param string $uri
     *
     * @return Document
     */
    public function setUri($uri)
    {
        $this->uri = $uri;

        return $this;
    }

    /**
     * Get uri
     *
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Set filemime
     *
     * @param string $filemime
     *
     * @return Document
     */
    public function setFilemime($filemime)
    {
        $this->filemime = $filemime;

        return $this;
    }

    /**
     * Get filemime
     *
     * @return string
     */
    public function getFilemime()
    {
        return $this->filemime;
    }

    /**
     * Set filesize
     *
     * @param integer $filesize
     *
     * @return Document
     */
    public function setFilesize($filesize)
    {
        $this->filesize = $filesize;

        return $this;
    }

    /**
     * Get filesize
     *
     * @return integer
     */
    public function getFilesize()
    {
        return $this->filesize;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Document
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set timestamp
     *
     * @param integer $timestamp
     *
     * @return Document
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return integer
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Document
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
     * Set field
     *
     * @param string $field
     *
     * @return Document
     */
    public function setField($field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * Get field
     *
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Set entity
     *
     * @param \ModelBundle\Entity\Entity $entity
     *
     * @return Document
     */
    public function setEntity(\ModelBundle\Entity\Entity $entity = null)
    {
        $this->entity = $entity;

        return $this;
    }

    /**
     * Get entity
     *
     * @return \ModelBundle\Entity\Entity
     */
    public function getEntity()
    {
        return $this->entity;
    }
}

