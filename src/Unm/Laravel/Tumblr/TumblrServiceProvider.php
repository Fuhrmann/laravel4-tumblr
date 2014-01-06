<?php

namespace Unm\Laravel\Tumblr;

use Illuminate\Support\ServiceProvider;

class TumblrServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
        $this->package('unm/laravel4-tumblr', 'tumblr', __DIR__. '/../../..');

        if($this->app['config']->get('tumblr::publish_routes')) {
            include_once(__DIR__ . '/../../../routes.php');
        }

    }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app->bind('tumblr', function($app) {
            $c = new \Tumblr\API\Client($app['config']->get('tumblr::consumer_key'),$app['config']->get('tumblr::secret'));

            # If they have the auth tokens, then put them in.
            if(!empty($app['config']->get('tumblr::token')))
            {
                $c->setToken($app['config']->get('tumblr::token'),$app['config']->get('tumblr::token_secret'));
            }

            return $c;
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('tumblr');
	}

}