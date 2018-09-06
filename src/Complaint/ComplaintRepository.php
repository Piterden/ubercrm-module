<?php namespace Defr\CrmModule\Complaint;

use Defr\CrmModule\Complaint\Contract\ComplaintRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class ComplaintRepository extends EntryRepository implements ComplaintRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var ComplaintModel
     */
    protected $model;

    /**
     * Create a new ComplaintRepository instance.
     *
     * @param ComplaintModel $model
     */
    public function __construct(ComplaintModel $model)
    {
        $this->model = $model;
    }
}
