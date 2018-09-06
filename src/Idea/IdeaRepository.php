<?php namespace Defr\CrmModule\Idea;

use Defr\CrmModule\Idea\Contract\IdeaRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class IdeaRepository extends EntryRepository implements IdeaRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var IdeaModel
     */
    protected $model;

    /**
     * Create a new IdeaRepository instance.
     *
     * @param IdeaModel $model
     */
    public function __construct(IdeaModel $model)
    {
        $this->model = $model;
    }
}
