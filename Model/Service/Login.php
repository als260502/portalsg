<?php

namespace Model\Service;

use Dao\Service\AbstractService;
use Doctrine\ORM\EntityManager;

/**
 * Description of Login
 *
 * @author andre
 */
class Login extends AbstractService {

    public function __construct(EntityManager $em) {
        parent::__construct($em);
        $this->entity = "Model\Entity\Login";
                
    }

    public function login($user, $password) {
        
    }

    public function insert(array $data) {
        parent::insert($data);
       
    }


}
