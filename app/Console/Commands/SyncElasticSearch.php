<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

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
    protected $description = 'Sync from Database to ElasticSearch';

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
    public function handle()
    {




    	$addresses = DB::table('addresses')->get();

		foreach ($addresses as $address) {

			$data = [
				'body' => [
					'street' => $address->street,
					'postcode' => $address->postcode,
				],
				'index' => 'addresses',
				'type' => 'address',
				'id' => $address->id,
			];

			$r = \Elasticsearch::index($data);

		}




    }
}
