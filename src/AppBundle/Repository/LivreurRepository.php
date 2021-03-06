<?php

namespace AppBundle\Repository;

/**
 * LivreurRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class LivreurRepository extends \Doctrine\ORM\EntityRepository
{
    public function recupLivreur($login, $motDePasse)
    {
        $res = $this->_em->getRepository('AppBundle:Livreur');

        $user = $res->findOneBy(array("login" => $login, "mdp" => $motDePasse));

        return $user;
    }

}
