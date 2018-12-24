<?php
/**
 * The MIT License (MIT)
 * Copyright (c) 2018 Stagem Team
 * This source file is subject to The MIT License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/MIT
 *
 * @category Oro
 * @package Oro_Orm
 * @author Serhii Popov <popow.serhii@gmail.com>
 * @license https://opensource.org/licenses/MIT The MIT License (MIT)
 */

$params = include (__DIR__ . '/../parameters.local.php');

return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => [
                    'host' => $params['db']['hostname'],
                    'port' => $params['db']['port'],
                    'user' => $params['db']['username'],
                    'password' => $params['db']['password'],
                    'dbname' => $params['db']['database'],
                    'charset' => $params['db']['charset'],
                    'defaultTableOptions' => [
                        'charset' => $params['db']['charset'],
                        'collate' => $params['db']['collate'],
                    ],
                    'driverOptions' => [
                        1002 => 'SET NAMES ' . $params['db']['charset'],
                    ],
                ],
            ],

            'doctrine_type_mappings' => [
                'enum' => 'string',
                'tinyint' => 'integer',
            ],
        ],

        'configuration' => [
            'orm_default' => [

                'query_cache' => 'redis',
                'result_cache' => 'redis',
                'metadata_cache' => 'redis',
                'hydration_cache' => 'redis',

                /*'filters' => [
                    'pool_filter' =>  \ZfcPool\Model\Filter\PoolFilter::class,
                ],*/

                'datetime_functions' => [
                    'date'          => 'Oro\ORM\Query\AST\Functions\SimpleFunction',
                    'time'          => 'Oro\ORM\Query\AST\Functions\SimpleFunction',
                    'timestamp'     => 'Oro\ORM\Query\AST\Functions\SimpleFunction',
                    'convert_tz'    => 'Oro\ORM\Query\AST\Functions\DateTime\ConvertTz',
                ],
                'numeric_functions' => [
                    'timestampdiff' => 'Oro\ORM\Query\AST\Functions\Numeric\TimestampDiff',
                    'dayofyear'     => 'Oro\ORM\Query\AST\Functions\SimpleFunction',
                    'dayofmonth'    => 'Oro\ORM\Query\AST\Functions\SimpleFunction',
                    'dayofweek'     => 'Oro\ORM\Query\AST\Functions\SimpleFunction',
                    'week'          => 'Oro\ORM\Query\AST\Functions\SimpleFunction',
                    'day'           => 'Oro\ORM\Query\AST\Functions\SimpleFunction',
                    'hour'          => 'Oro\ORM\Query\AST\Functions\SimpleFunction',
                    'minute'        => 'Oro\ORM\Query\AST\Functions\SimpleFunction',
                    'month'         => 'Oro\ORM\Query\AST\Functions\SimpleFunction',
                    'quarter'       => 'Oro\ORM\Query\AST\Functions\SimpleFunction',
                    'second'        => 'Oro\ORM\Query\AST\Functions\SimpleFunction',
                    'year'          => 'Oro\ORM\Query\AST\Functions\SimpleFunction',
                    'sign'          => 'Oro\ORM\Query\AST\Functions\Numeric\Sign',
                    'pow'           => 'Oro\ORM\Query\AST\Functions\Numeric\Pow',
                    'round'         => 'Oro\ORM\Query\AST\Functions\Numeric\Round',
                ],
                'string_functions'  => [
                    'md5'           => 'Oro\ORM\Query\AST\Functions\SimpleFunction',
                    'group_concat'  => 'Oro\ORM\Query\AST\Functions\String\GroupConcat',
                    'cast'          => 'Oro\ORM\Query\AST\Functions\Cast',
                    'concat_ws'     => 'Oro\ORM\Query\AST\Functions\String\ConcatWs',
                    'replace'       => 'Oro\ORM\Query\AST\Functions\String\Replace',
                    'date_format'   => 'Oro\ORM\Query\AST\Functions\String\DateFormat'
                ],

            ]
        ]
    ]
];