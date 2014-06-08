<?php namespace Awellis13\Resque\Connectors;

use Config;
use Resque;
use Resque_Redis;
use ResqueScheduler;
use Awellis13\Resque\ResqueQueue;
use Illuminate\Queue\Connectors\ConnectorInterface;

/**
 * Class ResqueConnector
 *
 * @package Resque\Connectors
 */
class ResqueConnector implements ConnectorInterface {

	/**
	 * Establish a queue connection.
	 *
	 * @param array $config
	 * @return \Illuminate\Queue\QueueInterface
	 */
	public function connect(array $config)
	{
		if (!isset($config['host']))
		{
			$config = Config::get('database.redis.default');
		}

		if (!isset($config['port']))
		{
			$config['port'] = 6379;
		}

		if (!isset($config['database']))
		{
			$config['database'] = 0;
		}

		if (!empty($config['prefix']))
		{
			Resque_Redis::prefix($config['prefix']);
		}

		Resque::setBackend($config['host'].':'.$config['port'], $config['database']);

		return new ResqueQueue;
	}

} // End ResqueConnector
