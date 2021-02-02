<?php
$GLOBALS['T_HOOKS']['initializeSystem'][] = [Agentur1601com\RequestLog\InitializeSystemListener::class, 'execute'];
$GLOBALS['TL_MODELS']['tl_request_log'] = \Agentur1601com\RequestLog\Model\RequestLogModel::class;
