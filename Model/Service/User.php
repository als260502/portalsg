<?php
namespace Model\Service;
use Dao\Service\AbstractService;
use Doctrine\ORM\EntityManager;




class User extends AbstractService{
    
    public function __construct(EntityManager $em) {
        parent::__construct($em);
        $this->entity = "Model\Entity\User";
    }
    
    public function insert(array $data) {
        parent::insert($data);
    }
    


    
    
}
