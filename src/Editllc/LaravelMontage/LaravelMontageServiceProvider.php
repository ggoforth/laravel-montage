<?php namespace Editllc\LaravelMontage;

use Illuminate\Support\ServiceProvider;
use Montage\Montage;

/**
 * Class LaravelMontageServiceProvider
 * @package Editllc\LaravelMontage
 */
class LaravelMontageServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

    /**
     * Publish the config files to the right place.
     */
    public function boot()
    {
        // Package configuration
        $this->publishes([
            __DIR__ . '/config/config.php' => config_path('montage.php')
        ], 'montage');
    }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app->bind('montage', function () {
            $montage = new Montage($this->app->config->get('montage.subdomain'));

            $montage->auth(
                $this->app->config->get('montage.username'),
                $this->app->config->get('montage.password')
            );

            return $montage;
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return ['montage'];
	}

}
