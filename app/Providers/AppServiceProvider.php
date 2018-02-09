<?php

namespace App\Providers;

use Alaouy\Youtube\Youtube;
use Illuminate\Support\ServiceProvider;
use League\OAuth2\Client\Provider\GenericProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->instance(GenericProvider::class, new GenericProvider([
            'clientId' => config('services.slack.client_id'),
            'clientSecret' => config('services.slack.client_secret'),
            'redirectUri' => config('services.slack.redirect_uri'),
            'urlAccessToken' => 'https://slack.com/api/oauth.access',
            'urlAuthorize' => 'https://slack.com/oauth/authorize',
            'urlResourceOwnerDetails' => 'https://slack.com/api/users.info',
        ]));
    }
}
