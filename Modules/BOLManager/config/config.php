<?php

return [
    'sideBar' => [
        1 => [
            'icon' => 'fa-light fa-shop',
            'title' => 'مدیرت بارنامه ها',
            'permission' => 'index-bol',
            'child' => [
                1 => [
                    'icon' => 'fa-light fa-list-ul',
                    'title' => 'نمایش',
                    'route' => 'admin.bols'
                ],
                2 => [
                    'icon' => 'fa-light fa-plus',
                    'title' => 'ایجاد',
                    'route' => 'admin.bol.create'
                ]
            ]
        ],
    ],
    'name' => 'Product',
    'permissions' => [
        'index-bol',
        'store-bol',
        'update-bol',
        'delete-bol',
    ],
];
