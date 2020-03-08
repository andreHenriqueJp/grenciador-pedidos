<?php


namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;
use PhpParser\Node\Expr\Cast\String_;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EnderecoRepository")
 * @ORM\Table(name="endereco")
 */
class Endereco
{
    /**
     * @var String_
     * @ORM\Column(type="string")
     */private $cidade;
    /**
     * @var String_
     * @ORM\Column(type="string")
     */
    private $estado;
    /**
     * @var String_
     * @ORM\Column(type="string")
     */
    private $rua;
    /**
     * @var String_
     * @ORM\Column(type="string")
     */
    private $numero;
    /**
     * @var String_
     * @ORM\Column(type="string")
     */
    private $cep;
    /**
     * @var String_
     * @ORM\Column(type="string")
     */
    private $pontoReferencia;

    /**
     * @return String_
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param String_ $cidade
     */
    public function setCidade($cidade): void
    {
        $this->cidade = $cidade;
    }

    /**
     * @return String_
     */
    public function getEstado(): String_
    {
        return $this->estado;
    }

    /**
     * @param String_ $estado
     */
    public function setEstado(String_ $estado): void
    {
        $this->estado = $estado;
    }

    /**
     * @return String_
     */
    public function getRua(): String_
    {
        return $this->rua;
    }

    /**
     * @param String_ $rua
     */
    public function setRua(String_ $rua): void
    {
        $this->rua = $rua;
    }

    /**
     * @return String_
     */
    public function getNumero(): String_
    {
        return $this->numero;
    }

    /**
     * @param String_ $numero
     */
    public function setNumero(String_ $numero): void
    {
        $this->numero = $numero;
    }

    /**
     * @return String_
     */
    public function getCep(): String_
    {
        return $this->cep;
    }

    /**
     * @param String_ $cep
     */
    public function setCep(String_ $cep): void
    {
        $this->cep = $cep;
    }

    /**
     * @return String_
     */
    public function getPontoReferencia(): String_
    {
        return $this->pontoReferencia;
    }

    /**
     * @param String_ $pontoReferencia
     */
    public function setPontoReferencia(String_ $pontoReferencia): void
    {
        $this->pontoReferencia = $pontoReferencia;
    }


}