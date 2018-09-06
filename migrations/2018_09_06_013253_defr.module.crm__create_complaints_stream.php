<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class DefrModuleCrmCreateComplaintsStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'complaints',
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
        'text2',
    ];

}
