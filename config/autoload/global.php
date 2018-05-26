<?php
/**
 * Global Configuration Override
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

use Zend\ServiceManager\AbstractFactory\ReflectionBasedAbstractFactory;

// @todo wait until they will start to use Pst in codebase @see https://github.com/zendframework/zend-mvc/blob/master/src/MiddlewareListener.php#L11
class_alias('Interop\Http\Server\MiddlewareInterface', 'Interop\Http\ServerMiddleware\MiddlewareInterface');

return [
    'ZfcDatagrid' => [
        'settings' => [
            'default' => [
                // If no specific rendere given, use this renderes for HTTP / console
                'renderer' => [
                    'http' => 'jqgrid',
                    'console' => 'zendTable',
                ],
            ],
        ],
    ],
    'service_manager' => [
		'factories' => [
            'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
        ],
        'abstract_factories' => [
            ReflectionBasedAbstractFactory::class,
        ],
    ],
    'view_helpers' => [
        'abstract_factories' => [
            ReflectionBasedAbstractFactory::class, // universal auto-wiring factory
        ],
    ],
    'block_plugins' => [
        'abstract_factories' => [
            ReflectionBasedAbstractFactory::class, // universal auto-wiring factory
        ],
    ],
];
