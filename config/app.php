<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services your application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

	/*
	|--------------------------------------------------------------------------
	| Application Debug Mode
	|--------------------------------------------------------------------------
	|
	| When your application is in debug mode, detailed error messages with
	| stack traces will be shown on every error that occurs within your
	| application. If disabled, a simple generic error page is shown.
	|
	*/

	'debug' => env('APP_DEBUG'),

	/*
	|--------------------------------------------------------------------------
	| Application URL
	|--------------------------------------------------------------------------
	|
	| This URL is used by the console to properly generate URLs when using
	| the Artisan command line tool. You should set this to the root of
	| your application so that it is used when running Artisan tasks.
	|
	*/

	'url' => env('APP_URL', 'http://localhost'),

	/*
	|--------------------------------------------------------------------------
	| Application Timezone
	|--------------------------------------------------------------------------
	|
	| Here you may specify the default timezone for your application, which
	| will be used by the PHP date and date-time functions. We have gone
	| ahead and set this to a sensible default for you out of the box.
	|
	*/

	'timezone' => 'UTC',

	/*
	|--------------------------------------------------------------------------
	| Application Locale Configuration
	|--------------------------------------------------------------------------
	|
	| The application locale determines the default locale that will be used
	| by the translation service provider. You are free to set this value
	| to any of the locales which will be supported by the application.
	|
	*/

	'locale' => 'en',

	/*
	|--------------------------------------------------------------------------
	| Application Fallback Locale
	|--------------------------------------------------------------------------
	|
	| The fallback locale determines the locale to use when the current one
	| is not available. You may change the value to correspond to any of
	| the language folders that are provided through your application.
	|
	*/

	'fallback_locale' => 'en',

	/*
	|--------------------------------------------------------------------------
	| Encryption Key
	|--------------------------------------------------------------------------
	|
	| This key is used by the Illuminate encrypter service and should be set
	| to a random, 32 character string, otherwise these encrypted strings
	| will not be safe. Please do this before deploying an application!
	|
	*/

	'key' => env('APP_KEY', 'SomeRandomString'),

	'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Logging Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log settings for your application. Out of
    | the box, Laravel uses the Monolog PHP logging library. This gives
    | you a variety of powerful log handlers / formatters to utilize.
    |
    | Available Settings: "single", "daily", "syslog", "errorlog"
    |
    */

    'log' => env('APP_LOG', 'single'),

    'log_level' => env('APP_LOG_LEVEL', 'debug'),

	/*
	|--------------------------------------------------------------------------
	| Autoloaded Service Providers
	|--------------------------------------------------------------------------
	|
	| The service providers listed here will be automatically loaded on the
	| request to your application. Feel free to add your own services to
	| this array to grant expanded functionality to your applications.
	|
	*/

	'providers' => [

		/*
		 * Laravel Framework Service Providers...
		 */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

		/*
		 * Application Service Providers...
		 */
        App\Providers\AppServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
        Collective\Html\HtmlServiceProvider::class,
		App\Providers\MacroServiceProvider::class,						// TAKE NOTE: This needs to load after HtmlServiceProvider
        Laravel\Socialite\SocialiteServiceProvider::class,				// http://laravel.com/docs/5.1/authentication#social-authentication
        SocialiteProviders\Manager\ServiceProvider::class,				// https://socialiteproviders.github.io/
        Creativeorange\Gravatar\GravatarServiceProvider::class,         // https://github.com/creativeorange/gravatar
        Bootstrapper\BootstrapperL5ServiceProvider::class,              // https://github.com/patricktalmadge/bootstrapper/
        Cviebrock\EloquentSluggable\SluggableServiceProvider::class,    // https://github.com/cviebrock/eloquent-sluggable
        Intervention\Image\ImageServiceProvider::class,                 // http://image.intervention.io/getting_started/installation#laravel
        DaveJamesMiller\Breadcrumbs\ServiceProvider::class,             // http://laravel-breadcrumbs.davejamesmiller.com/en/latest/start.html
        Thujohn\Twitter\TwitterServiceProvider::class,					// https://github.com/thujohn/twitter - https://apps.twitter.com/
        Cornford\Googlmapper\MapperServiceProvider::class,

        Kyslik\ColumnSortable\ColumnSortableServiceProvider::class,

        Rap2hpoutre\LaravelLogViewer\LaravelLogViewerServiceProvider::class,
	],

	/*
	|--------------------------------------------------------------------------
	| Class Aliases
	|--------------------------------------------------------------------------
	|
	| This array of class aliases will be registered when this application
	| is started. However, feel free to register as many as you wish as
	| the aliases are "lazy" loaded so they don't hinder performance.
	|
	*/

	'aliases' => [

        'App'           => Illuminate\Support\Facades\App::class,
        'Artisan'       => Illuminate\Support\Facades\Artisan::class,
        'Auth'          => Illuminate\Support\Facades\Auth::class,
        'Blade'         => Illuminate\Support\Facades\Blade::class,
        'Bus'           => Illuminate\Support\Facades\Bus::class,
        'Cache'         => Illuminate\Support\Facades\Cache::class,
        'Config'        => Illuminate\Support\Facades\Config::class,
        'Cookie'        => Illuminate\Support\Facades\Cookie::class,
        'Crypt'         => Illuminate\Support\Facades\Crypt::class,
        'DB'            => Illuminate\Support\Facades\DB::class,
        'Eloquent'      => Illuminate\Database\Eloquent\Model::class,
        'Event'         => Illuminate\Support\Facades\Event::class,
        'File'          => Illuminate\Support\Facades\File::class,
        'Gate'          => Illuminate\Support\Facades\Gate::class,
        'Hash'          => Illuminate\Support\Facades\Hash::class,
        'Input'         => Illuminate\Support\Facades\Input::class,
        'Inspiring'     => Illuminate\Foundation\Inspiring::class,
        'Lang'          => Illuminate\Support\Facades\Lang::class,
        'Log'           => Illuminate\Support\Facades\Log::class,
        'Mail'          => Illuminate\Support\Facades\Mail::class,
        'Password'      => Illuminate\Support\Facades\Password::class,
        'Queue'         => Illuminate\Support\Facades\Queue::class,
        'Redirect'      => Illuminate\Support\Facades\Redirect::class,
        'Redis'         => Illuminate\Support\Facades\Redis::class,
        'Request'       => Illuminate\Support\Facades\Request::class,
        'Response'      => Illuminate\Support\Facades\Response::class,
        'Route'         => Illuminate\Support\Facades\Route::class,
        'Schema'        => Illuminate\Support\Facades\Schema::class,
        'Session'       => Illuminate\Support\Facades\Session::class,
        'Storage'       => Illuminate\Support\Facades\Storage::class,
        'URL'           => Illuminate\Support\Facades\URL::class,
        'Validator'     => Illuminate\Support\Facades\Validator::class,
        'View'          => Illuminate\Support\Facades\View::class,

        // ADD BACK IN LARAVEL FORM CLASSES WITH ALIASES - https://github.com/illuminate/html
        'HTML' 			=> Collective\Html\HtmlFacade::class,
        'Html' 			=> Collective\Html\HtmlFacade::class,
        'html'          => Collective\Html\HtmlFacade::class,
        'FORM'          => Collective\Html\FormFacade::class,
        'form'          => Collective\Html\FormFacade::class,
        'Form'          => Collective\Html\FormFacade::class,

        // ADD SOCIALITE
        'Socialite' 	=> Laravel\Socialite\Facades\Socialite::class,

        // ADD GRAVATAR CLASSES - https://github.com/creativeorange/gravatar
        'Gravatar'      => Creativeorange\Gravatar\Facades\Gravatar::class,

        // ADD BOOTSTRAPPER CLASSES -
        // https://github.com/patricktalmadge/bootstrapper/
        // http://bootstrapper.eu1.frbit.net/
        'Accordion'     => Bootstrapper\Facades\Accordion::class,
        'Alert'         => Bootstrapper\Facades\Alert::class,
        'Badge'         => Bootstrapper\Facades\Badge::class,
        'Breadcrumb'    => Bootstrapper\Facades\Breadcrumb::class,
        'Button'        => Bootstrapper\Facades\Button::class,
        'ButtonGroup'   => Bootstrapper\Facades\ButtonGroup::class,
        'Carousel'      => Bootstrapper\Facades\Carousel::class,
        'ControlGroup'  => Bootstrapper\Facades\ControlGroup::class,
        'DropdownButton'=> Bootstrapper\Facades\DropdownButton::class,
        'BootsrapForm'  => Bootstrapper\Facades\Form::class,
        'Helpers'       => Bootstrapper\Facades\Helpers::class,
        'Icon'          => Bootstrapper\Facades\Icon::class,
        'InputGroup'    => Bootstrapper\Facades\InputGroup::class,
        'Image'         => Bootstrapper\Facades\Image::class,
        'Label'         => Bootstrapper\Facades\Label::class,
        'MediaObject'   => Bootstrapper\Facades\MediaObject::class,
        'Modal'         => Bootstrapper\Facades\Modal::class,
        'Navbar'        => Bootstrapper\Facades\Navbar::class,
        'Navigation'    => Bootstrapper\Facades\Navigation::class,
        'Panel'         => Bootstrapper\Facades\Panel::class,
        'ProgressBar'   => Bootstrapper\Facades\ProgressBar::class,
        'Tabbable'      => Bootstrapper\Facades\Tabbable::class,
        'Table'         => Bootstrapper\Facades\Table::class,
        'Thumbnail'     => Bootstrapper\Facades\Thumbnail::class,

        // ADD BACKEND IMAGE PROCESSING SUPPORT - http://image.intervention.io/getting_started/installation#laravel
        'Image'         => Intervention\Image\Facades\Image::class,

        // ADD FUNCTIONAL BREADCRUMBS - http://laravel-breadcrumbs.davejamesmiller.com/en/latest/start.html
        'Breadcrumbs'   => DaveJamesMiller\Breadcrumbs\Facade::class,

        // ADD TWITTER API - https://github.com/thujohn/twitter - https://apps.twitter.com/
        'Twitter' 		=> Thujohn\Twitter\Facades\Twitter::class,
        'Mapper'        => Cornford\Googlmapper\Facades\MapperFacade::class,
	],

];