<?php

namespace Controller;

use Model\Service\User;

/**
 * Description of UserController
 *
 * @author andre
 */
class UserController {

    public function pesquisa() {
        
    }

    public function gerenciarAnuncios() {
        
    }

    public function cadastroAnunciante(array $params) {

        $user = new User;
        $user->insert($params);
    }

    public function cadastroUser(array $params) {

        $login = new \Model\Service\Login;
        $login->insert($params);
    }

}
