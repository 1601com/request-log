<?php
$GLOBALS['TL_HOOKS']['generatePage'][] = [Agentur1601com\RequestLog\EventListener\GeneratePageListener::class, 'execute'];
$GLOBALS['TL_MODELS']['tl_request_log'] = \Agentur1601com\RequestLog\Model\RequestLogModel::class;
