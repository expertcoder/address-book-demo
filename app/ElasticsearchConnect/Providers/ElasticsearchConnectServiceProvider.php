<?php

namespace App\ElasticsearchConnect\Providers;

use App\ElasticsearchConnect\ElasticsearchConnect;
use App\ElasticsearchConnect\Listeners\ElasticsearchableSubscriber;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class ElasticsearchConnectServiceProvider extends ServiceProvider
{
	/**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
		Event::subscribe(ElasticsearchableSubscriber::class);
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
