<?php
namespace Stagem\ZfcProgress;

use Stagem\ZfcProgress\Model\Progress;
use Stagem\ZfcProgress\Model\ProgressInterface;

return [

    'event_manager' => require 'listener.config.php',

    'actions' => [
        'progress' => __NAMESPACE__ . '\Action',
    ],

    'service_manager' => [
        'aliases' => [
            'Progress' => Model\Progress::class,
            'ProgressService' => Service\ProgressService::class,
        ],
        'invokables' => [
            Model\Progress::class => Model\Progress::class,
        ],
        'factories' => [
            Service\ProgressService::class => Service\Factory\ProgressServiceFactory::class,
            //Listener\EditListener::class => Listener\Factory\EditListenerFactory::class,
        ],
        'shared' => [
            Model\Progress::class => false,
        ],
    ],

    'view_manager' => [
        'template_map' => [
            'progress/list' => __DIR__ . '/../view/agere/progress/list.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],

    'doctrine' => [
        'driver' => [
            __NAMESPACE__ . '_driver' => [
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => [__DIR__ . '/../src/Model']
            ],
            'orm_default' => [
                'drivers' => [
                    __NAMESPACE__ . '\Model' => __NAMESPACE__ . '_driver'
                ]
            ]
        ],
        'entity_resolver' => [
            'orm_default' => [
                'resolvers' => [
                    ProgressInterface::class => Model\Progress::class,
                ],
            ],
        ],
    ],
];

