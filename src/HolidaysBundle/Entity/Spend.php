<?php

namespace HolidaysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Spend
 */
class Spend
{
    // CUSTOM CODE

    public $phSpend;
    
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

    public function setSpendEventId(\HolidaysBundle\Entity\Event $spendEventId = null)
    {
        $this->spendEventId = $spendEventId;

        return $this;
    }

    public function getSpendEventId()
    {
        return $this->spendEventId;
    }

    protected function getUploadDir()
    {
        return 'uploads/photosSpends';
    }
    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../web/'.$this->getUploadDir();
    }
    public function getWebPath()
    {
        return null === $this->spendPhoto ? null : $this->getUploadDir().'/'.$this->spendPhoto;
    }
    public function getAbsolutePath()
    {
        return null === $this->spendPhoto ? null : $this->getUploadRootDir().'/'.$this->spendPhoto;
    }

    /**
     * @ORM\PrePersist
     */
    public function preUpload()
    {
        if (null !== $this->phSpend) {
            // do whatever you want to generate a unique name
            $this->spendPhoto = uniqid().'.'.$this->phSpend->guessExtension();
        }
    }

    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        // Add your code here
    }

    /**
     * @ORM\PrePersist
     */
    public function setExpiresAtValue()
    {
        // Add your code here
    }

    /**
     * @ORM\PreUpdate
     */
    public function preUpdate()
    {
        // Add your code here
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        // Add your code here
    }

    /**
     * @ORM\PostPersist
     */
    public function upload()
    {
        if (null === $this->phSpend) {
            return;
        }
        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error

        $this->phSpend->move($this->getUploadRootDir(), $this->spendPhoto);

        unset($this->phSpend);
    }

    /**
     * @ORM\PostRemove
     */
    public function removeUpload()
    {
        // Add your code here
        if ($phSpend = $this->getAbsolutePath()) {
            unlink($phSpend);
        }
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
    private $spendMontant;
    
    /**
     * @var bool
     */
    private $spendGroupIndiv;

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
     * Set spendMontant
     *
     * @param string $spendMontant
     *
     * @return Spend
     */
    public function setSpendMontant($spendMontant)
    {
        $this->spendMontant = $spendMontant;

        return $this;
    }

    /**
     * Get spendMontant
     *
     * @return string
     */
    public function getSpendMontant()
    {
        return $this->spendMontant;
    }

    /**
     * Set spendGroupIndiv
     *
     * @param boolean $spendGroupIndiv
     *
     * @return Spend
     */
    public function setSpendGroupIndiv($spendGroupIndiv)
    {
        $this->spendGroupIndiv = $spendGroupIndiv;

        return $this;
    }

    /**
     * Get spendGroupIndiv
     *
     * @return bool
     */
    public function getSpendGroupIndiv()
    {
        return $this->spendGroupIndiv;
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
