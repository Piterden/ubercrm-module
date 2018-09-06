<?php namespace Defr\CrmModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class CrmModule extends Module
{

    /**
     * The navigation display flag.
     *
     * @var bool
     */
    protected $navigation = true;

    /**
     * The addon icon.
     *
     * @var string
     */
    protected $icon = 'fa fa-puzzle-piece';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'activities' => [
            'buttons' => [
                'new_activity' => [
                    'data-toggle' => 'modal',
                    'data-target' => '#modal',
                    'href'        => 'admin/crm/choose_type',
                ],
            ],
        ],
    ];

}
