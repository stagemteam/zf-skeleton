<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

/**
 * List of enabled modules for this application.
 *
 * This should be an array of module namespaces used in the application.
 */
return [
    'WhoopsErrorHandler',

    'Zend\Db',
    'Zend\Mvc\Console',
    'Zend\Form',
    'Zend\InputFilter',
    'Zend\Filter',
    'Zend\Hydrator',
    'Zend\Mvc\Plugin\FlashMessenger',
    'Zend\I18n',
    'Zend\Paginator',
    'Zend\Serializer',
    'Zend\Cache',
    'Zend\Session',
    'Zend\Router',
    'Zend\Validator',
    'DoctrineModule',
    'DoctrineORMModule',

    'Popov\ZfcCurrent',
    'Popov\ZfcCore',
    'Popov\ZfcRole',
    'Popov\ZfcMail',
    'Popov\ZfcForm',
    'Popov\ZfcFields',
    'Popov\ZfcEntity',
    'Popov\ZfcDataGridPlugin',
    'Popov\ZfcDataGrid',
    'Popov\ZfcStatus',
    'Popov\ZfcPermission',
    'Popov\ZfcUser',
    'Popov\ZfcTab',

    'Stagem\ZfcAdmin',
    'Stagem\ZfcLayout',
    'Stagem\ZfcLang',
    'Stagem\ZfcMenu',
    'Stagem\ZfcSystem\Config',
    'Stagem\ZfcListener',
    'Stagem\ZfcPool',
    'Stagem\ZfcAction',
];
