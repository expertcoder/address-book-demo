<?php

namespace App\ElasticsearchConnect\Listeners;

use App\ElasticsearchConnect\ElasticsearchConnect;

class ElasticsearchableSubscriber
{
	protected $connect;

	public function __construct(ElasticsearchConnect $connect)
	{
		$this->connect = $connect;
	}


	public function subscribe($eventsDispatcher)
	{
		$eventsDispatcher->listen('eloquent.saved: *', self::class.'@onSaved');
		$eventsDispatcher->listen('eloquent.deleted: *', self::class.'@onDeleted');
	}

	public function onSaved($event, $args)
	{
		$model = reset($args);

		$this->connect->index($model);
	}

	public function onDeleted($event, $args)
	{
		$model = reset($args);

		$this->connect->delete($model);
	}

}