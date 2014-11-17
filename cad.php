<?php
include './bootstrap.php';
use Model\Service\Login;
use Model\Service\User;
use Dao\Db\AbstractService;

if(isset($_POST['cad'])){
    
    
    //var_dump($_POST);
    $login = new Login($entityManager);
    
    $login->insert(array($_POST['login']
                        ,$_POST['senha']));
    
    (new User($entityManager))->insert(array($_POST['nome']
                                          ,$_POST['cpf'] 
                                          ,$_POST['rsocial'] 
                                          ,$_POST['nfantasia'] 
                                          ,$_POST['cnpj'] 
                                          ,$_POST['tel'] 
                                          ,$_POST['email'] 
                                           ));
    
}
