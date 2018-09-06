<?php namespace Defr\CrmModule\Complaint\Table;

use Anomaly\Streams\Platform\Stream\Contract\StreamRepositoryInterface;

class ComplaintTableEntries
{

    /**
     * Streams repository
     *
     * @var StreamRepositoryInterface
     */
    protected $streams;

    /**
     * Create an instance of ComplaintTableEntries class
     *
     * @param  StreamRepositoryInterface  $streams  The streams
     */
    public function __construct(StreamRepositoryInterface $streams)
    {
        $this->streams = $streams;
    }

    /**
     * Handle the table entries
     *
     * @param  ComplaintTableBuilder  $builder  The builder
     */
    public function handle(ComplaintTableBuilder $builder)
    {
        $builder->getTable()->setEntries(
            $this->streams->findAllByNamespace('crm')->map(function ($stream) {
                return app($stream->getBoundEntryModelName())->all();
            })->collapse()
        );
    }

}
