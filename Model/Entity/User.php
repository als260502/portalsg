<?php

use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Model\Entity\UserRepository;
use Symfony\Component\Console\Helper\Table;

namespace Model\Entity;

/**
 * User
 *
 * @Table(name="user")
 * @Entity
 * @Entity(repositoryClass="UserRepository")
 */
class User {

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
     * @Column(name="nome", type="string", length=150, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @Column(name="cpf", type="string", length=30, nullable=false)
     */
    private $cpf;

    /**
     * @var string
     *
     * @Column(name="razao_social", type="string", length=255, nullable=false)
     */
    private $razaoSocial;

    /**
     * @var string
     *
     * @Column(name="nome_fantasia", type="string", length=255, nullable=false)
     */
    private $nomeFantasia;

    /**
     * @var string
     *
     * @Column(name="cpnj", type="string", length=100, nullable=false)
     */
    private $cpnj;

    /**
     * @var string
     *
     * @Column(name="telefone", type="string", length=45, nullable=true)
     */
    private $telefone;

    /**
     * @var string
     *
     * @Column(name="email", type="string", length=200, nullable=false)
     */
    private $email;

    function __construct($options = array()) {

        // (new \Lib\Hydrator)->hydrate($options, $this);
        $this->load($options);
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getRazaoSocial() {
        return $this->razaoSocial;
    }

    public function getNomeFantasia() {
        return $this->nomeFantasia;
    }

    public function getCpnj() {
        return $this->cpnj;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
        return $this;
    }

    public function setRazaoSocial($razaoSocial) {
        $this->razaoSocial = $razaoSocial;
        return $this;
    }

    public function setNomeFantasia($nomeFantasia) {
        $this->nomeFantasia = $nomeFantasia;
        return $this;
    }

    public function setCpnj($cpnj) {
        $this->cpnj = $cpnj;
        return $this;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
        return $this;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /*public function __toString() {
        return $this->getNome();
    }*/

    public function toArray() {
        return array(
            'id' => $this->id,
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'razaoSocial' => $this->razaoSocial,
            'nomeFantasia' => $this->nomeFantasia,
            'cnpj' => $this->cnpj,
            'telefone' => $this->telefone,
            'email' => $this->email
        );
    }

    private function load($option = array()) {

        $this->nome = $this->nome = $option[0];
        $this->cpf = $this->cpf = $option[1];
        $this->razaoSocial = $this->razaoSocial = $option[2];
        $this->nomeFantasia = $this->nomeFantasia = $option[3];
        $this->cnpj = $this->cpnj = $option[4];
        $this->telefone = $this->telefone= $option[5];
        $this->email = $this->email = $option[6];
        
        
    }

}
