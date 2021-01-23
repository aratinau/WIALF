<?php
/*
NOTER WIALF

RAW SQL
https://www.wanadev.fr/56-comment-realiser-de-belles-requetes-sql-avec-doctrine/
*/

// src/AppBundle/Repository/MyClassRepository.php

public function getCustomInformations()
{
    $rawSql = "SELECT m.id, (SELECT COUNT(i.id) FROM item AS i WHERE i.myclass_id = m.id) AS total FROM myclass AS m";

    $stmt = $this->getEntityManager()->getConnection()->prepare($rawSql);
    $stmt->execute([]);

    return $stmt->fetchAll();
}



// src/AppBundle/Repository/MyClassRepository.php

use Doctrine\ORM\Query\ResultSetMappingBuilder;

public function findItemsAndSortByStatus()
{
    // la table en base de données correspondant à l'entité liée au repository en cours
    $table = $this->getClassMetadata()->table["name"];

    // Dans mon cas je voulais trier mes résultats avec un ordre bien particulier
    $sql =  "SELECT m.* "
            ."FROM ".$table." AS m "
            ."WHERE (m.deleted_at IS NULL OR m.deleted_at > :current_time) "
            ."ORDER BY m.status = :status_available DESC, m.status = :status_unknown DESC, m.status = :status_unavailable DESC, m.priority ASC";

    $rsm = new ResultSetMappingBuilder($this->getEntityManager());
    $rsm->addEntityResult(MyClass::class, "m");

    // On mappe le nom de chaque colonne en base de données sur les attributs de nos entités
    foreach ($this->getClassMetadata()->fieldMappings as $obj) {
        $rsm->addFieldResult("m", $obj["columnName"], $obj["fieldName"]);
    }

    $stmt = $this->getEntityManager()->createNativeQuery($sql, $rsm);

    $stmt->setParameter(":current_time", new \DateTime("now"));
    $stmt->setParameter(":status_available", MyClass::STATUS_AVAILABLE);
    $stmt->setParameter(":status_unknown", MyClass::STATUS_UNKNOWN);
    $stmt->setParameter(":status_unavailable", MyClass::STATUS_UNAVAILABLE);

    $stmt->execute();

    return $stmt->getResult();
}


public function testProcedure()
{
    $rawSQL = 'CALL generateCSV("2020-01-01", "2020-01-31")';

    $em = $this->container->get('doctrine')->getManager('magento');
    $stmt = $em->getConnection()->prepare($rawSQL);
    $stmt->execute([]);

    dd($stmt->fetchAll());

}
