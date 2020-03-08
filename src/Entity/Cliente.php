<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use PhpParser\Node\Scalar\String_;
use Symfony\Bundle\MakerBundle\Str;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClienteRepository")
 * @ORM\Table(name="cliente")
 */
class Cliente
{
    /**
     * @var int
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @var String_
     * @ORM\Column(type="string", name="nome_fantasia")
     */
    private $nomeFantasia;
    /**
     * @var String_
     * @ORM\Column(type="string", name="razao_social")
     */
    private $razaoSocial;
    /**
     * @var Endereco
     * @ORM\OneToOne(targetEntity="Socio", mappedBy="id_empresa", orphanRemoval=true)
     */
    private $Endereco;
    /**
     * @var String_
     * @ORM\Column(type="string")
     */
    private $cnpj;

    /**
     * Cliente constructor.
     * @param int $id
     * @param String_ $nomeFantasia
     * @param String_ $razaoSocial
     * @param Endereco $Endereco
     * @param String_ $cnpj
     */
    public function __construct(int $id, String_ $nomeFantasia, String_ $razaoSocial, Endereco $Endereco, String_ $cnpj)
    {
        $this->id = $id;
        $this->nomeFantasia = $nomeFantasia;
        $this->razaoSocial = $razaoSocial;
        $this->Endereco = $Endereco;
        $this->cnpj = $cnpj;
    }


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return String_
     */
    public function getNomeFantasia(): String_
    {
        return $this->nomeFantasia;
    }

    /**
     * @param String_ $nomeFantasia
     */
    public function setNomeFantasia(String_ $nomeFantasia): void
    {
        $this->nomeFantasia = $nomeFantasia;
    }

    /**
     * @return String_
     */
    public function getRazaoSocial(): String_
    {
        return $this->razaoSocial;
    }

    /**
     * @param String_ $razaoSocial
     */
    public function setRazaoSocial(String_ $razaoSocial): void
    {
        $this->razaoSocial = $razaoSocial;
    }

    /**
     * @return Endereco
     */
    public function getEndereco(): Endereco
    {
        return $this->Endereco;
    }

    /**
     * @param Endereco $Endereco
     */
    public function setEndereco(Endereco $Endereco): void
    {
        $this->Endereco = $Endereco;
    }

    /**
     * @return String_
     */
    public function getCnpj(): String_
    {
        return $this->cnpj;
    }

    /**
     * @param String_ $cnpj
     */
    public function setCnpj(String_ $cnpj): void
    {
        $this->cnpj = $cnpj;
    }



}