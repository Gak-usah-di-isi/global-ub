<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => true,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'admin' => [
            'news' => 'c,r,u,d',
            'events' => 'c,r,u,d',
            'downloads' => 'c,r,u,d',
            'innovations' => 'c,r,u,d',
            'testimonials' => 'c,r,u,d',
            'partners' => 'c,r,u,d',
            'partnerships' => 'c,r,u,d',
            'study' => 'c,r,u,d',
            'stories' => 'c,r,u,d',
            'gallery' => 'c,r,u,d',
            'users' => 'c,r,u,d',
            'profile' => 'r,u',
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
    ],
];
