<?php namespace Defr\CrmModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Anomaly\Streams\Platform\Stream\Contract\StreamRepositoryInterface;

class ActivitiesController extends AdminController
{

    /**
     * Choose a stream to create
     *
     * @param   StreamRepositoryInterface  $streams  The streams
     * @return  View
     */
    public function choose(StreamRepositoryInterface $streams)
    {
        /* @var StreamCollection $moduleStreams */
        $moduleStreams = $streams->findAllByNamespace('crm');

        return $this->view->make('defr.module.crm::choose', [
            'streams' => $moduleStreams,
        ]);
    }

}
