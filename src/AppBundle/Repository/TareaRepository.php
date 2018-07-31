<?php
// src/AppBundle/Repository/TareaRepository.php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class TareaRepository extends EntityRepository
{
    public function findAllOrderedByDescripcion()
    {
        $entitiManager = $this->getEntityManager();

        $query = $entitiManager->createQuery(
                'SELECT t FROM AppBundle:Tarea t ORDER BY t.descripcion DESC'
            );
        return $query->getResult();
    }
}