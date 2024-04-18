<?php

declare(strict_types=1);

use KoninklijkeCollective\MyUserManagement\Domain\Model\BackendUser;
use KoninklijkeCollective\MyUserManagement\Domain\Model\BackendUserGroup;
use KoninklijkeCollective\MyUserManagement\Domain\Model\FileMount;

return [
    BackendUser::class => [
        'tableName' => 'be_users',
        'properties' => [
            'allowedLanguages' => [
                'fieldName' => 'allowed_languages',
            ],
            'fileMountPoints' => [
                'fieldName' => 'file_mountpoints',
            ],
            'dbMountPoints' => [
                'fieldName' => 'db_mountpoints',
            ],
            'backendUserGroups' => [
                'fieldName' => 'usergroup',
            ],
            'createdBy' => [
                'fieldName' => 'cruser_id',
            ],
        ],
    ],
    BackendUserGroup::class => [
        'tableName' => 'be_groups',
        'properties' => [
            'subGroups' => [
                'fieldName' => 'subgroup',
            ],
            'databaseMountPoints' => [
                'fieldName' => 'db_mountpoints',
            ],
            'fileMountPoints' => [
                'fieldName' => 'file_mountpoints',
            ],
        ],
    ],
    FileMount::class => [
        'tableName' => 'sys_filemounts',
    ],
];
