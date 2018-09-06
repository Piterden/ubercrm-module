<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class DefrModuleCrmCreateIdeasStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'ideas',
        'title_column' => 'name',
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name',
        'subject',
        'text1',
        'textarea1',
    ];

}
