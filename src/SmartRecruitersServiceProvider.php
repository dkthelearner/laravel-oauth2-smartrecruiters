<?php

/**
 * This file is part of the krdinesh/laravel-oauth2-smartrecruiters library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) Dinesh Kumar <kumardinesh0521@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT
 * @link https://packagist.org/packages/krdinesh/laravel-oauth2-smartrecruiters Packagist
 * @link https://github.com/krdinesh/laravel-oauth2-smartrecruiters GitHub
 */

namespace Krdinesh\Laravel\OAuth2\SmartRecruiters;

use Illuminate\Support\ServiceProvider;
use Krdinesh\OAuth2\Client\Provider\SmartRecruiters as KrSmartRecruiters;

/**
 * The SmartRecruitersServiceProvider provides easy access to league/oauth2-smartrecruiters
 * for use with Laravel
 */
class SmartRecruitersServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Perform post-registration booting of services.
     * @return void
     */
    public function boot() {
        $this->publishes([
            __DIR__ . '/config/smartrecruiters.php' => config_path('smartrecruiters.php'),
        ]);
    }

    /**
     * Register the application services.
     * @return void
     */
    public function register() {
        $this->app->bind(KrSmartRecruiters::class, function ($app) {
            return new KrSmartRecruiters([
                'clientId'     => config('smartrecruiters.clientId'),
                'clientSecret' => config('smartrecruiters.clientSecret'),
                'redirectUri'  => config('smartrecruiters.redirectUri')
            ]);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {
        return [
            KrSmartRecruiters::class
        ];
    }

}
