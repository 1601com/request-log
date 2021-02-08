<?php
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{request_log_legend},requestLogActive';
$GLOBALS['TL_DCA']['tl_settings']['fields']['requestLogActive'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_settings']['requestLogActive'],
    'inputType' => 'checkbox',
    'eval' => ['tl_class' => 'w50'],
];
