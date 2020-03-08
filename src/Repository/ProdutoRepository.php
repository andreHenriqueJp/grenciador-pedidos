<?php

namespace App\Repository;

use App\Entity\Produto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use http\Env\Request;

/**
 * @method Produto|null find($id, $lockMode = null, $lockVersion = null)
 * @method Produto|null findOneBy(array $criteria, array $orderBy = null)
 * @method Produto[]    findAll()
 * @method Produto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProdutoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Produto::class);
    }

    /**
     * @return Produto[] Returns an array of Produto objects
     */

    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();
    }

    public function  saveProduto(Produto $produto){
        $em = $this->getEntityManager();
        $em->persist($produto);
        $em->flush();
    }

    public function deleteProduto(Produto $id){
        $em = $this->getEntityManager();
        $em->remove($id);
        $em->flush();
    }

    public function editProduto(Produto $produto){
        $em = $this->getEntityManager();
        $em->merge($produto);
        $em->flush();
    }

    public function ProdutoByCodigoBarra(Produto $codigoBarra){

    }
    /*
    public function findOneBySomeField($value): ?Produto
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
