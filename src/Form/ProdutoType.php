<?php


namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProdutoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("nome")
            ->add("descricao")
            ->add("codigo_barra ")
            ->add("preco_inicial")
            ->add("preco_final")
            ->add("ativo")
            ->add("data_cadasto");

    }
}