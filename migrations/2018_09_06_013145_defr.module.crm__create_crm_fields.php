<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class DefrModuleCrmCreateCrmFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'name'      => 'anomaly.field_type.text',
        'subject'   => 'anomaly.field_type.text',
        'text1'     => 'anomaly.field_type.text',
        'text2'     => 'anomaly.field_type.text',
        'textarea1' => 'anomaly.field_type.textarea',
    ];

}
