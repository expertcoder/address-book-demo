<?php

namespace App\ElasticsearchConnect\Providers;

use App\ElasticsearchConnect\ElasticsearchConnect;
use Illuminate\Support\ServiceProvider;

class ElasticsearchConnectServiceProvider extends ServiceProvider
{

	protected $subscribe = [
		ElasticsearchableSubscriber::class,
	];


	/**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
		$this->app->singleton(ElasticsearchConnect::class, function ($app) {
			return new ElasticsearchConnect($app->elasticsearch->connection() );
		});
    }
}
