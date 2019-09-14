<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\File;

class WordPressProvider extends ServiceProvider
{
    protected $bootstrapFilePath = __DIR__.'/../../public/wp-core/wp-load.php';
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if(File::exists($this->bootstrapFilePath)) {
            require_once $this->bootstrapFilePath;
        } else throw new \RuntimeException('WordPress Bootstrap file not found!');
    }
}
