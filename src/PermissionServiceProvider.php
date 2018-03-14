<?php

namespace Beli\Permissions;

use Illuminate\Support\ServiceProvider;

class PermissionServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Publicar permisos
         */
        $this->publishes(
            [ 
                __DIR__.'/config/permissions.php' => config_path('permissions.php'),
            ],
             'config'
        );
        /**
         * Publicar Migraciones
         */
        $this->publishes( 
            [
                __DIR__.'/database/migrations/' => database_path('migrations')
            ]
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        config(['config(permissions.php']);
    }
}
