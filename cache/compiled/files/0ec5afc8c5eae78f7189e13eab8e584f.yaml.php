<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/brianspector/Library/Mobile Documents/com~apple~CloudDocs/Documents/GitHub/grav-staging/user/plugins/mathjax/blueprints.yaml',
    'modified' => 1461252309,
    'data' => [
        'name' => 'MathJax',
        'version' => '1.4.0',
        'description' => 'This plugin allows you to include math formulas in your web pages, either using TeX and LaTeX notation, and/or as MathML.',
        'icon' => 'subscript',
        'author' => [
            'name' => 'Sommerregen',
            'email' => 'sommerregen@benjamin-regler.de'
        ],
        'homepage' => 'https://github.com/sommerregen/grav-plugin-mathjax',
        'docs' => 'https://github.com/sommerregen/grav-plugin-mathjax/blob/master/README.md',
        'keywords' => [
            0 => 'mathjax',
            1 => 'filter',
            2 => 'javascript',
            3 => 'plugin'
        ],
        'bugs' => 'https://github.com/sommerregen/grav-plugin-mathjax/issues',
        'license' => 'MIT/GPL',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'global' => [
                    'type' => 'section',
                    'title' => 'PLUGINS.MATHJAX.GLOBAL_CONFIG',
                    'underline' => 1,
                    'fields' => [
                        'enabled' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.MATHJAX.PLUGIN_STATUS',
                            'highlight' => 1,
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'built_in_css' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.MATHJAX.BUILTIN_CSS',
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'built_in_js' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.MATHJAX.BUILTIN_JS',
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'weight' => [
                            'type' => 'text',
                            'size' => 'x-small',
                            'label' => 'PLUGINS.MATHJAX.WEIGHT',
                            'default' => -5,
                            'help' => 'PLUGINS.MATHJAX.WEIGHT_HELP',
                            'validate' => [
                                'type' => 'int',
                                'min' => -100,
                                'max' => 100
                            ]
                        ]
                    ]
                ],
                'default' => [
                    'type' => 'section',
                    'title' => 'PLUGINS.MATHJAX.DEFAULT_CONFIG',
                    'underline' => 1,
                    'fields' => [
                        'CDN.enabled' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.MATHJAX.CDN.ENABLED',
                            'help' => 'PLUGINS.MATHJAX.CDN.ENABLED_HELP',
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'CDN.url' => [
                            'type' => 'text',
                            'label' => 'PLUGINS.MATHJAX.CDN.URL',
                            'default' => 'https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML',
                            'placeholder' => 'https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML',
                            'help' => 'PLUGINS.MATHJAX.CDN.URL_HELP'
                        ]
                    ]
                ],
                'specific' => [
                    'type' => 'section',
                    'title' => 'PLUGINS.MATHJAX.SPECIFIC_CONFIG',
                    'underline' => 1,
                    'fields' => [
                        'process' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.MATHJAX.PROCESS',
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
