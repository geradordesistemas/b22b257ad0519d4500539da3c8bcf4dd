<?php

namespace App\Application\Schema\DocumentoAcademicoBundle\Repository;

use App\Application\Schema\DocumentoAcademicoBundle\Entity\DocumentoAcademico;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DocumentoAcademico>
 *
 * @method DocumentoAcademico|null find($id, $lockMode = null, $lockVersion = null)
 * @method DocumentoAcademico|null findOneBy(array $criteria, array $orderBy = null)
 * @method DocumentoAcademico[]    findAll()
 * @method DocumentoAcademico[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DocumentoAcademicoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DocumentoAcademico::class);
    }


}