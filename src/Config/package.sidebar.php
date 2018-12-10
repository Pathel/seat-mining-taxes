<?php

return [
    'mining-taxes' => [
        'name'          => 'mining-taxes',
        'label'         => 'Notifications',
        'icon'          => 'fa-money',
        'route_segment' => 'mining-taxes',
        'entries'       => [
            [
                'name'       => 'user-mining-taxes',
                'label'      => 'My Tax Bills',
                'icon'       => 'fa-toggle-on',
                'route'      => 'mining-taxes.list',
            ],
        ],
    ],
];