<?php


namespace App\Controller;


use App\Entity\Produto;
use App\Form\ProdutoType;
use App\Repository\ProdutoRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProdutoControler extends AbstractController
{
    private $serializar;
    private $dao;

    /**
     * ProdutoControler constructor.
     * @param $serializar
     */
    public function __construct(SerializerInterface $serializar)
    {
        $this->serializar = $serializar;
        $this->dao = new ProdutoRepository();
    }

    /**
     * @Route("/addProduto", methods={"POST"})
     */
    public function produtoAdd(Request $request){
        $data = json_decode($request->getContent(),1);

        $produto = new Produto();
        $form = $this->createForm(ProdutoType::class,$produto);
        $form->submit($produto);

        $dao = new ProdutoRepository();
        $dao->saveProduto($produto);
    }
}