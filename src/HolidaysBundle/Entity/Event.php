<?php

namespace HolidaysBundle\Entity;

/**
 * Event
 */
class Event
{
    // CUSTOM CODE
    private $eventUserId;

    public function setEventUserId(\HolidaysBundle\Entity\User $eventUserId = null)
    {
        $this->eventUserId = $eventUserId;

        return $this;
    }

    public function getEventUserId()
    {
        return $this->eventUserId;
    }

    ///////////////////////
    // GENERATED CODE
    /**
     * @var int
     */
    private $id;

    /**
     * @var bool
     */
    private $eventEtat;

    /**
     * @var string
     */
    private $eventLibel;

    /**
     * @var string
     */
    private $eventDescrip;

    /**
     * @var \DateTime
     */
    private $eventActiv;

    /**
     * @var \DateTime
     */
    private $eventDesactiv;

    /**
     * @var \DateTime
     */
    private $eventStart;

    /**
     * @var \DateTime
     */
    private $eventEnd;

    /**
     * @var string
     */
    private $eventBudget;

    /**
     * @var string
     */
    private $eventComment;

    /**
     * @var string
     */
    private $eventPhoto1;

    /**
     * @var string
     */
    private $eventPhoto2;

    /**
     * @var string
     */
    private $eventPhoto3;

    /**
     * @var string
     */
    private $eventPhoto4;

    /**
     * @var string
     */
    private $eventPhoto5;


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
     * Set eventEtat
     *
     * @param boolean $eventEtat
     *
     * @return Event
     */
    public function setEventEtat($eventEtat)
    {
        $this->eventEtat = $eventEtat;

        return $this;
    }

    /**
     * Get eventEtat
     *
     * @return bool
     */
    public function getEventEtat()
    {
        return $this->eventEtat;
    }

    /**
     * Set eventLibel
     *
     * @param string $eventLibel
     *
     * @return Event
     */
    public function setEventLibel($eventLibel)
    {
        $this->eventLibel = $eventLibel;

        return $this;
    }

    /**
     * Get eventLibel
     *
     * @return string
     */
    public function getEventLibel()
    {
        return $this->eventLibel;
    }

    /**
     * Set eventDescrip
     *
     * @param string $eventDescrip
     *
     * @return Event
     */
    public function setEventDescrip($eventDescrip)
    {
        $this->eventDescrip = $eventDescrip;

        return $this;
    }

    /**
     * Get eventDescrip
     *
     * @return string
     */
    public function getEventDescrip()
    {
        return $this->eventDescrip;
    }

    /**
     * Set eventActiv
     *
     * @param \DateTime $eventActiv
     *
     * @return Event
     */
    public function setEventActiv($eventActiv)
    {
        $this->eventActiv = $eventActiv;

        return $this;
    }

    /**
     * Get eventActiv
     *
     * @return \DateTime
     */
    public function getEventActiv()
    {
        return $this->eventActiv;
    }

    /**
     * Set eventDesactiv
     *
     * @param \DateTime $eventDesactiv
     *
     * @return Event
     */
    public function setEventDesactiv($eventDesactiv)
    {
        $this->eventDesactiv = $eventDesactiv;

        return $this;
    }

    /**
     * Get eventDesactiv
     *
     * @return \DateTime
     */
    public function getEventDesactiv()
    {
        return $this->eventDesactiv;
    }

    /**
     * Set eventStart
     *
     * @param \DateTime $eventStart
     *
     * @return Event
     */
    public function setEventStart($eventStart)
    {
        $this->eventStart = $eventStart;

        return $this;
    }

    /**
     * Get eventStart
     *
     * @return \DateTime
     */
    public function getEventStart()
    {
        return $this->eventStart;
    }

    /**
     * Set eventEnd
     *
     * @param \DateTime $eventEnd
     *
     * @return Event
     */
    public function setEventEnd($eventEnd)
    {
        $this->eventEnd = $eventEnd;

        return $this;
    }

    /**
     * Get eventEnd
     *
     * @return \DateTime
     */
    public function getEventEnd()
    {
        return $this->eventEnd;
    }

    /**
     * Set eventBudget
     *
     * @param string $eventBudget
     *
     * @return Event
     */
    public function setEventBudget($eventBudget)
    {
        $this->eventBudget = $eventBudget;

        return $this;
    }

    /**
     * Get eventBudget
     *
     * @return string
     */
    public function getEventBudget()
    {
        return $this->eventBudget;
    }

    /**
     * Set eventComment
     *
     * @param string $eventComment
     *
     * @return Event
     */
    public function setEventComment($eventComment)
    {
        $this->eventComment = $eventComment;

        return $this;
    }

    /**
     * Get eventComment
     *
     * @return string
     */
    public function getEventComment()
    {
        return $this->eventComment;
    }

    /**
     * Set eventPhoto1
     *
     * @param string $eventPhoto1
     *
     * @return Event
     */
    public function setEventPhoto1($eventPhoto1)
    {
        $this->eventPhoto1 = $eventPhoto1;

        return $this;
    }

    /**
     * Get eventPhoto1
     *
     * @return string
     */
    public function getEventPhoto1()
    {
        return $this->eventPhoto1;
    }

    /**
     * Set eventPhoto2
     *
     * @param string $eventPhoto2
     *
     * @return Event
     */
    public function setEventPhoto2($eventPhoto2)
    {
        $this->eventPhoto2 = $eventPhoto2;

        return $this;
    }

    /**
     * Get eventPhoto2
     *
     * @return string
     */
    public function getEventPhoto2()
    {
        return $this->eventPhoto2;
    }

    /**
     * Set eventPhoto3
     *
     * @param string $eventPhoto3
     *
     * @return Event
     */
    public function setEventPhoto3($eventPhoto3)
    {
        $this->eventPhoto3 = $eventPhoto3;

        return $this;
    }

    /**
     * Get eventPhoto3
     *
     * @return string
     */
    public function getEventPhoto3()
    {
        return $this->eventPhoto3;
    }

    /**
     * Set eventPhoto4
     *
     * @param string $eventPhoto4
     *
     * @return Event
     */
    public function setEventPhoto4($eventPhoto4)
    {
        $this->eventPhoto4 = $eventPhoto4;

        return $this;
    }

    /**
     * Get eventPhoto4
     *
     * @return string
     */
    public function getEventPhoto4()
    {
        return $this->eventPhoto4;
    }

    /**
     * Set eventPhoto5
     *
     * @param string $eventPhoto5
     *
     * @return Event
     */
    public function setEventPhoto5($eventPhoto5)
    {
        $this->eventPhoto5 = $eventPhoto5;

        return $this;
    }

    /**
     * Get eventPhoto5
     *
     * @return string
     */
    public function getEventPhoto5()
    {
        return $this->eventPhoto5;
    }
}

