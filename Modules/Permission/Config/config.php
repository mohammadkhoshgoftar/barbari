<?php

return [

    'sideBar' => [
        1 => [
            'icon' => 'fa-light fa-lock',
            'title' => 'سظح دسترسی',
            'permission' => 'index-role',
            'child' => [
                1 => [
                    'icon' => 'fa-light fa-list-ul',
                    'title' => 'نقش ها',
                    'route' => 'admin.roles'
                ],
                2 => [
                    'icon' => 'fa-light fa-plus',
                    'title' => 'ایجاد نقش',
                    'route' => 'admin.role.create'
                ],
                3 => [
                    'icon' => 'fa-light fa-lock-open',
                    'title' => 'دسترسی ها',
                    'route' => 'admin.permissions'
                ]
            ]
        ]
    ],

    'name' => 'Permission',
    'permissions' => [
        'index-role',
        'store-role',
        'update-role',
        'delete-role',
        'index-permission',
        'update-permission',
        'assign-permissions-to-role',
    ],
];
