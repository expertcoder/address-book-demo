<?php

namespace App\Console\Commands;

use App\ElasticsearchConnect\ElasticsearchConnect;
use Illuminate\Console\Command;

class SyncElasticSearch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:sync-es';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset and sync from Database to ElasticSearch';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(ElasticsearchConnect $connect)
    {
		//NOTE: this could be optmised by using the Bulk API

		$this->info('Deleting entire index');

		$connect->deleteDefaultIndex();

    	$addresses = \App\Models\Address::all();

		foreach ($addresses as $address) {

			$this->info('Syncing address '. $address->id );

			$connect->index($address);

		}

    }
}
