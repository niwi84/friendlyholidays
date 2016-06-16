<?php

namespace HolidaysBundle\Entity;

/**
 * Spend
 */
class Spend
{
    // CUSTOM CODE
    private $spendUserId;

    public function setSpendUserId(\HolidaysBundle\Entity\User $spendUserId = null)
    {
        $this->spendUserId = $spendUserId;

        return $this;
    }

    public function getSpendUserId()
    {
        return $this->spendUserId;
    }

    private $spendEventId;

    public function setSpendEventId(\HolidaysBundle\Entity\User $spendEventId = null)
    {
        $this->spendEventId = $spendEventId;

        return $this;
    }

    public function getSpendEventId()
    {
        return $this->spendEventId;
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
    private $spendLibel;

    /**
     * @var string
     */
    private $spendType;

    /**
     * @var \DateTime
     */
    private $spendDate;

    /**
     * @var string
     */
    private $spendPerso;

    /**
     * @var string
     */
    private $spendGroup;

    /**
     * @var bool
     */
    private $spendGroup2;

    /**
     * @var string
     */
    private $spendPhoto;


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
     * Set spendType
     *
     * @param string $spendType
     *
     * @return Spend
     */
    public function setSpendType($spendType)
    {
        $this->spendType = $spendType;

        return $this;
    }

    /**
     * Get spendType
     *
     * @return string
     */
    public function getSpendType()
    {
        return $this->spendType;
    }

    /**
     * Set spendDate
     *
     * @param \DateTime $spendDate
     *
     * @return Spend
     */
    public function setSpendDate($spendDate)
    {
        $this->spendDate = $spendDate;

        return $this;
    }

    /**
     * Get spendDate
     *
     * @return \DateTime
     */
    public function getSpendDate()
    {
        return $this->spendDate;
    }

    /**
     * Set spendPerso
     *
     * @param string $spendPerso
     *
     * @return Spend
     */
    public function setSpendPerso($spendPerso)
    {
        $this->spendPerso = $spendPerso;

        return $this;
    }

    /**
     * Get spendPerso
     *
     * @return string
     */
    public function getSpendPerso()
    {
        return $this->spendPerso;
    }

    /**
     * Set spendGroup
     *
     * @param string $spendGroup
     *
     * @return Spend
     */
    public function setSpendGroup($spendGroup)
    {
        $this->spendGroup = $spendGroup;

        return $this;
    }

    /**
     * Get spendGroup
     *
     * @return string
     */
    public function getSpendGroup()
    {
        return $this->spendGroup;
    }

    /**
     * Set spendGroup2
     *
     * @param boolean $spendGroup2
     *
     * @return Spend
     */
    public function setSpendGroup2($spendGroup2)
    {
        $this->spendGroup2 = $spendGroup2;

        return $this;
    }

    /**
     * Get spendGroup2
     *
     * @return bool
     */
    public function getSpendGroup2()
    {
        return $this->spendGroup2;
    }

    /**
     * Set spendPhoto
     *
     * @param string $spendPhoto
     *
     * @return Spend
     */
    public function setSpendPhoto($spendPhoto)
    {
        $this->spendPhoto = $spendPhoto;

        return $this;
    }

    /**
     * Get spendPhoto
     *
     * @return string
     */
    public function getSpendPhoto()
    {
        return $this->spendPhoto;
    }

    /**
     * Set spendLibel
     *
     * @param string $spendLibel
     *
     * @return Spend
     */
    public function setSpendLibel($spendLibel)
    {
        $this->spendLibel = $spendLibel;

        return $this;
    }

    /**
     * Get spendLibel
     *
     * @return string
     */
    public function getSpendLibel()
    {
        return $this->spendLibel;
    }
}
