<?php

namespace Dao\Service;

use Doctrine\ORM\EntityManager;

/**
 * Description of Database
 *
 * @author andre
 */
abstract class AbstractService
{

    private $em;
    protected $entity;

    public function __construct(EntityManager $em) {
        $this->em = $em;
    }

    public function insert(array $data) {

        $entity = new $this->entity($data);

        $this->getEm()->persist($entity);
        $this->getEm()->flush();
        return $entity;
    }

    public function update(array $data) {

        $entity = $this->getEm()->getReference($this->entity, $data['id']);
        (new \Lib\Hydrator)->hydrate($data, $entity);

        $this->getEm()->persist($entity);
        return $entity;
    }

    public function delete($id) {

        $entity = $this->getEm()->getReference($this->entity, $id);

        if ($entity) {
            $this->getEm()->remove($entity);
            return $entity;
        }
    }

    public function getEm() {
        return $this->em;
    }

}
