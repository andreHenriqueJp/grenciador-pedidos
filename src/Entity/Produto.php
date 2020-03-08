<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use PhpParser\Node\Scalar\String_;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProdutoRepository")
 * @ORM\Table(name="produto")
 */
class Produto
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @var String_
     * @ORM\Column(type="string")
     */
    private $nome;
    /**
     * @var String_
     * @ORM\Column(type="string")
     */
    private $descricao;
    /**
     * @var String_
     * @ORM\Column(name="codigo_barra", type="string")
     */
    private $codigoBarra;
    /**
     * @var float
     * @ORM\Column(name="preco_inicial", type="float")
     */
    private $precoInicial;
    /**
     * @var float
     * @ORM\Column(name="preco_final", type="float")
     */
    private $precoFinal;
    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    private $ativo;
    /**
     * @var \DateTime
     * @ORM\Column(name="data_cadasto", type="datetime")
     */
    private $dataCadasto;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return String
     */
    public function getNome(): String
    {
        return $this->nome;
    }

    /**
     * @param String $nome
     */
    public function setNome(String $nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return String
     */
    public function getDescricao(): String
    {
        return $this->descricao;
    }

    /**
     * @param String $descricao
     */
    public function setDescricao(String $descricao): void
    {
        $this->descricao = $descricao;
    }

    /**
     * @return String_
     */
    public function getCodigoBarra(): String_
    {
        return $this->codigoBarra;
    }

    /**
     * @param String_ $codigoBarra
     */
    public function setCodigoBarra(String_ $codigoBarra): void
    {
        $this->codigoBarra = $codigoBarra;
    }

    /**
     * @return float
     */
    public function getPrecoInicial(): float
    {
        return $this->precoInicial;
    }

    /**
     * @param float $precoInicial
     */
    public function setPrecoInicial(float $precoInicial): void
    {
        $this->precoInicial = $precoInicial;
    }

    /**
     * @return float
     */
    public function getPrecoFinal(): float
    {
        return $this->precoFinal;
    }

    /**
     * @param float $precoFinal
     */
    public function setPrecoFinal(float $precoFinal): void
    {
        $this->precoFinal = $precoFinal;
    }

    /**
     * @return bool
     */
    public function isAtivo(): bool
    {
        return $this->ativo;
    }

    /**
     * @param bool $ativo
     */
    public function setAtivo(bool $ativo): void
    {
        $this->ativo = $ativo;
    }

    /**
     * @return \DateTime
     */
    public function getDataCadasto(): \DateTime
    {
        return $this->dataCadasto;
    }

    /**
     * @param \DateTime $dataCadasto
     */
    public function setDataCadasto(\DateTime $dataCadasto): void
    {
        $this->dataCadasto = $dataCadasto;
    }


}
