<?php

return [
    'sideBar' => [
        1 => [
            'icon' => 'fa-light fa-users',
            'title' => 'کاربران',
            'permission' => 'index-user',
            'child' => [
                1 => [
                    'icon' => 'fa-light fa-list-ul',
                    'title' => 'نمایش',
                    'route' => 'users'
                ],
                2 => [
                    'icon' => 'fa-light fa-plus',
                    'title' => 'ایجاد',
                    'route' => 'create.user'
                ]
            ]
        ]
    ],


    'name' => 'User',
    'permissions' => [
        'index-user',
        'store-user',
        'update-user',
        'delete-user',
        'change-psw-user',
    ],
];
