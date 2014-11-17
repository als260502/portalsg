<?php
namespace Model\Entity;

use Doctrine\ORM\EntityRepository;
/**
 * Description of LoginRepository
 *
 * @author andre
 */
class LoginRepository extends EntityRepository {
    
    public function findOneByUserAndPassword($user, $password){
        
        $user = $this->FindOneByUser($user);
        if ($user)
        {
             $hashsenha = $user->encryptPass($password);
            
             if ($hashsenha == $user->getPassword)
                 return $user;
             else
                 return FALSE;
        }
        
    }
    
}
