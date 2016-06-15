<?php

namespace HolidaysBundle\Entity;

/**
 * Part
 */
class Part
{
    // CUSTOM CODE
    private $partUserId;

    public function setPartUserId(\HolidaysBundle\Entity\User $partUserId = null)
    {
        $this->partUserId = $partUserId;

        return $this;
    }

    public function getPartUserId()
    {
        return $this->partUserId;
    }

    private $partEventId;

    public function setPartEventId(\HolidaysBundle\Entity\User $partEventId = null)
    {
        $this->partEventId = $partEventId;

        return $this;
    }

    public function getPartEventId()
    {
        return $this->partEventId;
    }

    ///////////////////////
    // GENERATED CODE
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $partComment;

    /**
     * @var string
     */
    private $partPhoto;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set partComment
     *
     * @param string $partComment
     *
     * @return Part
     */
    public function setPartComment($partComment)
    {
        $this->partComment = $partComment;

        return $this;
    }

    /**
     * Get partComment
     *
     * @return string
     */
    public function getPartComment()
    {
        return $this->partComment;
    }

    /**
     * Set partPhoto
     *
     * @param string $partPhoto
     *
     * @return Part
     */
    public function setPartPhoto($partPhoto)
    {
        $this->partPhoto = $partPhoto;

        return $this;
    }

    /**
     * Get partPhoto
     *
     * @return string
     */
    public function getPartPhoto()
    {
        return $this->partPhoto;
    }
}

