<?php

return [
    // в цьому файлі я підключив те, що на перший погляд знав. Якщо потрібно підключити, щось нове, скажете
    //'assetic_configuration' => [
        // Use on production environment
        // 'debug'              => false,
        // 'buildOnRequest'     => false,
        // Use on development environment
        'debug' => true,
        'buildOnRequest' => true,

        // This is optional flag, by default set to `true`.
        // In debug mode allow you to combine all assets to one file.
        // 'combine' => false,
        // this is specific to this project
        'webPath' => realpath('public/assets'),
        'basePath' => 'assets',

        'default' => [
            'assets' => [
                '@jquery_js',

                '@jqueryui_css',
                '@jqueryui_js',

                /*'@jqueryLibs_css',
                '@jqueryLibs_js',*/

                '@twbs_css',
                '@twbs_js',

                '@bootstrap_datetimepicker_css',
                '@bootstrap_datetimepicker_js',

                /*'@dhtmlxscheduler_css',
                '@dhtmlxscheduler_js',*/

                '@agere_js',
                //'@agere_css',


                //'@jqGrid_css',
                //'@jqGrid_js',
            ],
            'options' => [
                'mixin' => true,
            ],
        ],

        'modules' => [
            'jquery' => [
                // vendor\components\jquery\jquery.min.js
                'root_path' => realpath('vendor/components/jquery'),
                'collections' => [
                    /*'twbs_css' => [
                        'assets' => [
                            'assets/stylesheets/_bootstrap.scss'
                        ],
                        'filters' => ['scss' => ['name' => \Assetic\Filter\ScssphpFilter::class]],
                        'options' => ['output' => 'twbs_css.css'],
                    ],*/
                    'jquery_js' => [
                        'assets' => [
                            // vendor\twbs\bootstrap-sass\assets\javascripts\bootstrap.min.js
                            'jquery.min.js',
                        ],
                    ],
                ],
            ],
            'jqueryui' => [
                'root_path' => realpath('vendor/components/jqueryui'),
                'collections' => [
                    // vendor\components\jqueryui\themes\base\jquery-ui.min.css
                    'jqueryui_css' => [
                        'assets' => [
                            'themes/base/jquery-ui.min.css'
                        ],
                        //'filters' => ['scss' => ['name' => \Assetic\Filter\ScssphpFilter::class]],
                        //'options' => ['output' => 'twbs_css.css'],
                    ],
                    'jqueryui_js' => [
                        'assets' => [
                            // vendor\components\jqueryui\jquery-ui.min.js
                            'jquery-ui.min.js',
                        ],
                    ],
                    'jqueryui_images' => [
                        'assets' => [
                            // \vendor\components\jqueryui\themes\base\images\ui-icons_444444_256x240.png
                            'themes/base/images/*.png',
                            'themes/base/images/*.jpg',
                        ],
                        'options' => [
                            //'move_raw' => true,
                            //'targetPath' => 'jquery-ui/images',
                            'disable_source_path' => true,
                            'move_raw' => true,
                            'targetPath' => 'images',
                        ]
                    ],
                ],
            ],
            /*'jqueryLibs' => [
                'root_path' => realpath('public/media'),
                'collections' => [
                    'jqueryLibs_css' => [
                        'assets' => [
                            // <link rel="stylesheet" href="/media/js/jquery/jquery-loadmask-0.4/jquery.loadmask.css">
                            'js/jquery/jquery-loadmask-0.4/jquery.loadmask.css'
                        ],
                    ],
                    'jqueryLibs_js' => [
                        'assets' => [
                            // <script src="/media/js/jquery/jquery-loadmask-0.4/jquery.loadmask.min.js?40"></script>
                            'js/jquery/jquery-loadmask-0.4/jquery.loadmask.min.js',
                        ],
                    ],
                ],
            ],*/
            'twbs' => [
                // vendor\twbs\bootstrap-sass\assets\stylesheets\_bootstrap.scss
                'root_path' => realpath('vendor/twbs/bootstrap-sass'),
                'collections' => [
                    'twbs_css' => [
                        'assets' => [
                            'assets/stylesheets/_bootstrap.scss',
                            
                        ],
                        'filters' => ['scss' => ['name' => \Assetic\Filter\ScssphpFilter::class]],
                        'options' => ['output' => 'css/twbs_css.css'],
                    ],
                    'twbs_js' => [
                        'assets' => [
                            // vendor\twbs\bootstrap-sass\assets\javascripts\bootstrap.min.js
                            'assets/javascripts/bootstrap.min.js',
                        ],
                    ],
                    'twbs_fonts' => [
                        'assets' => [
                            'assets/fonts/bootstrap/*',
                        ],
                        'options' => [
                            'disable_source_path' => true,
                            'move_raw' => true,
                            'targetPath' => 'fonts/bootstrap',
                        ],
                    ],
                ],
            ],
            'bootstrap_datetimepicker' => [
                // vendor\twbs\bootstrap-sass\assets\stylesheets\_bootstrap.scss
                'root_path' => realpath('vendor/components'),
                'collections' => [
                    'bootstrap_datetimepicker_css' => [
                        'assets' => [
                            'bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
                            //'bootstrap/css/bootstrap.css',
                            //'bootstrap/css/bootstrap.min.css'

                        ],
                    ],
                    'bootstrap_datetimepicker_js' => [
                        'assets' => [
                            //'bootstrap/js/bootstrap.min.js',
                            'bootstrap-datetimepicker/js/bootstrap-datetimepicker.js',
                            'bootstrap-datetimepicker/js/locales/bootstrap-datetimepicker.ru.js',
                            //'js/locales/*'
                        ],
                    ],
                ],
            ],

           /* 'jqGrid' => [
                // <link rel="stylesheet" href="/media/js/jquery/jquery-ui-1.10.1.custom/css/custom-theme/jquery-ui-1.10.1.custom.min.css">
	            // <link rel="stylesheet" href="/media/js/jquery/jqGrid/css/ui.jqgrid.css">

                //<script src="/media/js/jquery/jqGrid/js/i18n/grid.locale-ru.js"></script>
                //<script src="/media/js/jquery/jqGrid/jquery.jqGrid-4.6.0.js"></script>
                // vendor\twbs\bootstrap-sass\assets\stylesheets\_bootstrap.scss
                'root_path' => realpath('public/media/js/jquery/jqGrid'),
                'collections' => [
                    'jqGrid_css' => [
                        'assets' => [
                            'css/ui.jqgrid.css'
                        ],
                    ],
                    'jqGrid_js' => [
                        'assets' => [
                            // vendor\twbs\bootstrap-sass\assets\javascripts\bootstrap.min.js
                            'js/i18n/grid.locale-ru.js',
                            'jquery.jqGrid-4.6.0.js',
                        ],
                    ],
                ],
            ],*/

            // навіщо це глобально підключати? воно має бути доступне тільки на одній сторінці? 
            ///це коли тестив, підключав і в модулі і тут) потірбно прибрати
            // в тебе дуже багато по коді артефактів, почисть, чим далі, тим буде гірше
            // що це все таке? ))) вже пора почистити, добре
            /*'dhtmlxscheduler' => [
                // vendor\twbs\bootstrap-sass\assets\stylesheets\_bootstrap.scss
                'root_path' => realpath('public/media'),
                'collections' => [
                    'dhtmlxscheduler_js' => [
                        'assets' => [
                            'dhtmlxscheduler/dhtmlxscheduler.js',
                            'dhtmlxscheduler/ext/dhtmlxscheduler_active_links.js',
                            'dhtmlxscheduler/ext/dhtmlxscheduler_agenda_view.js',
                            'dhtmlxscheduler/ext/dhtmlxscheduler_readonly.js',
                            'dhtmlxscheduler/ext/dhtmlxscheduler_minical.js',
                            'dhtmlxscheduler/ext/dhtmlxscheduler_pdf.js',
                        ],
                    ],
                    'dhtmlxscheduler_css' => [
                        'assets' => [
                            'dhtmlxscheduler/dhtmlxscheduler.css',
                        ],
                    ],
                ],
            ],*/

            'agere' => [
                // vendor\twbs\bootstrap-sass\assets\stylesheets\_bootstrap.scss
                'root_path' => realpath('public/media'),
                'collections' => [
                    'agere_js' => [
                        'assets' => [
                            'js/agere/agere.datepicker.js',
                            'js/agere/agere.preloader.js',
                            //'js/agere/agere.scheduler.js',
                        ],
                    ],
                ],
            ],

        ],
    //],
];