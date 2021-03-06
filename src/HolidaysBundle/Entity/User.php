<?php
/**
 * Created by PhpStorm.
 * User: ninon
 * Date: 15/06/16
 * Time: 18:37
 */
namespace HolidaysBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    public $nomPrenom;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Set nomPrenom
     *
     * @param string $nom
     * @return User
     */
    public function setNomPrenom($nomPrenom)
    {
        $this->nomPrenom = $nomPrenom;

        return $this;
    }

    /**
     * Get nomPrenom
     *
     * @return string
     */
    public function getNomPrenom()
    {
        return $this->nomPrenom;
    }

}
