<?php

namespace Tejas\AddCron\Cron;

use Psr\Log\LoggerInterface;

class CustomJob
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @param LoggerInterface $logger
     */
    public function __construct(
        LoggerInterface $logger
    ) {
        $this->logger = $logger;
    }

    public function execute()
    {
        try {
            $this->logger->info('Tejas added cron job executed successfully.');
        } catch (\Exception $e) {
            $this->logger->error('An error occurred while executing the custom cron job: ' . $e->getMessage());
        }
    }
}