<?php

namespace Model\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Index;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\JoinColumns;
use Doctrine\ORM\Mapping\ManyToOne;
use Entity;
use Lib\Hydrator;
use Symfony\Component\Console\Helper\Table;

/**
 * Anucios
 *
 * #@Table(name="anucios", indexes={@Index(name="fk_anucios_user_idx", columns={"user_id"})})
 * @Entity
 * @Entity(repositoryClass="AnuncioRepository")
 */
class Anuncio {

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
     * @Column(name="nome", type="string", length=255, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @Column(name="site", type="string", length=255, nullable=true)
     */
    private $site;

    /**
     * @var string
     *
     * @Column(name="descricao", type="text", nullable=false)
     */
    private $descricao;

    /**
     * @var string
     *
     * @Column(name="imagem", type="string", length=255, nullable=false)
     */
    private $imagem;

    /**
     * @var \User
     *
     * @ManyToOne(targetEntity="User")
     * @JoinColumns({
     *   @JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $users;

    public function __construct($options= array()) {
       // (new Hydrator())->hydrate($options, $this);
        //$this->user = new ArrayCollection();
    }

   
    public function getNome() {
        return $this->nome;
    }

    public function getSite() {
        return $this->site;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getImagem() {
        return $this->imagem;
    }

//    public function setId($id) {
//        $this->id = $id;
//        return $this;
//    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function setSite($site) {
        $this->site = $site;
        return $this;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
        return $this;
    }

    public function setImagem($imagem) {
        $this->imagem = $imagem;
        return $this;
    }

    /**
     * 
     * @return Collection
     */
    public function getUsers() {
        return $this->users;
    }

    /**
     * 
     * @param \Model\Entity\Collection $users
     * @return Anucio
     */
    public function setUsers($users) {
        $this->users = $users;
        return $this;
    }

    public function toArray() {
        return array(
            'id' => $this->id,
            'nome' => $this->nome,
            'site' => $this->site,
            'descricao' => $this->descricao,
            'imagem' => $this->imagem,
            'users' => $this->users->getID() 
        );
    }

}
