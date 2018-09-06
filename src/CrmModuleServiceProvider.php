<?php namespace Defr\CrmModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Anomaly\Streams\Platform\Model\Crm\CrmComplaintsEntryModel;
use Anomaly\Streams\Platform\Model\Crm\CrmIdeasEntryModel;
use Defr\CrmModule\Complaint\ComplaintModel;
use Defr\CrmModule\Complaint\ComplaintRepository;
use Defr\CrmModule\Complaint\Contract\ComplaintRepositoryInterface;
use Defr\CrmModule\Idea\Contract\IdeaRepositoryInterface;
use Defr\CrmModule\Idea\IdeaModel;
use Defr\CrmModule\Idea\IdeaRepository;
use Illuminate\Routing\Router;

class CrmModuleServiceProvider extends AddonServiceProvider
{

    /**
     * Additional addon plugins.
     *
     * @type array|null
     */
    protected $plugins = [];

    /**
     * The addon Artisan commands.
     *
     * @type array|null
     */
    protected $commands = [];

    /**
     * The addon's scheduled commands.
     *
     * @type array|null
     */
    protected $schedules = [];

    /**
     * The addon API routes.
     *
     * @type array|null
     */
    protected $api = [];

    /**
     * The addon routes.
     *
     * @type array|null
     */
    protected $routes = [
        'admin/crm/choose_type'     => 'Defr\CrmModule\Http\Controller\Admin\ActivitiesController@choose',
        'admin/crm'                 => 'Defr\CrmModule\Http\Controller\Admin\ComplaintsController@index',
        'admin/crm/create'          => 'Defr\CrmModule\Http\Controller\Admin\ComplaintsController@create',
        'admin/crm/edit/{id}'       => 'Defr\CrmModule\Http\Controller\Admin\ComplaintsController@edit',
        'admin/crm/ideas'           => 'Defr\CrmModule\Http\Controller\Admin\IdeasController@index',
        'admin/crm/ideas/create'    => 'Defr\CrmModule\Http\Controller\Admin\IdeasController@create',
        'admin/crm/ideas/edit/{id}' => 'Defr\CrmModule\Http\Controller\Admin\IdeasController@edit',
    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //Defr\CrmModule\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * Addon group middleware.
     *
     * @var array
     */
    protected $groupMiddleware = [
        //'web' => [
        //    Defr\CrmModule\Http\Middleware\ExampleMiddleware::class,
        //],
    ];

    /**
     * Addon route middleware.
     *
     * @type array|null
     */
    protected $routeMiddleware = [];

    /**
     * The addon event listeners.
     *
     * @type array|null
     */
    protected $listeners = [
        //Defr\CrmModule\Event\ExampleEvent::class => [
        //    Defr\CrmModule\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => Defr\CrmModule\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        CrmIdeasEntryModel::class      => IdeaModel::class,
        CrmComplaintsEntryModel::class => ComplaintModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        IdeaRepositoryInterface::class      => IdeaRepository::class,
        ComplaintRepositoryInterface::class => ComplaintRepository::class,
    ];

    /**
     * Additional service providers.
     *
     * @type array|null
     */
    protected $providers = [
        //\ExamplePackage\Provider\ExampleProvider::class
    ];

    /**
     * The addon view overrides.
     *
     * @type array|null
     */
    protected $overrides = [
        //'streams::errors/404' => 'module::errors/404',
        //'streams::errors/500' => 'module::errors/500',
    ];

    /**
     * The addon mobile-only view overrides.
     *
     * @type array|null
     */
    protected $mobile = [
        //'streams::errors/404' => 'module::mobile/errors/404',
        //'streams::errors/500' => 'module::mobile/errors/500',
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        // Run extra pre-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Boot the addon.
     */
    public function boot()
    {
        // Run extra post-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Map additional addon routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        // Register dynamic routes here for example.
        // Use method injection or commands to bring in services.
    }

}
