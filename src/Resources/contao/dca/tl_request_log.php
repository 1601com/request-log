<?php
$GLOBALS['TL_DCA']['tl_request_log'] =
    [
        'config' =>
            [
                'dataContainer' => 'Table',
                'enableVersioning' => false,
                'sql' =>
                    [
                        'keys' =>
                            [
                                'id' => 'primary',
                            ]
                    ]
            ],
        'list' =>
            [
                #'sorting' =>
                #    [
                #        'mode' => 4,
                #        'fields' => ['name'],
                #        'panelLayout' => 'filter;search,limit',
                #        'headerFields' => ['name', 'author', 'tstamp'],
                #        'child_record_callback' => ['tl_style_sheet', 'listStyleSheet']
                #    ],
                'operations' =>
                    [
                        'edit' =>
                            [
                                'href' => 'table=tl_style',
                                'icon' => 'edit.svg'
                            ],
                        'show' =>
                            [
                                'href' => 'act=show',
                                'icon' => 'show.svg'
                            ],
                    ]
            ],
        'palettes' =>
            [
                'default' => '{title_legend},id,tstamp'
            ],
        'fields' =>
            [
                'id' =>
                    [
                        'sql' => "int(10) unsigned NOT NULL auto_increment"
                    ],
                'tstamp' =>
                    [
                        'sql' => "int(10) unsigned NOT NULL default 0"
                    ],
            ]
    ];
