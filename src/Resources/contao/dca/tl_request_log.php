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
                'requestMethod' =>
                    [
                        'sql' => "varchar(255) NOT NULL default ''"
                    ],
                'requestUri' =>
                    [
                        'sql' => "varchar(255) NOT NULL default ''"
                    ],
                'serverProtocol' =>
                    [
                        'sql' => "varchar(255) NOT NULL default ''"
                    ],
                'remoteAddress' =>
                    [
                        'sql' => "varchar(255) NOT NULL default ''"
                    ],
                'requestData' =>
                    [
                        'sql' => "text NOT NULL default ''"
                    ],
                'headerData' =>
                    [
                        'sql' => "text NOT NULL default ''"
                    ],
            ]
    ];
