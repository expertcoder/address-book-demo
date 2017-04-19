<?php

namespace App\ElasticsearchConnect;

use Elasticsearch\Client;

class ElasticsearchConnect
{

	protected $client;

	protected $defaultIndex = 'demo';

	public function __construct(Client $client)
	{
		$this->client = $client;
	}

	/**
	 * @return string
	 */
	public function getDefaultIndex()
	{
		return $this->defaultIndex;
	}


	public function index(ElasticsearchableInterface $item)
	{
		$params = [
			'body' => $item->getEsData(),
			'index' => $this->getDefaultIndex(),
			'type' => $item->getEsType(),
			'id' => $item->getEsId(),
		];

		$this->client->index($params);
	}

	public function delete(ElasticsearchableInterface $item)
	{
		$params = [
			'index' => $this->getDefaultIndex(),
			'type' => $item->getEsType(),
			'id' => $item->getEsId(),
		];

		$this->client->delete($params);
	}

	public function deleteDefaultIndex()
	{
		$params['index']  = $this->getDefaultIndex();

		if ($this->client->indices()->exists($params) ) {
			$this->client->indices()->delete($params);
		}
	}
}