<?php

namespace Model\Service;

use Dao\Service\AbstractService;
use Doctrine\ORM\EntityManager;

/**
 * Description of Anuncio
 *
 * @author André Souza
 */
class Anuncio extends AbstractService {

    public function __construct(EntityManager $em) {
        parent::__construct($em);
        $this->entity = "Model\Entity\Anuncio";
    }

  public function insert(array $data) {
      parent::insert($data);
  }
  


    

}
