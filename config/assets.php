<?php

/*return [
    'debug' => true,
    'buildOnRequest' => true,

    // This is optional flag, by default set to `true`.
    // In debug mode allow you to combine all assets to one file.
    // 'combine' => false,
    // this is specific to this project
    'webPath' => realpath('public/assets'),
    'basePath' => 'assets',

];*/

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
            ],
            'options' => [
                'mixin' => true,
            ],
        ],

        'modules' => [
            'jquery' => [
                'root_path' => realpath('vendor/components/jquery'),
                'collections' => [
                    'jquery_js' => [
                        'assets' => [
                            'jquery.min.js',
                        ],
                    ],
                ],
            ],
            'jqueryui' => [
                'root_path' => realpath('vendor/components/jqueryui'),
                'collections' => [
                    'jqueryui_css' => [
                        'assets' => [
                            'themes/base/jquery-ui.min.css'
                        ],
                        //'filters' => ['scss' => ['name' => \Assetic\Filter\ScssphpFilter::class]],
                        //'options' => ['output' => 'twbs_css.css'],
                    ],
                    'jqueryui_js' => [
                        'assets' => [
                            'jquery-ui.min.js',
                        ],
                    ],
                    'jqueryui_images' => [
                        'assets' => [
                            'themes/base/images/*.png',
                            'themes/base/images/*.jpg',
                        ],
                        'options' => [
                            'move_raw' => true,
                            'disable_source_path' => true,
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
                'root_path' => realpath('vendor/components'),
                'collections' => [
                    'bootstrap_datetimepicker_css' => [
                        'assets' => [
                            'bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
                        ],
                    ],
                    'bootstrap_datetimepicker_js' => [
                        'assets' => [
                            'bootstrap-datetimepicker/js/bootstrap-datetimepicker.js',
                            'bootstrap-datetimepicker/js/locales/bootstrap-datetimepicker.ru.js',
                        ],
                    ],
                ],
            ],

            /*'agere' => [
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
            ],*/

        ],
    //],
];