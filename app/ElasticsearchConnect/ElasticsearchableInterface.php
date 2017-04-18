<?php

namespace App\ElasticsearchConnect;

interface ElasticsearchableInterface
{
	public function getEsId();

	public function getEsData();

	public function getEsType();

}