<?php

namespace Agentur1601com\RequestLog\Command;

use Agentur1601com\RequestLog\Model\RequestLogModel;
use Contao\CoreBundle\Command\AbstractLockedCommand;
use Contao\CoreBundle\Framework\FrameworkAwareInterface;
use Contao\CoreBundle\Framework\FrameworkAwareTrait;
use Doctrine\DBAL\Connection;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RequestLogPurgeCommand extends AbstractLockedCommand implements FrameworkAwareInterface
{
    use FrameworkAwareTrait;

    protected static $defaultName = 'agentur1601com:request-log-purge';

    /**
     * @var Connection
     */
    private $connection;

    protected function configure()
    {
        $this->setName(self::$defaultName)->setDescription('Purge the request log table.');
    }

    /**
     * @inheritDoc
     */
    protected function executeLocked(InputInterface $input, OutputInterface $output)
    {
        $this->framework->initialize();
        $this->connection = $this->getContainer()->get('database_connection');
        if (!$this->_execute()) {
            trigger_error('Failed to execute', E_USER_WARNING);
            return 1;
        }
        return 0;
    }

    private function _execute(): bool
    {
        $this->connection->executeQuery(sprintf('TRUNCATE TABLE %s', RequestLogModel::getTable()));

        return true;
    }

}
