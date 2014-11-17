<?php

use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Model\Entity\LoginRepository;
use Symfony\Component\Console\Helper\Table;

namespace Model\Entity;

/**
 * Login
 *
 * @Table(name="login")
 * @Entity
 * @Entity(repositoryClass="LoginRepository")
 */
class Login {

    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="user", type="string", length=150, nullable=false)
     */
    private $user;

    /**
     * @var string
     *
     * @Column(name="password", type="string", length=45, nullable=false)
     */
    private $password;

    /**
     * @var boolean
     *
     * @Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var string
     *
     * @Column(name="hash", type="string", length=100, nullable=false)
     */
    private $hash;

    /**
     * @var DateTime
     *
     * @Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var DateTime
     *
     * @Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    public function __construct($options = array()) {

        // (new \Lib\Hydrator())->hydrate($options, $this);
        $this->createdAt = new \DateTime('now');
        $this->updatedAt = new \DateTime('now');
        $this->hash = $this->generateHash();
        $this->load($options);
    }

    public function getId() {
        return $this->id;
    }

    public function getUser() {
        return $this->user;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getActive() {
        return $this->active;
    }

    public function getHash() {
        return $this->hash;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    /* public function setId($id) {
      $this->id = $id;
      return $this;
      } */

    public function setUser($user) {
        $this->user = $user;
        return $this;
    }

    public function setPassword($password) {
        $this->password = $this->encryptPass($password);
        return $this;
    }

    public function setActive($active = false) {
        $this->active = $active;
        return $this;
    }

    public function setHash($hash) {
        $this->hash = $this->generateHash();
        return $this;
    }

    public function setCreatedAt() {
        $this->createdAt = new \DateTime('now');
        return $this;
    }

    public function setUpdateddAt() {
        $this->updateddAt = new \DateTime('now');
        return $this;
    }

    public function actionToArray() {
        
    }

    public function toArray() {
        return array(
            'id' => $this->id,
            'user' => $this->user,
            'password' => $this->password,
            'active' => $this->active,
            'hash'   => $this->hash 
        );
    }

    private function encryptPass($password) {
        $encryptedPass = base64_encode(md5($password));
        return $encryptedPass;
    }

    private function generateHash() {
        $salt = base64_encode(rand(0, 999));
        $hash = md5($this->getPassword() . $this->getUser() . $salt);
        return $hash;
    }

    private function load($option = array()) {
        
        $this->user = $option[0];
        $this->setPassword($option[1]);
        $this->setActive();
        
    }

}
