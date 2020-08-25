<?php namespace Chumper\Zipper;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class ZipperServiceProvider extends ServiceProvider {

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

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['zipper'] = $this->app->share(function($app)
        {
            $return = $app->make('Chumper\Zipper\Zipper');
            return $return;
        });

        $this->app->booting(function()
        {
            $loader = AliasLoader::getInstance();
            $loader->alias('Zipper', 'Chumper\Zipper\Facades\Zipper');
        });
    }

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('zipper');
	}

}
