<?php

namespace Agentur1601com\RequestLog\EventListener;

use Agentur1601com\RequestLog\Model\RequestLogModel;
use Contao\LayoutModel;
use Contao\PageModel;
use Contao\PageRegular;
use DateTime;

class GeneratePageListener
{

    public function execute(PageModel $pageModel, LayoutModel $layout, PageRegular $pageRegular): void
    {
        if (!\Config::get('requestLogActive')) {
            return;
        }
        $headerList = [];
        foreach ($_SERVER as $name => $value) {
            if (!preg_match('/^HTTP_/', $name)) {
                //no http header
                continue;
            }
            // convert HTTP_HEADER_NAME to Header-Name
            $name = strtr(mb_substr($name, 5), '_', ' ');
            $name = ucwords(mb_strtolower($name));
            $name = strtr($name, ' ', '-');
            $headerList[$name] = $value;
        }
        $log = new RequestLogModel();
        $log->requestMethod = $_SERVER['REQUEST_METHOD'];
        $log->requestUri = $_SERVER['REQUEST_URI'];
        $log->serverProtocol = $_SERVER['SERVER_PROTOCOL'];
        $log->remoteAddress = $_SERVER['REMOTE_ADDR'];
        $log->requestData = $this->_arrayToString($_REQUEST);
        $log->headerData = $this->_arrayToString($headerList);
        $log->tstamp = time();
        $log->save();
    }

    private function _arrayToString($array)
    {
        $result = '';
        foreach ($array as $key => $value) {
            $result .= sprintf('%s: %s%s', $key, $value, PHP_EOL);
        }
        return $result;
    }
}
