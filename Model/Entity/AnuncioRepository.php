<?php

namespace Model\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Description of LoginRepository
 *
 * @author andre
 */
class AnuncioRepository extends EntityRepository {
    
    public function pesquisa($data){
        $data = $this->findBy($criteria);
    }
    
}
