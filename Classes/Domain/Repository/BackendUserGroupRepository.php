<?php

namespace KoninklijkeCollective\MyUserManagement\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;
use TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException;
use KoninklijkeCollective\MyUserManagement\Domain\DataTransferObject\BackendUserGroupPermission;

final class BackendUserGroupRepository extends \TYPO3\CMS\Beuser\Domain\Repository\BackendUserGroupRepository
{
    /**
     * @return array|QueryResultInterface
     * @throws InvalidQueryException
     */
    public function findAllConfigured()
    {
        if (!BackendUserGroupPermission::hasConfigured()) {
            return $this->findAll();
        }

        $query = $this->createQuery();
        $query->matching($query->logicalAnd(
            $query->in('uid', BackendUserGroupPermission::getConfigured()),
        ));

        return $query->execute();
    }
}
